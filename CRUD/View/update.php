<?php require '../config.php'; $id = null; if ( !empty($_GET['id'])) { $id = $_REQUEST['id']; } if ( null==$id ) { header("Location: afficherListeReclamation.php"); } if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) { 
      $nomError = null; 
      $prenomError = null; 
      $nomUtilisateurError = null;
      $emailError = null;
      $explicationError = null; 
// On assigne nos valeurs
       $nom = $_POST['nom']; 
       $prenom = $_POST['prenom']; 
        $nomUtilisateur = $_POST['nomUtilisateur'];
        $email = $_POST['email'];
         $explication = $_POST['explication']; 
         // On verifie que les champs sont remplis 
         $valid = true; 
         if (empty($nom)) { $nomError = 'Please enter nom'; $valid = false; } if (empty($prenom)) { $prenomError = 'Please enter your name'; $valid = false; } if (empty($nomUtilisateur)) { $nomUtilisateurError = 'Please enter nomUtilisateur$nomUtilisateur'; $valid = false; } if (empty($email)) { $emailError = 'Please enter Email Address'; $valid = false; } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $emailError = 'Please enter a valid Email Address'; $valid = false; }  if (empty($sujet)) { $sujetError = 'Please enter phone'; $valid = false; }  if  (!isset($explication)){ $explicationError = 'Please enter website explication'; $valid = false; } 
         // mise à jour des donnés 
         if ($valid) { $pdo = config::getConnexion();
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql = "UPDATE reclamation SET nom = ?, prenom = ?, nomUtilisateur = ?, email = ?, explication = ?  WHERE id = ?";
             $q = $pdo->prepare($sql);
             $q->execute(array($nom, $prenom ,$nomUtilisateur, $email,  $explication ,$id));
             config::disconnect();
             header("Location: afficherListeReclamation.php");
             
         } 
        }else {
            
            $pdo = config::getConnexion();
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql = "SELECT * FROM reclamation where id = ?";
             $q = $pdo->prepare($sql);
             $q->execute(array($id));
             $data = $q->fetch(PDO::FETCH_ASSOC);
             $nom = $data['nom'];
             $prenom = $data['prenom'];
             $nomUtilisateur = $data['nomUtilisateur'];
             $email = $data['email'];
             $explication = $data['explication'];
             config::disconnect();
         }
     
     ?>

<!DOCTYPE html>
<html>
 <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <title>Crud-Update</title>
         <link href="css/bootstrap.min.css" rel="stylesheet">
     <img src="data:imname/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />

 </head>
 <body>
  

<br />
<div class="container">

<br />
<div class="row">

<br />
<h3>Modifier un contact</h3>
<p>

</div>
<p>

<br />
<form method="post" action="update.php?id=<?php echo $id ;?>">

<br />
<div class="control-group <?php echo!empty($nomError) ? 'error' : ''; ?>">
                    <label class="control-label">name</label>

<br />
<div class="controls">
                        <input name="nom" type="text"  placeholder="nom" value="<?php echo!empty($nom) ? $nom : ''; ?>">
                        <?php if (!empty($nomError)): ?>
                            <span class="help-inline"><?php echo $nomrror; ?></span>
                        <?php endif; ?>
</div>
<p>

</div>
<p>



<br />
<div class="control-group<?php echo!empty($prenomError) ? 'error' : ''; ?>">
                    <label class="control-label">prenom</label>

<br />
<div class="controls">
                        <input type="text" name="prenom" value="<?php echo!empty($prenom) ? $prenom : ''; ?>">
                        <?php if (!empty($prenomError)): ?>
                            <span class="help-inline"><?php echo $prenomError; ?></span>
                        <?php endif; ?>
</div>
<p>

</div>

<div class="controls">
                        <input type="text" name="nomUtilisateur" value="<?php echo!empty($nomUtilisateur) ? $nomUtilisateur : ''; ?>">
                        <?php if (!empty($nomUtilisateurError)): ?>
                            <span class="help-inline"><?php echo $nomUtilisateurError; ?></span>
                        <?php endif; ?>
</div>
<p>

</div>
<p>
<br />
<div class="control-group <?php echo!empty($emailError) ? 'error' : ''; ?>">
                    <label class="control-label">Email Address</label>

<br />
<div class="controls">
                        <input name="email" type="text" placeholder="Email Address" value="<?php echo!empty($email) ? $email : ''; ?>">
                        <?php if (!empty($emailError)): ?>
                            <span class="help-inline"><?php echo $emailError; ?></span>
                        <?php endif; ?>
</div>






<p>

</div>
<p>



<br />
<div class="controls">
                        <input name="sujet" type="text"  value="<?php echo!empty($sujet) ? $sujet : ''; ?>">
                        <?php if (!empty($sujetError)): ?>
                            <span class="help-inline"><?php echo $sujetError; ?></span>
                        <?php endif; ?>
</div>
<p>

</div>
<p>







<br />
<div class="control-group <?php echo!empty($explicationError) ? 'error' : ''; ?>">
                    <label class="control-label">explicationaire </label>
                    <br />
<div class="controls">
                        <textarea rows="4" cols="30" name="explication" ><?php if (isset($explication)) echo $explication; ?></textarea>    
                        <?php if (!empty($explicationError)): ?>
                            <span class="help-inline"><?php echo $explicationError; ?></span>
                        <?php endif; ?>
</div>
<p>

</div>
<p>


<br />
<div class="form-actions">
                    <input type="submit" class="btn btn-success" name="submit" value="submit">
                    <a class="btn" href="afficherListeReclamation.php">Retour</a>
</div>
<p>

            </form>
<p>



</div>
<p>


    </body>
</html>