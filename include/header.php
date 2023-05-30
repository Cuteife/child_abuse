<?php
include("./helpers/auth.php");
?>
<nav class="navbar navbar-expand-lg p-3 mb-2 bg-dark navbar-dark  fs-6 spacing-me-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./images/logo5.png" alt="Logo" width="30" height="40" class="d-inline-block align-text-top"> Child Abuse Reporting System
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav justify-content-end collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <?php
        if (isset($_SESSION["login_id"])) {
        ?>
        <li class="nav-item">
            <a class="nav-link" href="#about">ABOUT</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./dashboard.php">REPORT ABUSE</a>
          </li>
        
        <?php
        } else {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
        <?php
        }
        ?>


      </ul>
    </div>
  </div>
</nav>