<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
require('config.php');
session_start();
if (isset($_POST['nom'])){
  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($link, $nom);
  $_SESSION['nom'] = $nom;
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($link, $password);
  $query = "SELECT * FROM `utilisateurs` WHERE nom='$nom' AND password='".hash('sha256', $password)."'";

  $result = mysqli_query($link,$query); 
  var_dump($result);

  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
   
    // vérifier si l'utilisateur est un administrateur ou un utilisateur
    if ($user['type'] == 'admin') {
      header('location: Backoffice.php');      
    }else{
      header('location: compte.php');
    }
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
<form class="box" action="" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="nom" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? 
  <a href="Create.php">S'inscrire</a>
</p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>