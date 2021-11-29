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
</header>