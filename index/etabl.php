<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="..\style\index.css">
    <link rel="stylesheet" href="..\style\etabl.css">
</head>
<body>
<?php
     require 'navbar.php';
     if(isset($_GET['cate'])){
         $id_cate=$_GET['cate'];
         $q="SELECT * FROM `categories` WHERE `categoryId` =$id_cate";
         $user = $db->query($q)->fetch(PDO::FETCH_ASSOC);   
         if (in_array($id_cate, $user)) {
            
        }
        else{
            header('Location: index.php');
        }
    
     }
   
     ?>
     <br><br><br>
    <div class="et" style="max-width:1100px;margin:auto">
        <div >
            <h1 style="color: black;">Réserver en ligne un RDV avec un <?php echo $user['categoryName'];?></h1><br><br>
            <form method="GET" action="et.php" style="max-width:900px;margin:auto">
          <div class="form" >
          <div class="input-container" >
              <select name="cate"  class="input-field" id="cont1" type="text" placeholder="Nom du salon, prestations (coupe...)" name="salon">
                  <option value="">CATEGORIES D'ETABLISEMENT</option>
                  <option value="1">COIFFEUR</option>
                  <option value="2"> INSTITUT DE BEAUTÉ</option>
                  <option value="3"> BARBER</option>
                  <option value="4">SPA</option>
               </select>

          </div>
          <div class="input-container" >
            <select class="input-field" id="cont2" type="text" name="ville">
                       <option value="Casablanca">LIEU D'ETABLISEMENT	</option>
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
          <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
         </button>
        </div>
        </form>
        </div>
        <div class="ville">
            
             <div class="ville_1" style="background-image: url(../photo/rabat.jpg);">
                <a href=<?php echo'"et.php?cate='.$id_cate.'&ville=rabat"' ?>> <div id="txt">          
                     <p>Découvrez nos</p>
                     <h4> <b> <?php echo $user['categoryName'];?> a Rabat</b></h4>
                     <br>
                 </div></a>   
             </div> 
            <div class="ville_1" style="background-image: url(../photo/fes.jpg);">
                <a href=<?php echo'"et.php?cate='.$id_cate.'&ville=fes"' ?>><div id="txt">                
                    <p>Découvrez nos</p>
                    <h4> <b><?php echo $user['categoryName'];?> a Fes</b></h4>
                </div></a>   
            </div> <div class="ville_1" style="background-image: url(../photo/casa.jpg);">
            <a href=<?php echo'"et.php?cate='.$id_cate.'&ville=Casablanca"' ?>><div id="txt">                
                <p>Découvrez nos</p>
                <h4> <b><?php echo $user['categoryName'];?> a Casablanca</b></h4>
            </div></a>   
            </div> <div class="ville_1" style="background-image: url(../photo/agadir.jpg);">
            <a href=<?php echo'"et.php?cate='.$id_cate.'&ville=Agadir"' ?>><div id="txt">                
            <p>Découvrez nos</p>
            <h4> <b><?php echo $user['categoryName'];?> a Agadir</b></h4>
            </div></a>   
            </div> <div class="ville_1" style="background-image: url(../photo/kech.jpg);">
             <a href=<?php echo'"et.php?cate='.$id_cate.'&ville=Marrakech"' ?>><div id="txt">             
             <p>Découvrez nos</p>
              <h4> <b><?php echo $user['categoryName'];?> a Marrakech</b></h4>
              </div></a>   
             </div> <div class="ville_1" style="background-image: url(../photo/tanger.jpg);">
              <a href=<?php echo'"et.php?cate='.$id_cate.'&ville=Tanger"' ?>><div id="txt">              
        <p>Découvrez nos</p>
        <h4> <b><?php echo $user['categoryName'];?> a Tanger</b></h4>
    </div></a>   
           </div>

       </div>
 <div class="espace"></div>
 <p style="text-align: center;"><a href="#" >Voir plus de villes</a></p>
 <p class="p_et"><?php echo $user['categoryDesc'];?></p>
    </div>
    <?php
    require 'footer.php';
    ?>
</body>
</html>
<head>
<title><?php echo $user['categoryName'];?></title>
</head>