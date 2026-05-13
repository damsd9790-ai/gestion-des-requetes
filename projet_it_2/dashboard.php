<?php


if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

include("includes/db.php");

$user = $_SESSION['user'];

/* TOTAL DOSSIERS */
$total = $conn->query("SELECT COUNT(*) as total FROM dossiers WHERE user_id='$user'");
$total = $total->fetch_assoc()['total'];

/* EN ATTENTE */
$attente = $conn->query("SELECT COUNT(*) as total FROM dossiers 
WHERE statut='En attente' AND user_id='$user'");
$attente = $attente->fetch_assoc()['total'];

/* VALIDÉS */
$valide = $conn->query("SELECT COUNT(*) as total FROM dossiers 
WHERE statut='Validé' AND user_id='$user'");
$valide = $valide->fetch_assoc()['total'];

/* REJETÉS */
$rejete = $conn->query("SELECT COUNT(*) as total FROM dossiers 
WHERE statut='Rejeté' AND user_id='$user'");
$rejete = $rejete->fetch_assoc()['total'];

/* REQUÊTES */
$req = $conn->query("SELECT * FROM dossiers 
WHERE user_id='$user' 
ORDER BY date_creation DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<?php include("includes/sidebar.php"); ?>

<div class="main">

<?php include("includes/navbar.php"); ?>

<div class="cards">

    <div class="card">
        <p>Dossiers</p>
        <h2><?php echo $total; ?></h2>
    </div>

    <div class="card">
        <p>En attente</p>
        <h2><?php echo $attente; ?></h2>
    </div>

    <div class="card">
        <p>Validés</p>
        <h2><?php echo $valide; ?></h2>
    </div>

    <div class="card">
        <p>Rejetés</p>
        <h2><?php echo $rejete; ?></h2>
    </div>

</div>

<div class="table-container">

<table>

<tr>
    <th>Titre</th>
    <th>Statut</th>
    <th>Date</th>
</tr>

<?php while($row = $req->fetch_assoc()): ?>

<tr>
    <td><?php echo $row['titre']; ?></td>
    <td class="
<?php
if($row['statut']=="En attente") echo 'attente';
elseif($row['statut']=="Validé") echo 'valide';
else echo 'rejete';
?>
">
<?php echo $row['statut']; ?>
</td>
    <td><?php echo $row['date_creation']; ?></td>
</tr>

<?php endwhile; ?>

</table>

</div>

</div>
</div>

</body>
</html>