<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

if(!isset($_SESSION['role'])){
    die("Accès refusé");
}

include("includes/db.php");

$sql = "SELECT dossiers.*, users.nom 
        FROM dossiers
        JOIN users ON dossiers.user_id = users.id
        ORDER BY date_creation DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<?php include("includes/sidebar.php"); ?>

<div class="main">

<?php include("includes/navbar.php"); ?>

<div class="table-container">

<h2>Tous les dossiers</h2>

<table>

<tr>
    <th>Utilisateur</th>
    <th>Titre</th>
    <th>Statut</th>
    <th>Actions</th>
    <th>Fichiers</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>

<tr>

<td><?php echo $row['nom']; ?></td>

<td><?php echo $row['titre']; ?></td>

<td><?php echo $row['statut']; ?></td>

<td>

<a href="valider.php?id=<?php echo $row['id']; ?>">
✅ Valider
</a>

|

<a href="rejeter.php?id=<?php echo $row['id']; ?>">
❌ Rejeter
</a>

</td>

</tr>

<?php endwhile; ?>

<td>

<a href="uploads/<?php echo $row['fichier']; ?>" download>
📥 Télécharger
</a>

</td>
</table>

</div>

</div>
</div>

</body>
</html>