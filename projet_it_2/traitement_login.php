<?php
session_start();

$conn = new mysqli("localhost", "root", "", "gestion_requetes");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        // Vérification mot de passe
        if (password_verify($password, $user['password'])) {

            // Sessions
            $_SESSION['user'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['role'] = $user['role'];

            // Redirection
            if ($user['role'] == 'admin') {

                header("Location: admin.php");

            } else {

                header("Location: dashboard.php");

            }

            exit();

        } else {

            echo "Mot de passe incorrect";

        }

    } else {

        echo "Utilisateur introuvable";

    }

}
?>