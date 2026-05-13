<?php
$conn = new mysqli("localhost", "root","", "gestion_requetes");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // verification de l'existance de l'email entrée
    $check = $conn->query("SELECT * FROM users WHERE email= '$email'");

    if ($check->num_rows > 0) {
        echo "Email déjà utilisée";
        exit();
    }

    // insertion des utilisateurs
    $sql = "INSERT INTO users (nom, email, password)
    VALUES ('$nom', '$email', '$password')";

    if ($conn->query($sql)) {
        echo "compte créé avec succès";
        header("Location:login.php");
    }else{
        echo"Erreur";
    }
}
?>