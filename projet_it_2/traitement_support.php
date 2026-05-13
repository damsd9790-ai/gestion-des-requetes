<?php
include("includes/db.php");

$titre = $_POST['titre'];
$description = $_POST['description'];

$fichier = $_FILES['fichier']['name'];
$tmp = $_FILES['fichier']['tmp_name'];

move_uploaded_file($tmp, "uploads/cours/" . $fichier);

$sql = "INSERT INTO supports (titre, description, fichier)
VALUES ('$titre', $description', '$fichier')";

$conn->query($sql);

header("Location: supports.php");
?>