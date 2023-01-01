<?php
include "session.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Inventory | Profile</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/869/869027.png" type="image/x-icon">
    
    <link rel="stylesheet" href="css/styles/style.css">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
  <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color: #1A1A40;">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="css/img/logo.png" style="height: 30px; width: 30px;"> Inventory</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column mt-2">
        <li class="nav-item">
            <a class="nav-link" href="admin/profile.php" >
              <h5><i class="bi bi-person-circle"></i> <?php echo $rowSession['nama_admin'] ?></h5>
            </a>
          </li>
        </ul>
        <hr>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">
              <i class="bi bi-grid-1x2"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/index.php">
              <i class="bi bi-person-lines-fill"></i> Admin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="barang/index.php">
            <i class="bi bi-box2-fill"></i> Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="barang_masuk/index.php">
            <i class="bi bi-box-arrow-in-down"></i> Barang Masuk
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="barang_keluar/index.php">  
            <i class="bi bi-box-arrow-up"></i> Barang Keluar
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">       
            <i class="bi bi-box-arrow-left"></i> Logout
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="profile.php">       
              <i class="bi bi-person-workspace"></i> Our Profile
              </a>
            </li>
        </ul>
      </div>
    </nav>
  </div>
  </div>
</div>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <h1 style="margin-top: 28px;">Our Profile</h1>
      <hr style="color: black;">
      <div class="card mb-3" style="max-width: 400px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="img/PicsArt_02-23-01.06.01.jpg" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Alvi Yuniar</h5>
                <p class="card-text">2010631170050</p>
                <p class="card-text"><i class="bi bi-github"></i><a href="https://github.com/alvyynr" style="Text-decoration: none; color:black;"> alvyynr</a></p>
            </div>
            </div>
        </div>
      </div>
        <br>
        <div class="card mb-3" style="max-width: 400px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="img/WhatsApp Image 2022-05-08 at 9.27.13 PM.jpeg" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Andriani Nurian</h5>
                <p class="card-text">201063117002</p>
                <p class="card-text"><i class="bi bi-github"></i><a href="https://github.com/andrianinur" style="Text-decoration: none; color:black;"> andrianinur</a></p>
            </div>
            </div>
        </div>
        </div>
        <br>
        <div class="card mb-3" style="max-width: 400px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="img/WhatsApp Image 2022-05-08 at 9.30.57 PM.jpeg" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Anisah</h5>
                <p class="card-text">2010631170053</p>
                <p class="card-text"><i class="bi bi-github"></i><a href="https://github.com/anisahanisah" style="Text-decoration: none; color:black;"> anisahanisah</a></p>
            </div>
            </div>
        </div>
        </div>
        <br>
    </main>

    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>