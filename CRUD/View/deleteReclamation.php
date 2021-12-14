<?php
    require '../Controller/reclamationC.php';
    $reclamationC = new ReclamationC();
    $id = $_GET['id'];
    $reclamationC->supprimerReclamation($id);
    echo '<div>Reclamation with id=',$id,'; has been deleted</div>';
?>

<a href="../View/afficherListeReclamation.php">Back to the list</a>