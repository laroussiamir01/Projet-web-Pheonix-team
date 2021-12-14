<?php //on inclut notre fichier de connection $pdo = Database::connect(); //on se connecte à la base $sql = 'SELECT * FROM user ORDER BY id DESC'; //on formule notre requete foreach ($pdo->query($sql) as $row) { //on cree les lignes du tableau avec chaque valeur retournée
    include "../Controller/reclamationC.php";
    $reclamation = new reclamationC();
    $id = $_GET['id'];
    $result=$reclamation->afficherReclamationParId($id);
    $result=$result->fetch();
?>

<?php
    include_once '../Model/reclamation.php';
    include_once '../Controller/reclamationC.php';
    include_once '../Model/type_reclamation.php';
    include_once '../Controller/type_reclamationC.php';
   

    $error = "";

    // create reclamation
    $reclamation = null;

    // create an instance of the controller
    $reclamationC = new reclamationC();
    if (
        
        isset($_POST["nom"]) &&       
        isset($_POST["prenom"]) &&
        isset($_POST["nomUtilisateur"]) &&
        isset($_POST["email"]) &&
        isset($_POST["typer"]) &&
        isset($_POST["explication"])
    ) {
        if (
            
            !empty($_POST['nom']) &&
            !empty($_POST["prenom"]) &&
            !empty($_POST["nomUtilisateur"]) &&
            !empty($_POST["email"]) &&
            !empty($_POST["typer"]) &&
            !empty($_POST["explication"])
        ) {
            $reclamation = new reclamation(
               
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['nomUtilisateur'],
                $_POST['email'],
                $_POST["typer"],
                $_POST['explication']
            );
            $reclamationC->updateReclamation($reclamation, $id);
            header('Location: ../View/afficherListeReclamation.php');
            
        }
        else
            $error = "Missing information";
    }

    
    require_once('../config.php'); 
    $id = null; 
        $pdo = config::getConnexion() ;
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
        $sql = "SELECT * FROM typereclamation ";
        $q = $pdo->prepare($sql);
        # $q->execute(array($id));
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        config::disconnect();
        $typeReclamation = new typeReclamationC();
        $types_de_reclamation=$typeReclamation->afficherTypeReclamation();
    
?>

<html lang="en">

  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education Meeting HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

<!--menu-->
  
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" >Home</a></li>
                          <li><a href="meetings.html">Meetings</a></li>
                          <li class="scroll-to-section"><a href="#apply">Apply Now</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="meetings.html">Upcoming Meetings</a></li>
                                  <li><a href="meeting-details.html">Meeting Details</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="#courses">Courses</a></li> 
                          <li class="scroll-to-section"><a href="#contact" class="active" >reclamation</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>

                                  <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>


<!--contaaact formulaire reclamation-->
  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post" onsubmit = "envoie()" >
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Reclamations</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="nom" value=<?php echo $result["nom"]?> type="text" id="nom" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="prenom" value=<?php echo $result["prenom"]?> type="text" id="prenom" placeholder="YOURLASTNAME...*" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-4">
                    <fieldset>
                      <input name="nomUtilisateur" value=<?php echo $result["nomUtilisateur"]?> type="text" id="nomUtilisateur" placeholder="username...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" value=<?php echo $result["email"]?> type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  <fieldset>
                  </div>
                  <hr>



                    <div class="col-lg-12">
                    <h2>type de reclamation</h2>
                    </div>




               <div class="col-lg-12" style="margin-bottom: 20px;">
                    <fieldset>
                     



      <select class="form-select" aria-label="Default select example" name="typer"  id="typer">
        <option>Open this select menu</option>
        <?php foreach($types_de_reclamation as $row) { echo '<option value= "'. $row['id_typeReclamation'] .'"'; 
            if ($row['id_typeReclamation'] == $result['typer']) {
                echo 'selected';
            };
            echo '>' . $row['libelle_typeReclamation'] . '</option> ' ;}  ?>
        
        
        <option value = "" >autre...</option>
        
        
      </select>
   

                   </fieldset>
                  </div>

                 

                     <div class="col-lg-12">
                    <h2>explication</h2>
                      </div>
                    <fieldset>
                      <textarea name="explication" type="text" class="form-control" id="explication" required=""><?php echo $result['explication']?></textarea>
                    </fieldset>
                  </div>
                    <td>
                        <input type="submit" value="Envoyer">
                    </td>
                    <td>
              </form>





              <!-- form ajout type -->
              <div class="col-lg-12">
                <form id="contact" action="" method="post" onsubmit = "envoie()" >
                <div class="col-lg-4"  >
                      <fieldset>
                      <input name="libelle_typeReclamation" type="text" id="libelle_typeReclamation" placeholder="libelle...*" required=""  style="margin-top: 20px;"  > 
                      </fieldset>
                      </div> 

                      <div class="col-lg-4"  >
                      <fieldset>
                      
                      <input type="submit" value="Envoyer" >                 
                      </fieldset>
                      
                      </div> 

                       </div>
                        </form>

                            <div id="confirmation" hidden >votre requete a ete enregistre </div>

                          </div>
                        </div>
                      </div>

        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>71.450.450</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>E_inovation@gmail.com</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>res x app10 Ennasr-tunis</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.E_inovation.edu</span>
              </li>
            </ul>
          </div>
            
          <div class="right-info"  style="margin-top: 10px;" >
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>71.450.450</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>E_inovation@gmail.com</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>res x app10 Ennasr-tunis</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.E_inovation.edu</span>
              </li>
            </ul>
          </div>
        </div>
     
      </div>
    </div>

    
    <div class="footer">
     
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    
    <script>
        //according to loftblog tut
       
       const suite_harcelement = document.getElementById("harcelement");
        suite_harcelement.addEventListener('click', function(){
          document.getElementById("suite_contenue").hidden = true;
          document.getElementById("suite_harcelement").hidden = false;});

          const suite_contenue = document.getElementById("contenue");
         suite_contenue.addEventListener('click', function(){
          document.getElementById("suite_harcelement").hidden = true;
          document.getElementById("suite_contenue").hidden = false;});
          

          const envoie = document.getElementById("contact");
        envoie.addEventListener('click', function(){
          document.getElementById("confirmation").hidden = false;
         ;});

         function envoie() {
  alert("The form was submitted");
}
    </script>
</body>

</body>
</html>