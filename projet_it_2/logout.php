<?php
session_start();

/*supprimer toutes les sessions */
session_unset();
/* detruire la session */

/* empêcher le retour en errière navigateur */
header("cache-control: no-cache, no-store, must-revalidate");
header("pragma: no-cache");
header("Expires: 0");

/* redirection */
header("Location: login.php");
exit();

?>