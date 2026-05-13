<?php
include("includes/db.php");

$id = $_GET['id'];

$conn->query("UPDATE dossiers 
SET statut='Validé' 
WHERE id='$id'");

header("Location: admin.php");
?>