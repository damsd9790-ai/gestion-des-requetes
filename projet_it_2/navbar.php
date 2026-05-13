     <?php 
     session_start(); 
     
    if(!isset($_SESSION['user'])){
        header("Location: login.php");
        exit();
    }

        ?>
<link rel="stylesheet" href="style.css">
<div class = "navbar">
    <div>

        <h3>Bienvenue <?php echo $_SESSION['nom']; ?></h3>
    </div>

    <div class = "profile">
        <img src="https://i.pravatar.cc/40" alt="">
    </div>
</div>