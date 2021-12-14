

     

  <?php
  include 'C:\xampp\htdocs\CRUD\View\back\inc\footer.php';

  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Crud en php</title>
        
        	<link href="css/bootstrap.min.css" rel="stylesheet">
        	<link href="css/responsive.css" rel="stylesheet">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

 <!-- Custom fonts for this template-->
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>
    <body>



<br />

<div class="container">

<br />
<div class="row">

<br />
<h2>Crud en Php</h2>
<p>

</div>
<p>




<br />
<div class="row">
                <div>
                    <a href="add.php" class="btn btn-success">Ajouter un user</a>
                </div>
                    <div>
                    <a href="ajouterReclamation.php" class="btn btn-success">Ajouter une reclamation</a>
                </div>

<br />
<div class="table-responsive">

<br />
<table class="table table-hover table-bordered">

<br />
<thead>



<th>Nom</th>
<p>



<th>Prénom</th>
<p>



<th>Nom utilisateur</th>
<p>



<th>Email</th>
<p>



<th>typer</th>
<p>



<th>Explication</th>
<p>


<th>Date</th>
<p>



<th>Update</th>
<p>



<th>Delete</th>
<p>

</thead>
<p>


<br />
<tbody>
                        <?php //on inclut notre fichier de connection $pdo = Database::connect(); //on se connecte à la base $sql = 'SELECT * FROM user ORDER BY id DESC'; //on formule notre requete foreach ($pdo->query($sql) as $row) { //on cree les lignes du tableau avec chaque valeur retournée
                          include "../Controller/reclamationC.php";
                         $reclamation = new reclamationC();
                         $resultat=$reclamation->afficherreclamation();
    
   
                        echo '
<br />
<tr>';               
foreach($resultat as $row) {
echo'

<td>' . $row['nom'] . '</td>
<p>
';
                            echo'
                            <td>' . $row['prenom'] . '</td>
                            <p>
                            ';
                                                        echo'
                            
                            <td>' . $row['nomUtilisateur'] . '</td>
                            <p>
                            ';
                                                        echo'
                            
                            <td>' . $row['email'] . '</td>
                            <p>
                            ';

                            echo'
                            
                            <td>' . $row['typer'] . '</td>
                            <p>
                            ';
                                                       
                                                        echo'
                            
                            <td>' . $row['explication'] . '</td>
                            <p>
                            ';
                            echo'
                            
                            <td>' . $row['date'] . '</td>
                            <p>
                            ';
                          
                            //                             echo '
                            
                            // <td>';
                            //                             echo '<a class="btn" href="editer.php?id=' . $row['reclamation_id'] . '">Read</a>';// un autre td pour le bouton d'edition
                            //                             echo '</td>
                            // <p>
                            // ';
                                                        echo '
                            
                            <td>';
                                                        echo '<a class="btn btn-success" href="updateReclamation.php?id=' . $row['reclamation_id'] . '">Update</a>';// un autre td pour le bouton d'update
                                                        echo '</td>
                            <p>
                            ';
                                                        echo'
                            
                            <td>';
                                                        echo '<a class="btn btn-danger" href="deleteReclamation.php?id=' . $row['reclamation_id'] . ' ">Delete</a>';// un autre td pour le bouton de suppression
                                                        echo '</td>
                            <p>
                            ';
                                                        echo '</tr>
                            <p>
                            ';
}      



  
                                                    ?>    
                            </tbody>
                          
                            
                            <p>
                            
                            </table>
                            <p>
                            
                            </div>
                            <p>
                            
                            
                            </div>
                            <p>
                            
                            
                            </div>
                            <p>
                            
                                </body>
                                
                            </html>
                            