<?php
 	include "D:\differant appli\htdocs\lasttest\lasttest\Front\controller\eventcommentaireC.php";
	 include_once 'D:\differant appli\htdocs\lasttest\lasttest\Front\model\event.php';


    $error = "";

    $commentaire_event= null;

    $eventcommentaireC = new eventcommentaireC();
    if (
        
		isset($_POST["contenu"]) &&		
        isset($_POST["date_commentaire"]) 
	 
      
    ) {
        if (
           
            !empty($_POST["contenu"]) && 
			!empty($_POST["date_commentaire"]) 
           
        
        ) {
            $commentaire_event = new commentaire_event(
                $_POST['id_commentaire'],
				$_POST['contenu'],
                $_POST['date_commentaire']   
            );
            $eventcommentaireC->modifiercommentaireevent($commentaire_event, $_POST["id_commentaire"]);
            header('Location:affichercommentaire.php');
        }
        else
            $error = "Missing information";
    }    
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
        <div class="logo_name">Robotech</div>
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
     
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
     
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                      <!---- search -->
                    
        
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id_commentaire'])){
				$commentaire_event = $eventcommentaireC->recuperer($_POST['id_commentaire']);
				
		?>
             <div class="container mt-3">
<form action="modifiercommentaire.php" method="POST">
    <input type="hidden" name="id_commentaire" value="<?php echo $commentaire_event['id_commentaire']; ?>">
    <h2 style="text-align:center"  > Modifier Commentaire</h2>
    <th>
    <div class="form-group">
      <label>Contenu</label>
      <input type="text" name="contenu" class="form-control" value="<?php echo $commentaire_event['contenu']; ?>">
    </div>
    </th>  
    <th>
    <div class="form-group">
      <label>Date Commentaire</label>
      <input type="date" name="date_commentaire"  class="form-control" value="<?php echo $commentaire_event['date_commentaire']; ?>">
    </div>
    </th>
 

                      
                <tr>
                    <td>
                        <input type="submit" value="Modifier" class="form-control btn btn-info"> 
                    </td>
                    <br>
                    <br>  
                    <td>
                    
                        
                  </td>
                </tr>
            </table>
        </form>
	    <form action="affichercommentaire.php">
        <input type="submit" value="Annuler" class="form-control btn btn-danger"> 
        </form>
    
    <?php
		}
		?>
         </tbody>
                        </table>
                    
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




