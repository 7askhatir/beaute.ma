<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../style/etablessment.css">
</head>
<body>

	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">AJOUTE UNE ETABLISSMENT</label>
		<div class="login-form">
            <form method="POST"   enctype=" multipart/form-data" >
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" value="<?php session_start(); echo $_SESSION['EMAIL']; ?>" type="text"  name="email_1" class="input">
				</div>
                <div class="group">
					<label for="Name_d" class="label">Name d'etablissment</label>
					<input id="Name" type="text" name="name_d" class="input" >
                </div>
                <div class="group">
					<label for="pass" class="label">Lien d'établissment</label>
                    <select id="cars" name="villelist"  name="ville" class="input" >
                       <option value="Casablanca">Casablanca	</option>
                       <option value="Rabat">Rabat</option>
                       <option value="Fes">Fes</option>
                       <option value="Agadir">Agadir</option>
                       <option value="Tanger">Tanger</option>
                       <option value="safi">safi</option>
                       <option value="Nador">Nador</option>
                       <option value="Laayoun">Laayoun</option>
                       <option value="Dakhla">Dakhla</option>
                       <option value="Tiznit">Tiznit</option>
                       <option value="Essaouira">Essaouira</option>
                       <option value="Marrakech">Marrakech</option>
                       <option value="Tmara">Tmara</option>
                       <option value="Meknas">Meknas</option>
                   </select>
                </div>
                <div class="group">
					<label for="adress_d" class="label">Adress d'établissment</label>
					<input id="Name_d" type="text" name="adress_d" class="input" >
                </div>
                <div class="group">
                    <label for="pass" class="label">N°telephone</label>
                    <input type="tel" id="phone" name="phone" pattern="[0]{1}[6-7]{1}[0-9]{8}" required  name="Pass" class="input">                                      
                    </div>
                    <div class="group">
					<label for="pass" class="label">Fonctionalite de votre etablessment</label>
                    <select id="cars" name="categorielist"  name="ville" class="input" >
                       <option value="2">Institut de beauté</option>
                       <option value="3">Barbier</option>
                       <option value="4">SPA</option>
                       <option value="1">Coiffeur</option>
                   </select>
                </div> 
             </div>
                <br><br>
				<div class="group">
                <button name="btn" class="button">Ajouter</button>
				</div>
				<div class="hr"></div>	
            </div>
            </form>
		</div>
    </div>
 
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST)){
        $Email=$_POST['email_1'];
        $NTele=$_POST['phone'];
        $Ville=$_POST['villelist'];
        $Categorie=$_POST['categorielist'];
        $Adress=$_POST['adress_d'];
        $Netab=$_POST['name_d'];    
        try {
            require('../database/database.php');
            $conn = Database::connect();
            $sql = "INSERT INTO `products` ( `productName`, `productVille`, `productAdress`, `productTELE`, `categoryId`,`Email`)  VALUES (?,?,?,?,?,?)";
            $stmt= $conn->prepare($sql);
            $stmt->execute([ $Netab, $Ville,$Adress,$NTele,$Categorie,$Email]);
            $sql="UPDATE `user` SET `exist` = 'exist' WHERE  `user`.`userEmail` ='$Email' ";
            $stmt2= $conn->prepare($sql);
            $stmt2->execute();
            header('Location: updet.php');
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
          
          $conn = null;
    }
  
    
    
}

?>

