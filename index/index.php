<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="..\style\index.css">
    <title>beuate.ma</title>
</head>
<body>

  <!-- --------------------------------------navbar----------------------------------------- -->

 <?php
 require 'navbar.php';
 ?>
    <!-- ---------------------------------end_navbar---------------------------------------- -->
 <div class="contentG">
   <br><br>
     <div class="content">
       <div class="img">       
       </div>

       <div>
        <form method="GET" action="et.php" style="max-width:900px;margin:auto">
          <h1 id="h1">Vos rendez‑vous <br> beauté en ligne</h1><br>
          <h3 id="h4">Simple - Immédiat - Gratuit</h3>
          <br><br>
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
     </div>
     <br><br>
    </div>

    <div class="espace"></div>
     <!-- -----------------------------------------------galery de votre etablessment ---------------------------------------------- -->
  <div class="etablessment" >
  <div class="text">
  <h4>Nos prestations</h4>
  <h1>Découvrez nos Professionnels</h1>
  <a class="prev" onclick="order(-1)" >&#10094;</a>
  <a class="next" onclick="order(1)" >&#10095;</a>
</div>
<div class="pic">
  <div class="piv_cont" id="a0" >
<h4>COIFFURES</h4>
<img src="../photo/beute.jpg" alt="" >
<h6>Envie de changer de tête ou simplement de rafraîchir votre coupe ? Vous avez besoin des conseils d'un expert pour sublimer votre style.</h6>
</div>
<div class="piv_cont" id="a1" >
  <h4>BARBER</h4>
  <img src="../photo/barber.jpg" alt="" >
  <h6>Vous rêvez d’une barbe bien dessinée, que l’on chouchoute votre visage et que l’on dompte votre moustache.</h6>
  </div>
  <div class="piv_cont" id="a2">
    <h4>INSTITUT DE BEAUTÉ</h4>
    <img src="../photo/inst1.jpg" alt="" >
    <h6>Vos envies de bien-être ont besoin d’être assouvies rapidement et surement.</h6>
    </div>
    <div class="piv_cont" id="a3" >
      <h4>SPA</h4>
      <img src="../photo/spa.jpg"  alt="" >
      <h6>Le spa est un bassin d'eau chaude équipé de buses de massage qui envoient de l'eau sous pression mêlée d'air. Le spa est propice à la relaxation et au bien-être</h6>
      </div>

</div>

     </div>
     <br><br>
     <div class="ccc" ><br><br><br><br><br><br><br><br><br></div>
     <!-- -----------------------------------------ajout_et----------------------- -->
     <div class="jsp">
       <div class="tt">
     <div class="h11">
       <h1>ETABLISEMENT</h1>
     </div>
     <div class="grt">
       <h3>Gratuit</h3>
       <h3>Facile</h3> 
       <h3>Rapidement</h3>
     </div>
      </div>
    </div>
     <div class="espace"></div>

 
     <!-- ------------------------------ajouter votre etablessement----------------- -->
<div class="cont2">
  <div class="ajou_e">
    <div class="img_e" style="background-image: url('../photo/salon.jpg');">
    
    </div>
    <div class="txt_e">
     <h2>Vous êtes un professionnel de la beauté ? Découvrez la prise de RDV en ligne !</h2>
     <button>Ajoutez votre établissement</button><br><br>
    </div>
  </div>
</div>
<div class="espace"></div>
<!-- -----------------------------------------ajout_et----------------------- -->
<div class="jsp">
  <div class="tt">
<div class="h11">
  <h1>RDV EN LIGNE</h1>
</div>
<div class="grt">
  <h3>Facile</h3>
  <h3>EN LIGNE</h3> 
  <h3>EXACTE</h3>
</div>
 </div>
</div>
<div class="espace"></div>


<!-- ------------------------------ajouter votre etablessement----------------- -->
<div class="cont2">
<div class="ajou_e">
<div class="img_e" style="order: 2;background-image: url('../photo/rdv.jpg');">

</div>
<div class="txt_e" style="order: 1;">
<h2>Réserver en ligne pour un RDV chez melliere - Institut de beauté !</h2>
<button>Ajoutez une RDV</button> <br><br>
</div>
</div>
</div>
<div class="espace"></div>
    <!-- ------------------------------------footer------------------------------- -->


    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">  <b>Beauté.ma</b> la plateforme de prise de rendez-vous beauté qui va changer votre façon de vous organiser. L’idée,
                   vous éviter de perdre un temps précieux en 
                  vous permettant de prendre rendez-vous dans l’un de nos établissements de beauté partenaire, en quelques clics et 24 h / 24 !</p>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Categories</h6>
              <ul class="footer-links">
                <li><a href="#">INSTITUT DE BEAUTÉ</a></li>
                <li><a href="#">COIFFEUR</a></li>
                <li><a href="#">SPA</a></li>
              </ul>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="#">ACCUEL</a></li>
                <li><a href="#">INSTITUT DE BEAUTÉ</a></li>
                <li><a href="#">COIFFEUR</a></li>
                <li><a href="#">SPA</a></li>
                <li><a href="#">ETABLISEMENT</a></li>
                <li><a href="#">MON COMPTE</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2020 Tous droits réservés par 
           <a href="#">Beauté.ma</a>.
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
  </footer>
    




    
<script src="../js/meni.js"></script>
    
</body>
</html>