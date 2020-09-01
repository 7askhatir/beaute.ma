<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/etablessment.css">
    <title>Document</title>
</head>
<body>
<div class="login-html">
<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">AJOUTE UNE IMAGE ET DESCRIPTION</label>
		<div class="login-form">
           <form method="POST"   enctype="multipart/form-data">
                <div class="group">
					<label for="image" class="label">Image d'établissment</label>
					<input id="image" type="file" name="image" class="input" >
                </div>
                <div class="group">
					<label for="adress_ds" class="label">Description d'établissment</label>
					<input id="Name_d" type="text" name="adress_ds" class="input" >
                </div>
                <div class="group">
					<label for="adress_ds" class="label">Prix Par hour</label>
					<input id="Name_d" type="text" name="prix" class="input" >
                </div>
                <br><br><br>
                <div class="group">
                <input type="submit" value="Ajouter" name="submit"class="button" style="color:#fff; ">
               </div>
               <div class="hr"></div>	
</form>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $target="../photo/".basename($_FILES['image']['name']);
    require '..\database\database.php';
    $image=$_FILES['image']['name'];
    $text=$_POST['adress_ds'];
    $prix=$_POST['prix'];
    session_start();
    $email=$_SESSION["EMAIL"];
    try {
        $conn = Database::connect();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE `products` SET `productDes` = '$text', `image` = '$image' , `prix`= $prix WHERE `products`.`Email` ='$email' ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if (move_uploaded_file($_FILES['image']['tmp_name'] ,$target))
        $msg="Image uploaded successfully";
        else $msg="Il y a une probleme";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      header("location:admin.php");
      
      $conn = null;
    

}
?>
