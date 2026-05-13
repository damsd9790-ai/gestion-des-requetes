<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Créer un compte</h2>
    <form action="traitement_register.php" method="POST">
        <label for="nom">Nom</label>
        <input type="text" name="nom" placeolder="votre nom" required> <br> <br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="exemple@email.com" required> <br> <br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" placeholder="votre mot de passe"> <br> <br>
        <button type="submit">S'inscrire</button>
    </form>
    
</body>
</html>