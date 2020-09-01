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
    if(isset($_SESSION['EMAIL'])){
        $Email=$_SESSION['EMAIL'];
        $sql="SELECT * FROM `products` WHERE `products`.`Email` ='$Email'";
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
              echo('<h2>Partie admin de '.$row['productName'].' </h2>
              <h5>Modifier - Supprimer - Reagarder les reservation des clients</h5>
          </div> 
          <div class="btn_rd">
          <form method="POST" action="updet.php">
              <button style="background-color:black ; border: none;" name="md">modifier</button>
          </form>
          </div>
          
          <div class="btn_rd">
          <form method="GET">
          <button style="background-color:black ; border: none;" name="sp">Supprimer</button>
          </form>
      </div>
          </div>
              <div class="img" style="background-image: url(../photo/'.$row['image'].');background-repeat: no-repeat; background-size:cover;">
              </div>
<br><br><br>');
        }  
        $sql2="SELECT * FROM `reservation` WHERE `reservation`.`Email_etabl` ='$Email'";
        $stmt2 = $db->query($sql2);
        echo'
        <table class="table">
        <thead>
          <tr>
            <th scope="col">ID Reservation</th>
            <th scope="col">Email client</th>
            <th scope="col">Date de reservation</th>
            <th scope="col">Hour de reservation</th>
          </tr>
        </thead>
        <tbody>
          ';
          while ($row2 = $stmt2->fetch()){
              echo('<tr>
                   <th scope="row">'.$row2['Id_res'].'</th>
                   <td>'.$row2['Email_client'].'</td>
                   <td>'.$row2['date'].'</td>
                   <td>'.$row2['hour'].'</td>
                   </tr>
              ');
                   
          }
            
          
          echo'
          
        </tbody>
      </table>';
    
        if(isset($_GET['sp'])){
            $sql="DELETE FROM `products` WHERE `products`.`Email` = '$Email'";
            $sql2="UPDATE `user` SET `exist` = '' WHERE  `user`.`userEmail` ='$Email' ";
            $req = $db->exec($sql);
            $req2 = $db->exec($sql2);
            header("Location: index.php",TRUE,307);
            }

     ?>
  
 </div>
 </div>

 <?php
     require 'footer.php';
     ?>
</body>
</html>