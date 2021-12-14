<?php
include '..\controller\eventcommentaireC.php';
$eventcommentaireC = new eventcommentaireC();
$listec=$eventcommentaireC->affichercommentaireevent();
?>


<!DOCTYPE html> 
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher</title>
    <link rel="stylesheet" type="text/css" href="style.css">
 
</head>

<body>

<div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
                        <span class="title">katana tech</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">event</span>
                    </a>
                </li>
                <li>
                    <a href="#">    
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">users</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
                
            </ul>
        </div>
     
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                      <!---- search -->
                      <div class="search">
                        <label>
                            <input type="text" placeholder="Chercher ici">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
           
                
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
            
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        

        <script>
            //Menu Toggle
            let toggle = document.querySelector(".toggle");
            let navigation = document.querySelector('.navigation');
            let main= document.querySelector('.main');
        
            toggle.onclick = function(){
                navigation.classList.toggle("active");
                main.classList.toggle("active")
            }
        
            //adding hoverd class in selected div ! 
            let list =document.querySelectorAll(".navigation li");
            function activeLink(){
                list.forEach((item)=>
                item.classList.remove('hovered'));
                this.classList.add('hovered')
            }
            list.forEach((item)=> 
            item.addEventListener('mouseover',activeLink));
        </script>
</body>
</html>
            
     



























































