<?php
session_start();

include("includes/db.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $user_id = $_SESSION['user'];

    /* FICHIER */

    $fichier = $_FILES['fichier']['name'];
    $tmp = $_FILES['fichier']['tmp_name'];

    /* NOM UNIQUE */

    $nouveau_nom = time() . "_" . $fichier;

    move_uploaded_file($tmp, "uploads/" . $nouveau_nom);

    /* INSERTION */

    $sql = "INSERT INTO dossiers
    (user_id, titre, description, fichier)
    VALUES
    ('$user_id', '$titre', '$description', '$nouveau_nom')";

    if($conn->query($sql)){
        header("Location: requetes.php");
    }else{
        echo "Erreur";
    }
}
?>