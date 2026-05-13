<?php

$conn = new mysqli("localhost", "root", "", "gestion_requetes");

if ($conn->connect_error) {
    die("Erreur connexion");
}

?>