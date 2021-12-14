<?php
include 'D:\differant appli\htdocs\lasttest\lasttest\Front\controller\eventC.php';
$eventC=new eventC();
$eventC->supprimerevent($_GET["id_event"]);
header('Location:afficherevent.php');
?>