<?php
include("includes/db.php");

$result = $conn->query("SELECT * FROM supports ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supports de cours</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Supports de cours</h1>

    <?php while($row = $result->fetch_assoc()): ?>

    <div class = "card">
        <h3><?php echo $row['titre']; ?></h3>
        <p><?php echo $row['description']; ?></p>

        <a href="uploads/cours/<?php echo $row['fichier']; ?>" download>📥 Télécharger</a>
    </div>
    
    <?php endwhile; ?>
</body>
</html>