<?php
include '../controller/eventC.php';
$eventC=new eventC();
$liste=$eventC->afficherevent();
?>
<?php
include '..\controller\eventcommentaireC.php';
$eventcommentaireC = new eventcommentaireC();
$listec=$eventcommentaireC->affichercommentaireevent();
?>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>FreshUI - Premium Web App and Admin Template</title>

        <meta name="description" content="FreshUI is a Premium Web App and Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Related styles of various icon packs and javascript plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (Browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="js/vendor/modernizr-respond.min.js"></script>
    </head>
    <!-- In the PHP version you can set the following options from the config file -->
    <!--
        Add one of the following classes to the body element for the desirable feature:
        'sidebar-left-pinned'                         for a left pinned sidebar (always visible > 1200px)
        'sidebar-right-pinned'                        for a right pinned sidebar (always visible > 1200px)
        'sidebar-left-pinned sidebar-right-pinned'    for both sidebars pinned (always visible > 1200px)
    -->
    <body class="header-fixed-top">
        <!-- Left Sidebar -->
        <!-- In the PHP version you can set the following options from the config file -->
        <!-- If you add the class .enable-hover, then a small portion of left sidebar will be visible and it can be opened with a mouse hover (> 1200px) (may affect website performance) -->
        <div id="sidebar-left" class="enable-hover">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Search Form -->
                <form action="page_ready_search_results.html" method="post" class="sidebar-search">
                    <input type="text" id="sidebar-search-term" name="sidebar-search-term" placeholder="Search..">
                </form>
                <!-- END Search Form -->

                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-left-scroll">
                    <!-- Sidebar Navigation -->
                    <ul class="sidebar-nav">
                        <li>
                            <h2 class="sidebar-header">Welcome</h2>
                        </li>
                        <li>
                            <a href="index.html" class=" active"><i class="fa fa-coffee"></i>Dashboard</a>
                        </li>
                        <li>
                            <h2 class="sidebar-header">User Interface</h2>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-rocket"></i>Elements</a>
                            <ul>
                                <li>
                                    <a href="page_elements_typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="page_elements_blocks_grid.html">Blocks - Grid</a>
                                </li>
                                <li>
                                    <a href="page_elements_navigation_extras.html">Navigation - Extras</a>
                                </li>
                                <li>
                                    <a href="page_elements_buttons_dropdowns.html">Buttons - Dropdowns</a>
                                </li>
                                <li>
                                    <a href="page_elements_progress_loading.html">Progress - Loading</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-th"></i>Tables</a>
                            <ul>
                                <li>
                                    <a href="page_tables_styles.html">Styles</a>
                                </li>
                                <li>
                                    <a href="page_tables_datatables.html">Datatables</a>
                                </li>
                                <li>
                                    <a href="page_tables_editable.html">Editable</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-pencil-square-o"></i>Forms</a>
                            <ul>
                                <li>
                                    <a href="page_forms_general.html">General</a>
                                </li>
                                <li>
                                    <a href="page_forms_components.html">Components</a>
                                </li>
                                <li>
                                    <a href="page_forms_validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="page_forms_wizard.html">Wizard</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-gift"></i>Icon Packs</a>
                            <ul>
                                <li>
                                    <a href="page_icons_fontawesome.html">Font Awesome</a>
                                </li>
                                <li>
                                    <a href="page_icons_glyphicons_pro.html">Glyphicons Pro</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h2 class="sidebar-header">Extras</h2>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-gear"></i>Components</a>
                            <ul>
                                <li>
                                    <a href="page_comp_animations.html">Animations</a>
                                </li>
                                <li>
                                    <a href="page_comp_carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="page_comp_gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="page_comp_calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="page_comp_charts.html">Charts</a>
                                </li>
                                <li>
                                    <a href="page_comp_syntax_highlighting.html">Syntax Highlighting</a>
                                </li>
                                <li>
                                    <a href="page_comp_maps.html">Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-file"></i>Pages</a>
                            <ul>
                                <li>
                                    <a href="page_ready_blank.html">Blank</a>
                                </li>
                                <li>
                                    <a href="page_ready_404.html">404 Error</a>
                                </li>
                                <li>
                                    <a href="page_ready_search_results.html">Search Results</a>
                                </li>
                                <li>
                                    <a href="page_ready_pricing_tables.html">Pricing Tables</a>
                                </li>
                                <li>
                                    <a href="page_ready_faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="page_ready_invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="page_ready_article.html">Article</a>
                                </li>
                                <li>
                                    <a href="page_ready_forum.html">Forum</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="gi gi-tint"></i>3 Level Menu</a>
                            <ul>
                                <li>
                                    <a href="#">Link 1</a>
                                </li>
                                <li>
                                    <a href="#" class="submenu-link">Submenu 1</a>
                                    <ul>
                                        <li>
                                            <a href="#">Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Link</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Link 2</a>
                                </li>
                                <li>
                                    <a href="#" class="submenu-link">Submenu 2</a>
                                    <ul>
                                        <li>
                                            <a href="#">Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Link</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h2 class="sidebar-header">Special</h2>
                        </li>
                        <li>
                            <a href="page_special_timeline.html"><i class="fa fa-clock-o"></i>Timeline</a>
                        </li>
                        <li>
                            <a href="page_special_user_profile.html"><i class="fa fa-pencil-square"></i>User Profile</a>
                        </li>
                        <li>
                            <a href="page_special_message_center.html"><i class="fa fa-envelope-o"></i>Message Center</a>
                        </li>
                        <li>
                            <a href="page_special_login.html"><i class="fa fa-power-off"></i>Login &amp; Register</a>
                        </li>
                        <li>
                            <a href="page_special_landing.html"><i class="fa fa-plane"></i>Landing Page</a>
                        </li>
                    </ul>
                    <!-- END Sidebar Navigation -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Sidebar Content -->
        </div>
        <!-- END Left Sidebar -->

        <!-- Right Sidebar -->
        <!-- In the PHP version you can set the following options from the config file -->
        <!-- If you add the class .enable-hover, then a small portion of right sidebar will be visible and it can be opened with a mouse hover (> 1200px) (may affect website performance) -->
        <div id="sidebar-right">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- User Info -->
                <div class="user-info">
                    <div class="user-details"><a href="page_special_user_profile.html">pixelcave</a><br><em>Web Designer</em></div>
                    <img src="img/template/avatar.png" alt="Avatar">
                </div>
                <!-- END User Info -->

                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-right-scroll">
                    <!-- Color Themes -->
                    <div class="sidebar-section">
                        <h2 class="sidebar-header">Color Themes</h2>
                        <!-- Change Color Theme functionality can be found in main.js - templateOptions() -->
                        <ul class="theme-colors clearfix">
                            <li class="active">
                                <a href="javascript:void(0)" class="themed-background-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-river themed-border-river" data-theme="css/themes/river.css" data-toggle="tooltip" title="River"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-amethyst themed-border-amethyst" data-theme="css/themes/amethyst.css" data-toggle="tooltip" title="Amethyst"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dragon themed-border-dragon" data-theme="css/themes/dragon.css" data-toggle="tooltip" title="Dragon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-emerald themed-border-emerald" data-theme="css/themes/emerald.css" data-toggle="tooltip" title="Emerald"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-grass themed-border-grass" data-theme="css/themes/grass.css" data-toggle="tooltip" title="Grass"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Color Themes -->

                    <!-- User Menu -->
                    <ul class="sidebar-nav">
                        <li>
                            <h2 class="sidebar-header">Explore</h2>
                        </li>
                        <li>
                            <a href="page_special_timeline.html"><i class="fa fa-clock-o"></i> Updates</a>
                        </li>
                        <li>
                            <a href="page_special_user_profile.html"><i class="fa fa-pencil-square"></i> Profile</a>
                        </li>
                        <li>
                            <a href="page_special_message_center.html"><i class="fa fa-envelope-o"></i> Messages</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-cog"></i> Settings</a>
                        </li>
                        <li>
                            <a href="page_special_login.html"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- END User Menu -->

                    <!-- Notifications -->
                    <div class="sidebar-section">
                        <h2 class="sidebar-header">Notifications</h2>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <small><em>2 hours ago</em></small><br>
                            PHP version updated successfully on <a href="javascript:void(0)">Server #5</a>
                        </div>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <small><em>3 hours ago</em></small><br>
                            <a href="javascript:void(0)">Game Server</a> crashed but restored!
                        </div>
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <small><em>5 hours ago</em></small><br>
                            <a href="javascript:void(0)">FTP Server</a> went down for maintenance!
                        </div>
                    </div>
                    <!-- END Notifications -->

                    <!-- Messages -->
                    <div class="sidebar-section">
                        <h2 class="sidebar-header">Messages</h2>
                        <div class="alert alert-info">
                            <small><a href="page_special_user_profile.html">Claire</a>, 2 minutes ago</small><br>
                            Hi John, I just wanted to let you know that.. <a href="page_special_message_center.html">more</a>
                        </div>
                        <div class="alert alert-info">
                            <small><a href="page_special_user_profile.html">Michael</a>, 5 minutes ago</small><br>
                            The project is moving along just fine and we.. <a href="page_special_message_center.html">more</a>
                        </div>
                    </div>
                    <!-- END Messages -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Sidebar Content -->
        </div>
        <!-- END Right Sidebar -->

        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from the config file -->
        <!-- Add the class .full-width for a full width page (100%, 1920px max width) -->
        <div id="page-container">
            <!-- Header -->
            <!-- In the PHP version you can set the following options from the config file -->
            <!-- Add the class .navbar-default or .navbar-inverse for a light or dark header respectively -->
            <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
            <!-- If you add the class .navbar-fixed-top remember to add the class .header-fixed-top to <body> element -->
            <!-- If you add the class .navbar-fixed-bottom remember to add the class .header-fixed-bottom to <body> element -->
            <header class="navbar navbar-default navbar-fixed-top">
                <!-- Right Header Navigation -->
                <ul class="nav header-nav pull-right">
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-cogs"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-custom pull-right">
                            <li class="dropdown-header text-center">HEADER</li>
                            <li>
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-header-default">Default</a>
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-header-inverse">Inverse</a>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-header-top">Top</a>
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-header-bottom">Bottom</a>
                                </div>
                            </li>
                            <li class="hidden-xs hidden-sm dropdown-header text-center">FULL WIDTH PAGE</li>
                            <li class="hidden-xs hidden-sm">
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-fw-disable">Disable</a>
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-fw-enable">Enable</a>
                                </div>
                            </li>
                            <li class="visible-lg dropdown-header text-center">PIN SIDEBARS</li>
                            <li class="visible-lg">
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-pin-left">Pin Left</a>
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-pin-right">Pin Right</a>
                                </div>
                            </li>
                            <li class="visible-lg dropdown-header text-center">SIDEBARS MOUSE HOVER</li>
                            <li class="visible-lg">
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-hover-left">Left</a>
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-hover-right">Right</a>
                                </div>
                            </li>
                            <li class="visible-lg hidden-lt-ie9 dropdown-header text-center">EFFECT WHEN SIDEBARS OPEN</li>
                            <li class="visible-lg hidden-lt-ie9 text-center">
                                <div class="btn-group-vertical btn-group-sm" id="option-effects">
                                    <button class="btn btn-default" data-fx="fx-none">None</button>
                                    <button class="btn btn-default" data-fx="fx-opacity">Opacity</button>
                                    <button class="btn btn-default" data-fx="fx-move">Move</button>
                                    <button class="btn btn-default" data-fx="fx-push">Push</button>
                                    <button class="btn btn-default" data-fx="fx-rotate">Rotate</button>
                                    <button class="btn btn-default" data-fx="fx-push-move">Push and Move</button>
                                    <button class="btn btn-default" data-fx="fx-push-rotate">Push and Rotate</button>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" id="sidebar-right-toggle">
                            <strong>5</strong> <i class="fa fa-user"></i>
                        </a>
                    </li>
                </ul>
                <!-- END Right Header Navigation -->

                <!-- Left Header Navigation -->
                <ul class="nav header-nav pull-left">
                    <li>
                        <a href="javascript:void(0)" id="sidebar-left-toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
                <!-- END Left Header Navigation -->

                <!-- Header Brand -->
                <a href="index.html" class="navbar-brand">
                    <img src="img/template/drop.png" alt="FreshUI">
                    <span>FreshUI</span>
                </a>
                <!-- END Header Brand -->
            </header>
            <!-- END Header -->

            <div class="details">
                <div class="recentorders">
                    <div class="cardheader">
                        <h2>Demande recente</h2>
                     
                        <a href="ajouterevent.php" class="btn">Ajouter un event </a>
                    </div>
                   <table border="1" align="center">
                        <thead>
                        <tr>
                            <td>id_event</td>
                            <td>nom_event</td>
                            <td>date_debut_event</td>
                             <td>date_fin_event </td>
                    
                            <td>Modifer</td>
                            <td>Supprimer</td>
                        </tr>
                    </thead> 
                    <tbody>
                    <?php 
                    foreach($liste as $event){
                    ?>
                        <tr>
                        <td><?php echo $event['id_event']; ?></td>
                        <td><?php echo $event['nom_event']; ?></td>
                         <td><?php echo $event['date_debut_event']; ?></td>
                          <td><?php echo $event['date_fin_event']; ?></td>
                       
                
                            <td>
                            <form method="POST" action="modifierevent.php">
                                <input type="submit" class="btn modif" name="Modifier" value="Modifier">
                                <input type="hidden" value=<?PHP echo $event['id_event']; ?> name="id_event">
                           </form>	
                            </td>

                            <td><a href="supprimerevent.php?id_event=<?php echo $event['id_event']; ?>" class="btn">Supprimer</a></td>
                        </tr>
                   <?php } ?>
                    </tbody>
                    </table>
                
                </div>  
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
            </div>


            

           

                <!-- Footer -->
                <footer class="clearfix">
                    <div class="pull-right">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="pull-left">
                        <span id="year-copy"></span> &copy; <a href="https://1.envato.market/qbN" target="_blank">FreshUI 2.1</a>
                    </div>
                </footer>
                <!-- END Footer -->
            </div>
            <!-- END FX Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, check main.js - scrollToTop() -->
        <a href="javascript:void(0)" id="to-top"><i class="fa fa-angle-up"></i></a>

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and custom Javascript code -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Javascript code only for this page -->
        <script>
            $(function () {
                // Set up timeline scrolling functionality
                $('.timeline-con').slimScroll({height: 565, color: '#000000', size: '3px', touchScrollStep: 100, distance: '0'});
                $('.timeline').css('min-height', '565px');

                // Demo status updates and timeline functionality
                var statusUpdate = $('#status-update');
                var statusUpdateVal = '';

                $('#accept-request').click(function () {
                    $(this).replaceWith('<span class="label label-success">Awesome, you became friends!');
                });

                $('#status-update-btn').click(function () {
                    statusUpdateVal = statusUpdate.val();

                    if (statusUpdateVal) {
                        $('.timeline-con').slimScroll({scrollTo: '0px'});

                        $('.timeline').prepend('<li class="animation-pullDown">' +
                            '<div class="timeline-item">' +
                            '<h4 class="timeline-title"><small class="timeline-meta">just now</small><i class="fa fa-file"></i> Status</h4>' +
                            '<div class="timeline-content"><p>' + $('<div />').text(statusUpdateVal).html().substring(0, 200) + '</p><em>Demo functionality</em></div>' +
                            '</div>' +
                            '</li>');

                        statusUpdate.val('').attr('placeholder', 'I hope you like it! :-)');
                    }
                });

                /*
                 * Flot 0.8.3 Jquery plugin is used for charts
                 *
                 * For more examples or getting extra plugins you can check http://www.flotcharts.org/
                 * Plugins included in this template: pie, resize, stack
                 */

                // Get the elements where we will attach the charts
                var chartClassic = $('#chart-classic');

                // Random data for the charts
                var dataEarnings = [[0, 60], [1, 100], [2, 80], [3, 84], [4, 124], [5, 90], [6, 150]];
                var dataSales = [[0, 30], [1, 50], [2, 40], [3, 42], [4, 62], [5, 45], [6, 75]];

                /* Classic Chart */
                $.plot(chartClassic,
                    [
                        {
                            data: dataEarnings,
                            lines: {show: true, fill: true, fillColor: {colors: [{opacity: 0.25}, {opacity: 0.25}]}},
                            points: {show: true, radius: 7}
                        },
                        {
                            data: dataSales,
                            lines: {show: true, fill: true, fillColor: {colors: [{opacity: 0.15}, {opacity: 0.15}]}},
                            points: {show: true, radius: 7}
                        }
                    ],
                    {
                        colors: ['#f39c12', '#2e3030'],
                        legend: {show: false},
                        grid: {borderWidth: 0, hoverable: true, clickable: true},
                        yaxis: {show: false},
                        xaxis: {show: false}
                    }
                );

                // Creating and attaching a tooltip to the classic chart
                var previousPoint = null, ttlabel = null;
                chartClassic.bind('plothover', function (event, pos, item) {

                    if (item) {
                        if (previousPoint !== item.dataIndex) {
                            previousPoint = item.dataIndex;

                            $('#chart-tooltip').remove();
                            var x = item.datapoint[0], y = item.datapoint[1];

                            if (item.seriesIndex === 1) {
                                ttlabel = '<strong>' + y + '</strong> sales';
                            } else {
                                ttlabel = '$ <strong>' + y + '</strong>';
                            }

                            $('<div id="chart-tooltip" class="chart-tooltip">' + ttlabel + '</div>')
                                .css({top: item.pageY - 45, left: item.pageX + 5}).appendTo("body").show();
                        }
                    }
                    else {
                        $('#chart-tooltip').remove();
                        previousPoint = null;
                    }
                });
            });
        </script>
    </body>
</html>