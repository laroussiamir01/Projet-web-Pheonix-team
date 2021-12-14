<?php
include 'D:\differant appli\htdocs\lasttest\lasttest\Front\controller\eventcommentaireC.php';
$eventcommentaireC = new eventcommentaireC();
$listec=$eventcommentaireC->affichercommentaireevent();
?>


<!DOCTYPE html> 
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
 
</head>

<body>

<!--main body-->
<div class="main_body">
        <!--side bar--> 
        <div class="sidebar">
    <div class="logo-details">
        <i class='bx bx-code-alt icon'></i>
        <div class="logo_name">geeks</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
        <a href="#">
          <i class='bx bx-cart-alt' ></i>
          <span class="links_name">Stock</span>
        </a>
        <span class="tooltip">Stock</span>
      </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Ordered</span>
       </a>
       <span class="tooltip">Ordered</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Event</span>
       </a>
       <span class="tooltip">Event</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">commentaire</span>
       </a>
       <span class="tooltip">commentaire</span>
     </li>
    
     <li>
       <a href="#">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Offre</span>
       </a>
       <span class="tooltip">Offre</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
    </ul>
  </div>
  <!------------------------------------>
     
        
                            
                            <h2 class="mx-auto text-center m-5"> Les Commentaires</h2>
  <div class = "container text-center"> 
                            <a href="ajoutercommentaire.php" class="btn">Ajouter un commentaire </a>
                       
                        <table class="table" >
                            <thead>
                            <tr>
                                <th>id_commentaire</th>
                                <th>contenu</th>
                                <th>date_commentaire</th>
                                <th colspan="2">Action</th>
                               
                            </tr>
                        </thead> 
                        <tbody>
                        <?php 
                        foreach($listec as $commentaire_event){
                        ?>
                            <tr>
                            <td><?php echo $commentaire_event['id_commentaire']; ?></td>
                            <td><?php echo $commentaire_event['contenu']; ?></td>
                             <td><?php echo $commentaire_event['date_commentaire']; ?></td>
                    
                           
                    
                                <td>
                                <form method="POST" action="modifiercommentaire.php">
                                <input type="submit" class="btn btn-info" name="Modifier" value="Modifier">
                                    <input type="hidden" value=<?PHP echo $commentaire_event['id_commentaire']; ?> name="id_commentaire">
                               </form>	
                                </td>

                                <td><a href="supprimercommentaire.php?id_commentaire=<?php echo $commentaire_event['id_commentaire']; ?>" class="btn btn-danger">Supprimer</a></td>
                            </tr>
                       <?php } ?>
                        </tbody>
                        </table>
                    
                    </div>  
            </div>
            </div>
            
       
          <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>
            
     

