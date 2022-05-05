<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form class="box" action="./inscription.php" method="post">
    <h1 class="box-title">S'inscrire</h1>
  <input type="text" class="box-input" name="nom" 
  placeholder="Nom" required />
  
    <input type="text" class="box-input" name="email" 
  placeholder="Email" required />
  
    <input type="password" class="box-input" name="password" 
  placeholder="Mot de passe" required />
  
    <input type="submit" name="submit" 
  value="S'inscrire" class="box-button" />
  
    <p class="box-register">Déjà inscrit? 
  <a href="login.php">Connectez-vous ici</a></p>
</form>
</body>
</html>