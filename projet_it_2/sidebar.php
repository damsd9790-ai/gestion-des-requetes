<link rel="stylesheet" href="style.css">
<div class= "sidebar">
    <h2 class = "logo">E-service</h2>

    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="depot.php">Dépôt de dossiers</a></li>
        <li><a href="requetes.php">Mes requêtes</a></li>
        <li><a href="suivi.php">Suivi</a></li>
        <li><a href="logout.php">Déconnexion</a></li>
        <li><a href="cours/supports.php">🧾 supports de cours</a></li>
        <li><a href="actualites.php">Actualités</a></li>
    </ul>
</div>

<?php if($_SESSION['role'] == 'admin'): ?>

<li>
    <a href="admin.php">Administration</a>
</li>

<?php endif; ?>