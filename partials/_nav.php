
<?php 
  $loggedin = false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin = true;}
 ?>
<nav class="navbar navbar-expand-lg" style="
/* background: linear-gradient(154deg, #000000 ,#0081b3,#000000,#0099c5,#000000,#00a4f3,#101010); */
background: #282828;
">
  <div class="container-fluid">
    <a class="navbar-brand text-secondary" href="home.php" style="margin-left: 70px;"><img src="Pictures/classmate_logo-removebg-preview.png" alt=""   style="height: 29px; width: 134px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item ">
      <a class="nav-link text-white" href="specification.php" style="border: 2px solid;font-size: 14px; padding: 7px 21px 7px 21px;letter-spacing: 2px;font-weight: bold;">Design Your Notebook</a>
      </li>
      <li class="nav-item" >
      <a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">
        <img src="Pictures/cart.png" alt="" srcset="" style="height: 24px;margin: 0px 18px 0 18px;">
      </a>
      </li>
      <a href="welcome.php">
      <img class="d-inline " src="Pictures/accounthere.png" alt="" srcset="" style="height: 28px; margin: 7px;">
    </a>
 
    <?php
         if(!$loggedin){
          echo'
          <li class="nav-item">
              <a class="nav-link text-white" href="login.php"  style="letter-spacing: 2px;font-weight: bold;">Login/Signup</a>
           </li>';
         }

        if($loggedin){
          echo '
          <li class="nav-item" style="margin: 8px 116px 0px 8px;font-size: 18px;cursor: pointer;">
          <div class="dropdown">
          <a herf="#"class="text-white dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;letter-spacing: 1px;font-family: cursive;">';
         echo  $_SESSION['username'];
         echo'
          </a>
          <ul class="dropdown-menu">
           <li><a class="dropdown-item mb-2 mt-2" href="welcome.php"><img src="Pictures/accountlogo.png" alt="" srcset="" style="margin-right:9px;height: 26px;"> My Profile</a></li>
            <li><a class="dropdown-item mb-2" href="myOrder.php"><img src="Pictures/myOrderlogo.png" alt="" srcset="" style="margin-right:13px;height: 26px;">My Orders</a></li>
            <li><a class="dropdown-item mb-2" href="logout.php"><img src="Pictures/logouthere.png" alt="" srcset="" style="margin-right:13px;height: 26px;">Sign Out</a></li>
          </ul>
        </div>
          </li>';}  
          echo '
          </ul>
          </div>
          </div>
          </nav>'; 
       
          include 'partials/_cartModal.php';  
          ?>