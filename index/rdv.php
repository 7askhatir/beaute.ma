<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="..\style\index.css">
    <link rel="stylesheet" href="..\style\rdv.css">
    <title>RDV</title>
</head>
<body>
<?php
     require 'navbar.php';
    $db=Database::connect();
    if(isset($_GET['Id'])){
        $id=$_GET['Id'];
        $sql="SELECT * FROM `products` WHERE `products`.`productId` =$id";
        $stmt = $db->query($sql);
       
    }     
     ?><br><br>

  <div class="et" style="max-width:1100px;margin:auto">
    <div class="txt_rd">
        <div class="txt">
     <?php
     $cc='';
          while ($row = $stmt->fetch()) {
            $email2=$row['Email'];
            $prix=$row['prix'];
              echo('<h1>'.$row['productName'].'</h1>

              <h3><i class="fa fa-map-marker" aria-hidden="true"></i>'.$row['productAdress'].'</i></h3>
          </div>
          <div class="btn_rd">
              <button style="background-color:black ; border: none;"class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Prendre RDV</button>
              
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" >
              <div class="modal-content" style="padding: 2em;">
          <h1>Prendre RDV</h1>
          <div class="d" style="color:black; display: flex; flex-wrap:wrap;">
          <h3>Nom d\'établissment : </h3>
          <h3>'.$row['productName'].'</h3>
          </div>
          <div class="d" style="color:black; display: flex; flex-wrap:wrap;">
          <h3>Prix : </h3>
          <h3>'.$prix.'</h3></div>
          
          <form method="POST"  style="color:black;">
            <label for="birthday">Date de réservation:</label>
            <input type="date" id="birthday" name="date">
            <label for="cars">hour de reservation:</label>
          
          <select name="hour" id="cars">
            <option value="9-11">9h-11h</option>
            <option value="11-13">11h-13h</option>
            <option value="15-17">15h-17h</option>
            <option value="17-19">17h-19h</option>
            <option value="19-21">19h-21h</option>
   
          </select>
            <input type="submit" name="btn">
          
          </form>
     
              </div>
            </div>
          </div>
          
          
          </div>
          </div>
              <div class="img" style="background-image: url(../photo/'.$row['image'].');background-repeat: no-repeat; background-size:cover;">
              </div>
              <h2>Réserver en ligne pour un RDV chez '.$row['productName'].' à '.$row['productVille'].'</h2>
              <h5>Gratuitement - Paiement sur place - Confirmation immédiate</h5><br><br><br><br>
              <h3>PRIX PAR HOUR : '.$row['prix'].'DH</h3> <br><br><br><br>
              <div class="desc" >
               <h4 style="text-align:center;">'.$row['productDes'].'</h4><br><br><br>
               <div  style="display:flex; flex-wrap:wrap;">
               <h1 style="text-align:center;margin:auto;">Contactes :</h1><br>
               <div class="ccc" style="display:flex; flex-wrap:wrap;"><i class="fa fa-phone" style="font-size:36px"></i><h4 style="margin:auto 20px;">+212'.$row['productTELE'].'</h4></div><br>
               <div class="ccc" style="display:flex; flex-wrap:wrap;"><i class="fa fa-envelope" style="font-size:36px"></i><h4 style="margin:auto 20px;">'.$email2.'</h4></div>
               </div>
               <br><br><br><br>');
        }  

     ?>
     <?php
    
           
    
     if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(isset($_POST['btn'])){
       if($_SESSION['ID']==NULL){
       echo "<script>alert(\"cette rdv n'est pas reserver connecté votre compte svp <br> Merci \")</script>";
       echo('<div class="alert alert-dangers " role="alert"  class="fixed-top" class="fixed-bottom" style="position:relative; bottom:1260px;">
       cette rdv n\'est pas reserver connecté votre compte svp 
      </div>');
     }
     else if($_SESSION['ID']!=NULL){
       $email1=$_SESSION['EMAIL'];
       $hour=$_POST['hour'];
       $date=$_POST['date'];
       while ($row = $stmt->fetch()) {
        $email2=$row['Email'];
        $prix=$row['prix'];
       }
       try {
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "INSERT INTO `reservation` (`Id_res`, `Email_client`, `Email_etabl`, `date`, `hour`, `Prix_toutal`) VALUES (NULL,?,?,?,?,?)";
         $stmt= $db->prepare($sql);
         $stmt->execute([$email1, $email2,$date,$hour,$prix]);
         echo('<div class="alert alert-success " role="alert"  class="fixed-top" class="fixed-bottom" style="position:relative; bottom:1260px;">
        vous avez reserver le '.$date.' à'.$hour.' merci 
       </div>');
       } catch(PDOException $e) {
         echo $sql . "<br>" . $e->getMessage();
       }
     

     }
   
      }
    }
  
     ?>
    
     
 </div>
 </div>

 <?php
     require 'footer.php';
     ?>
</body>
</html>