<?php
include("includes/db.php");

$result = $conn->query("SELECT * FROM actualites ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités du campus</title>
</head>
<body>
    <h1>Actualités du campus</h1>

    <?php while($row = $result->fetch_assoc()): ?>
        <div class = "news">
            <img src="uploads/actus/<?php echo $row['image']; ?> " width="300">
            <h2><?php echo $row['titre']; ?></h2>
            <p><?php echo $row['contenu']; ?></p>
        </div>

        <?php endwhile; ?>
</body>
</html>