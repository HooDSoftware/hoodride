<?php
//require 'config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HooDShare</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
   <link rel="stylesheet" href="https://github.com/atisawd/boxicons/blob/master/css/boxicons.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">
 
 


 
  <style>
    div#carousel { 
    perspective: 1200px; 
    background: #100000; 
    padding-top: 10%; 
    font-size:0; 
    margin-bottom: 3rem; 
    overflow: hidden; 
  }
  figure#spinner { 
    transform-style: preserve-3d; 
    height: 300px; 
    transform-origin: 50% 50% -500px; 
    transition: 1s; 
  } 
  figure#spinner img { 
    width: 40%; max-width: 425px; 
    position: absolute; left: 30%;
    transform-origin: 50% 50% -500px;
    outline:1px solid transparent; 
  }
  figure#spinner img:nth-child(1) { transform:rotateY(0deg); 
  }
  figure#spinner img:nth-child(2) { transform: rotateY(-45deg); }
  figure#spinner img:nth-child(3) { transform: rotateY(-90deg); }
  figure#spinner img:nth-child(4) { transform: rotateY(-135deg); }
  figure#spinner img:nth-child(5){ transform: rotateY(-180deg); }
  figure#spinner img:nth-child(6){ transform: rotateY(-225deg); }
  figure#spinner img:nth-child(7){ transform: rotateY(-270deg); }
  figure#spinner img:nth-child(8){ transform: rotateY(-315deg); }
  div#carousel ~ span { 
    color: #fff; 
    margin: 5%; 
    display: inline-block; 
    text-decoration: none; 
    font-size: 2rem; 
    transition: 0.6s color; 
    position: relative; 
    margin-top: -6rem; 
    border-bottom: none; 
    line-height: 0; }
  div#carousel ~ span:hover { color: #888; cursor: pointer; }
    </style>
</head>




<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">HooD<span>Share.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

     
      <a href="log.php" class="get-started-btn scrollto">GET STARTED</a>

    </div>
  </header><!-- End Header -->
