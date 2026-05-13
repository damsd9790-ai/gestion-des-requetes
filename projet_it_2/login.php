<!DOCTYPE html>
<html>
<head>
  <title>Connexion</title>
</head>
<body>

<h2>Connexion</h2>

<?php
if (isset($_GET['success'])) {
  echo "✅ Compte créé avec succès<br><br>";
}
?>

<form action="traitement_login.php" method="POST">
  <input type="email" name="email" placeholder="Email" required><br><br>
  <input type="password" name="password" placeholder="Mot de passe" required><br><br>
  <button type="submit">Se connecter</button>

</form>

</body>
</html>