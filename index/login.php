<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../style/login.css">
</head>
<body>

	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
            <form method="GET"  action="">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="text"  name="email_1" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="Pass" class="input" data-type="password">
                </div>
                <br><br>
				<div class="group">
                <button class="button">Sign In</button>
				</div>
				<div class="hr"></div>
				
            </div>
            </form>
            <?php
             session_start();
              $_SESSION["ID"]=NULL;
              $_SESSION["EMAIL"]=NULL;
            if ($_SERVER["REQUEST_METHOD"] == "GET"){
                if(isset($_GET['Pass']) && isset($_GET['email_1'])){
                    $PassW=$_GET['Pass'];
                    $Ema=$_GET['email_1'];
                    try {
                        require('../database/database.php');
                        $conn = Database::connect();
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $stmt = $conn->prepare("select userId from user WHERE userEmail=? AND userPassword=? ");
                        $stmt->execute([$Ema,$PassW]);
                        $data = $stmt->fetchAll();
                        if($data){
                            session_start();
                            $_SESSION["ID"]=$data;
                            $_SESSION["EMAIL"]=$Ema;
                            header('Location: index.php');
                        }
                        else{
                            $status="Email ou Password incorrect";
                            echo "<script type='text/javascript'>alert('$status');</script>";
                        }
                        
                      } catch(PDOException $e) {
                        echo  $e->getMessage();
                      }                  
                      $conn = null;
   
                }
            }
            ?>
            <!-- ***************************CONECTION******************************** -->
           <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name="Username" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="Password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" name="R_Password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" name="Email" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
            </div>
           </form>
		</div>
	</div>
</body>
</html>
<!-- ********************************* INSCREPTION ****************************** -->
<?php
$name = "";
$Password="";
$Password_R="";
$email="";
$status="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Username'];
    $Password=$_POST['Password'];
    $Password_R=$_POST['R_Password'];
    $email=$_POST['Email'];
    $pos = strpos($email, '@');
    $pos1 = strpos($email, '.');
    if($pos == false || $pos1 == false ){
        $status="Email invalid";
        echo "<script type='text/javascript'>alert('$status');</script>";
    }
    else if(strlen($Password)<5 || $Password !== $Password_R ){
        $status="Password invalid";
        echo "<script type='text/javascript'>alert('$status');</script>";

    }
    else if(strlen($name)<4){
        $status="Name invalid";
        echo "<script type='text/javascript'>alert('$status');</script>";

    }
    else{
        $status="Connected successful";
        echo "<script type='text/javascript'>alert('$status');</script>";
        try {
            require('../database/database.php');
            $conn = Database::connect();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `user` ( `userName`, `userEmail`, `userPassword`) VALUES (?,?,?)";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$name, $email, $Password]);
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
          
          $conn = null;
    }


}
?>
