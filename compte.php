<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=git , initial-scale=1.0">
    <link rel="stylesheet" href="css/compte.css">
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/spartwell" rel="stylesheet">

    <title>Mathhieu Gras</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
</head>
<body>



<?php 
    //vérifier qu'une session existe bien et renvoyer au formulaire de connexion dans le cas contraire
    session_start();
    require_once('config.php');
    if(!isset($_SESSION["nom"])){
    header("Location: login.php");
    exit(); 
  } 
echo($_SESSION["nom"])
  ?>



    <header>
        <ul class="navbar">
            <li><a href="https://matthieugras.com/" target="_blank" rel="nofollow"><img id="logo" src="images/logo.png" alt="logo Matthieu Gras"></a></li>
            <li><a class="active" href="site.html">Accueil</a></li>
            <li><a href="slideshow.html">Portfolio</a></li>
            <li><a href="prestation.html">Prestation</a></li>
            <li><a href="boutique.html">Boutique</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="#panier"><img id="Panier" src="images/shopping-bag.png" alt="Panier de shopping"></a></li>
            <li><a href="compte.html"><img id="login" src="images/compte.png" alt="Compte"></a></li>
        </ul>
    </header>
    
<div class="voila">
    <div class="section">
        <ul class="titre">
            <li><a class="titre" href="">Mon compte</a></li>
        </ul>
        <ul class="info">
            <li><a class="mots" href="">Informtation personnelles</a> </li>
            <li><a class="mots" href="">Galeries</a></li>
            <li><a class="mots" href="">Favoris</a></li>
            <li><a class="mots" href="">Mes achats</a></li>
            <li><a class="mots" href="">Suivi de commande</a></li>
            <li><a class="mots" href="">Deconnexion</a></li>
        </ul>
    </div>
    <span class="vertical"></span>
    
    <div>
        <ul class="image">
            <li> <a class="photo1"> <img src="images/phototest.png" alt=""></a> </li>
            <li> <a class="photo2"> <img src="images/photo2.png" alt=""></a></li>
            <li> <a class="photo3"> <img src="images/photo3.png" alt=""></a></li>
            <li> <a class="photo4"> <img src="images/photo4.png" alt=""></a></li>
            <li> <a class="photo5"> <img src="images/photo5.png" alt=""></a></li>
            <li> <a class="photo6"> <img src="images/photo6.png" alt=""></a></li>
        </ul>
    </div>
</div>


    </body>
    </html>
  