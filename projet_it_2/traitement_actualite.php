<?php

include("includes/db.php");
$titre = $_POST['titre'];
$contenu = $_POST['contenu'];

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp, "upmoads/actus/" . $image);

$sql = "INSERT INTO actualites (titre, contenu, image)
VALUES ('$titre', '$contenu', '$image')";

$conn->query($sql);

header("Location: actualites.php");
?>