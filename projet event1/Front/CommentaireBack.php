<?php
  session_start();
  date_default_timezone_set('CET');
  $mysqli = new mysqli("localhost", "root", "", "event") or die(mysqli_error($mysqli));

  //$id_commentaire=0;
  $nom_event =0;
  $contenu = '';
  $date_commentaire = '';
  //$update=false;
  
  //ADD RECORD
  if(isset($_POST['save'])){
    //$id_commentaire = $_POST['id_commentaire'];
    $nom_event = $_POST['nom_event'];
    $contenu= $_POST['contenu'];
    $date_commentaire =date('y-m-d');
    
    $_SESSION['message'] = "////////Record has been added!";
    $_SESSION['msg_type'] = "success";

    $mysqli->query("INSERT INTO commentaire_event (nom_event, contenu, date_commentaire) VALUES('$nom_event','$contenu','$date_commentaire')") or die($mysqli->error);
  
    header("location: index.php");
  }



     
        ?>