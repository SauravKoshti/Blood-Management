<!DOCTYPE html>
<html lang="en">
<?php
  include 'head.php';
?>
<body>
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul> --><div class="col-sm-6">
            <h4 class="m-0 text-dark">BloodBank & Donor Management System</h4>
          </div>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user" style='font-size:24px'></i>
         </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <!-- <a href="#" class="dropdown-item">
      Profile
             <i class="fas fa-envelope mr-2"></i>
            </a> -->
           <a href="logout.php" class="dropdown-item">
        Logout<i class="fas fa-envelope mr-2"></i>
        <span class="dn dib-xl v-mid mr1"></span>
        <ion-icon name="log-out-outline"></ion-icon>
          <i class="fa fa-sign-out" style="font-size:24px"></i>
         </a>
         </div>
      </li>
      
    </ul>
  </nav>
</body>
</html>
