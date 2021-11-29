<!DOCTYPE html>
<?php if (empty($_SESSION['data-theme'])) {
  $_SESSION['data-theme'] ='light';
}  ?>
<html lang="en" data-theme="<?=$_SESSION['data-theme']?>">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=SITE_NAME?></title>

    <!-- Bootstrap, fontawesome, CSS -->   
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- URL LINK : <?=URL?>/assets/css/style.css -->
    <link rel="stylesheet" href="/assets/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- URL LINK : <?=URL?>/assets/vendor/fontawesome/css/all.min.css -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    
</head>
<body id="body" data-theme="<?=$_SESSION['data-theme']?>" >
<header>
    <nav id="nav" data-theme="<?=$_SESSION['data-theme']?>" class="navbar navbar-expand-lg navbar-light transition">

      <div class="container-fluid">

        <a class="navbar-brand mb-0 h1" id="color" data-theme="<?=$_SESSION['data-theme']?>">Timber</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link" id="color" data-theme="<?=$_SESSION['data-theme']?>" aria-current="page" href="index">Home</a>      
              </li>
              <?php if (isset($_SESSION['username'])): ?>
                  <li class="nav-item">
                      <a class="nav-link" id="color" data-theme="<?=$_SESSION['data-theme']?>"  href="/message" >Messages</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="color" data-theme="<?=$_SESSION['data-theme']?>" href="/profile" >My profile: <?=$_SESSION['username']?></a>                      
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="color" data-theme="<?=$_SESSION['data-theme']?>" href="/logout">Logout</a>
                  </li>
              <?php else: ?>
                  <li class="nav-item">
                      <a class="nav-link" id="color" data-theme="<?=$_SESSION['data-theme']?>" href="/registration">Registration</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="color" data-theme="<?=$_SESSION['data-theme']?>" href="/login">Login</a>
                  </li>
              <?php endif ?>
          </ul>
          <form class="d-flex">
            <p class="mycolor"  style="margin-right: 10px; margin-bottom: 0;">Dark Theme :  </p>
</header>