<?php
include '..\controller\eventcommentaireC.php';
$eventcommentaireC = new eventcommentaireC ();
$eventcommentaireC->supprimercommentaireevent($_GET["id_commentaire"]);
header('Location:affichercommentaire.php');
?>