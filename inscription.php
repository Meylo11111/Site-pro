<?php 
    require_once('config.php');
    
    $nom = stripslashes($_REQUEST['nom']);
    $nom = mysqli_real_escape_string($link, $nom); 
    // récupérer l'email 
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($link, $email);
    // récupérer le mot de passe 
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($link, $password);

    $query = "INSERT into `Utilisateurs` (nom, email, type, password)
        VALUES ('$nom', '$email', 'user', '".hash('sha256', $password)."')";
    $res = mysqli_query($link, $query);

    if($res){
        echo "<div class='sucess'>
                <h3>Vous êtes inscrit avec succès.</h3>
                <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
        </div>";
    }