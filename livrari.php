<!DOCTYPE html>
<?php
    $db = mysqli_connect('localhost', 'root', '', 'roxy-pub-db');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Livrari cherestea - Chitila</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>



    <!-- Latest compiled JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <script src="main-js.js"></script>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <img src="http://www.roxy-pub.ro/css/front/header.png" href="#Home" class="navbar-brand">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_content" aria-controls="navbar_content" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-fluid collapse navbar-collapse" id="navbar_content">
        <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item">
                <a class="nav-link" href="index.php" onclick="">Despre noi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="produse.php">Produse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="livrari.php">Livrari</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Bun venit! -->
<div class="jumbotron jumbotron-fluid" id="welcome_jumbo">
    <div class="container" id="welcome_message">
        <h1 class="display-4" style="font-weight: bold; margin-top: 50px;">Pagina de livrare</h1>
    </div>
</div>

</body>
</html>