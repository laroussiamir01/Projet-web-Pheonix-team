<?php 
        require_once 'CommentaireBack.php'; 
        require_once 'Like.php';
        require_once 'Dislike.php';
?>

<?php
include 'D:\differant appli\htdocs\lasttest\lasttest\Front\controller\eventC.php';
$eventC=new eventC();
$liste=$eventC->afficherevent_nomcroissant();
?>
<?php
include 'D:\differant appli\htdocs\lasttest\lasttest\Front\controller\eventcommentaireC.php';
$eventcommentaireC = new eventcommentaireC();
$listec=$eventcommentaireC->affichercommentaireevent();
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head >
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Humans for the Future, Human-robot, Robotic Technologies, Concept Cars, Robots and AI">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Page 1</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.29.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logorobot.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body">
    <header class="u-align-center-xs u-border-1 u-border-grey-25 u-clearfix u-header u-header" id="sec-fc23"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1073" data-image-height="888">
          <img src="images/logorobot.png" class="u-logo-image u-logo-image-1">
        </a>
        <form action="#" method="get" class="u-border-1 u-border-grey-15 u-search u-search-right u-search-1">
          <button class="u-search-button" type="submit">
            <span class="u-search-icon u-spacing-10 u-text-grey-40">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b04b"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-b04b" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </span>
          </button>
          <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
        </form>
        <nav class="u-align-left u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-1">
          <div class="menu-collapse u-custom-font u-font-arial" style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 500;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-font-arial u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" style="padding: 10px 36px;">Home</a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" style="padding: 10px 36px;">Events</a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" style="padding: 10px 36px;">Products</a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" style="padding: 10px 36px;">Offers</a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" style="padding: 10px 36px;">News</a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" style="padding: 10px 26px 10px 36px;">Posts</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 24px;">Home</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 24px;">Events</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 24px;">GAMES</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 24px;">PAGES</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 24px;">SUPPORT</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 24px;">BLOG</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 24px;">CONTACT</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
   <!------------------------------------------------------------------------------------------>
  
      
   
   
   <!---------------------------------Tri--------------------------------------------->
   <br><br><br><br>
   <a href="index.php" >
   <input type="button" value="Remove Tri" />
</a>
<a href="TriParNomdecroissant.php" >
   <input type="button" value="Tri Par Nom decroissant" />
</a>
<a href="TriParDatecroissant.php" >
   <input type="button" value="Tri Par Date croissant" />
</a>
<a href="TriParDatedecroissant.php" >
   <input type="button" value="Tri Par Date decroissant" />
</a>
   <!---------------------------------Tri--------------------------------------------->
   <?php 
                        foreach($liste as $event){
                        ?>
                        <div class="row"><div class="col-4">
                        <div class="card" style="width: 18rem;">
  <img src="images/axel.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $event['nom_event']; ?></h5>
    <p class="card-text"><?php echo $event['date_debut_event']; ?> <br><?php echo $event['date_fin_event']; ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                        </div></div>
                     
                          <?php $listec=$eventcommentaireC->affichercommentaireevent();
                        foreach($listec as $commentaire_event){
                        ?>
                        <?php if($commentaire_event["nom_event"]==$event["nom_event"]):?> 
                            <tr>
                            <td><?php echo $commentaire_event['id_commentaire']; ?></td>
                            <td><?php echo $commentaire_event['contenu']; ?></td> <br><br>
                             <td><?php echo $commentaire_event['date_commentaire']; ?></td>
                    
                           
                    
                                <td>
                               
                            </tr>
                            <?php endif;?>
                            
                       <?php } ?>
                            
                       <?php } ?>
                    
    
   
    
         
    <br><br>
  
   <!------------------------------------------------------------------------------------------>
  </body>
</html>