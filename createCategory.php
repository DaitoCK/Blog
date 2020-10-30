<?php
session_start();
require_once('connect.php');
if(isset($_POST['categoryName'])){
    if(!empty($_POST['categoryName'])){
        $ins = $pdo->prepare('INSERT INTO categories (categoryName) VALUES (?)');
        $ins->execute();
        $message = 'Votre categorie a bien été créée';
    }else {
        $message = "Veuillez remplir tous les champs";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Blog Japan</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<style>
    .nav-item{
        padding-right: .5rem;
        padding-left: .5rem;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#">Japan</a>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a href="Acceuil.php">Acceuil</a></li>
            <li class="nav-item active"><a href="about.html">A propos</a></li>
            <li class="nav-item active"><a href="about.html">Contact</a></li>
        </ul>
    </div>
</nav>
<hr>
<div class="container">
    <section class="main-slider">
    <ul class="bxslider">
        <li>
            <div class="slider-item"><img src="https://picsum.photos/1140/500?random=1">
                <h2><a>Japan</a></h2>
            </div>
        </li>
        <li>
            <div class="slider-item"><img src="https://picsum.photos/1140/500?random=1">
                <h2><a>Japan</a></h2>
            </div>
        </li>
        <li>
            <div class="slider-item"><img src="https://picsum.photos/1140/500?random=1">
                <h2><a>Japan</a></h2>
            </div>
        </li>
    </ul>
</section>
<form action="" method="POST">
    <input type="text" name="categoryName" placeholder="Votre nouvelle catégorie ">
    <input type="submit">
    <?php if(isset($message)){echo $message;}?>
</form>
</div><!-- /.container -->
<footer class="footer">

    <div class="footer-bottom">
        <i class="fa fa-copyright"></i>Blog Japan<br>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script src="js/mooz.scripts.min.js"></script>
</body>
</html>