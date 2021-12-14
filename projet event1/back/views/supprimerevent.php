<?php
include '../controller/eventC.php';
$eventC=new eventC();
$eventC->supprimerevent($_GET["id_event"]);
header('Location:index.php');
?>