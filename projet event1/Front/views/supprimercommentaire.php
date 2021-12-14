<?php
include 'D:\differant appli\htdocs\lasttest\lasttest\Front\controller\eventcommentaireC.php';
$eventcommentaireC = new eventcommentaireC ();
$eventcommentaireC->supprimercommentaireevent($_GET["id_commentaire"]);
header('Location:affichercommentaire.php');
?>