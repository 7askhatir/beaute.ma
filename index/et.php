<!--  -->
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
    <link rel="stylesheet" href="..\style\et.css">

    <title>doc-city</title>
</head>
<body>
     <?php
     require 'navbar.php';
     ?>
     <?php
         if(isset($_GET['cate']) && $_GET['ville'] ){
           $cate=$_GET['cate'];
           $ville=$_GET['ville'];
           

           }
           else{
           echo'erreur';
           }
     ?>
     <br><br>
    <div class="et" style="max-width:1100px;margin:auto">
         <?php
         
         $sql="SELECT `categories`.`categoryName` FROM `categories` WHERE `categories`.`categoryId` =$cate";
         $stmt = $db->query($sql);
         while ($row = $stmt->fetch()) {
            $rowCate=$row['categoryName'];
         }
         
         ?>
   <?php
        echo('<h1 style="color: black;">Les meilleurs '.$rowCate.'   à '.$ville.'   : réservation en ligne</h1>')
   ?>
    
    <div class="espace"></div>
    <br><br>
    <?php
         
         $sql="SELECT * FROM `products` WHERE `products`.`categoryId` =$cate AND `products`.`productVille`='$ville' " ;
         $stmt2 = $db->query($sql);
         while ($row = $stmt2->fetch()) {
            echo('
            <div class="les">
        <div class="les_1">
            <div class="les_11">
            <div class="les_img" style="background-image: url(../photo/'.$row['image'].');">
             
            </div>
            <div class="les_txt">
                <div class="les_t">
             <h4><b>'.$row['productName'].'</b></h4>
             <h5><i class="fa fa-map-marker" aria-hidden="true"></i>
              '.$row['productAdress'].'
             <br>
               </div>
               <form method="post" action="rdv.php?Id='.$row['productId'].'">
             <button>Prendre RDV</button>
               </form>
            </div>
          </div>
          <a href="rdv.php?Id='.$row['productId'].'"><div class="les_plus">
           <h5><b> Plus d\'information</b></h5>
              <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path  fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
              </svg>
          </div></a> </div></div><br><br>
            ');
         }
         
         ?>
         
<!-- ___________________________________ -->

    
        
    <!-- ;;;;;;;;;;;;;;;;;;;;;;;;;;;;; -->
        
    
    </div>
    <?php
    require 'footer.php';
    ?>
</body>
<script>
</script>
</html>