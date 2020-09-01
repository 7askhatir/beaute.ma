<header class="header">
     <?php  session_start();
     ?>
    <h1 class="logo"><a href="#"><img src="../photo/logo.png" alt=""></a></h1>
    <ul class="main-nav" id="ul">
      <li><a href="index.php">ACCUEL</a></li>
      <?php
      require '../database/database.php';
      $db=Database::connect();
      $stmt = $db->query("SELECT * FROM `categories` ORDER BY `categories`.`categoryName`");
      while ($row = $stmt->fetch()) {
      echo '<a href="etabl.php?cate='.$row['categoryId'].'">'.$row['categoryName'].'</a></li>';
      }
      $email=$_SESSION["EMAIL"];
      $sql="SELECT `exist` FROM `user` WHERE `user`.`userEmail`='$email'";
      $stmt = $db->query($sql);
      $existe='';
      while ($row = $stmt->fetch()) {
         $existe=$row['exist'];
      }
      ?>
  </ul>
  <ul class="ul-1" id="ul1">
      <li>
          <div class="input">
            <?php
             if($_SESSION['ID'] != NULL){
               if($existe !=''){
                 $link="admin.php";
               }
               else if($existe==''){
                 $link="etablessment.php";
               }
             }
                
             else $link="login.php";
             ?>
                <form action=<?php echo$link; ?>>
                  <input type="submit" value="ETABLISSMENT">
               </form>
          </div>
      </li>
      <li>
        <div>
          <?php
          if($_SESSION['ID'] != NULL){
  
            $value="Deconnecte";
            echo'<form method="POST"  >';
            echo'<input type="submit" name='.$value.' value='.$value.'>';
            echo'</form>';
          }
          else{
            $value="Connection";
            echo'<form action="login.php">
            <input type="submit" value="'.$value.'">
            </form>';
          }
          ?>
          <?php
          if($_SERVER["REQUEST_METHOD"] == "POST"){
               if(isset($_POST['Deconnecte'])){
                $_SESSION['ID']=NULL;
                header('Location: index.php');
               }
          }
          ?>
        </div>
    </li>  
  </ul>
  <button class="plus-menu" id="btn1" value="btn1" onclick="menu(this.value)" style="display: block;">
          <div >
            <svg width="2.5em" height="2.5em"  viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </div>     
      </button>
      <button class="plus-menu" id="btn2" value="btn2" onclick="menu(this.value)" style="display: none;">
        <div >
          <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
          <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
        </svg>
      </div>
      </button>

</header> 
<script src="../js/meni.js"></script>


<!-- -------------------------------------------------------- -->
