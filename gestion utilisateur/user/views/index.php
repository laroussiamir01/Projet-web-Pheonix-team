<?php 
    include_once 'header.php'
?>

    <p id="index-text"> <?php if(isset($_SESSION['id'])){
       
    }else{
       
    } 
    ?> </p>
    

<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>Maxshop Home2 - Premium Multipurpose HTML5/CSS3 Theme</title>
	<meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
    <link rel="shortcut icon" href="ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
	
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/themecss/lib.css" rel="stylesheet">
	<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="css/themecss/so-categories.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="css/themecss/so-super-category.css" rel="stylesheet">
	<link id="color_scheme" href="css/home2.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	
   

</head>

<body class="common-home res layout-home2">
    <div id="wrapper" class="wrapper-full banners-effect-8">
		<!-- Header Container  -->
		<header id="header" class=" variantleft type_2">
			<!-- Header Top -->
			<div class="header-top compact-hidden">
				<div class="container">
					<div class="row">
						<div class="header-top-left  col-lg-4  hidden-sm col-md-5 hidden-xs">
							<ul class="list-inlines">
								<li class="hidden-xs" >
									<div class="welcome-msg"> 
										<ul class="list-msg"> 
											<li><label class="label-msg">This week</label> <a href="#">Sale special too good to miss in every gear</a></li> 
											<li><label class="label-msg">Tomorrow</label> <a href="#">Laten ipsum dolor sit amet. In gravida pellen</a></li> 
										</ul> 
									</div>
								</li>
							</ul>
							
						</div>
						<div class="header-top-right collapsed-block col-lg-8 col-sm-12 col-md-7 col-xs-12 ">
							<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
							<div class="tabBlock" id="TabBlock-1">
								<ul class="top-link list-inline">
									<li class="account" id="my_account">
										<a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >My Accounts</span> <span class="fa fa-angle-down"></span></a>
										<ul class="dropdown-menu ">
											<li><a href="register.html"><i class="fa fa-user"></i> Register</a></li>
											<li><a href="login.html"><i class="fa fa-pencil-square-o"></i> Login</a></li>
										</ul>
									</li>
									<li class="wishlist "><a href="wishlist.html" id="wishlist-total" class="top-link-wishlist" title="Wish List (2)"><span>Wish List (2)</span></a></li>
									<li class="checkout hidden"><a href="checkout.html" class="top-link-checkout" title="Checkout"><span >Checkout</span></a></li>
									<li class="login hidden"><a href="cart.html" title="Shopping Cart"><span >Shopping Cart</span></a></li>
									<li class="form-group currency currencies-block">
										<form action="index.html" method="post" enctype="multipart/form-data" id="currency">
											<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
												<span class="icon icon-credit "></span> US Dollar <span class="fa fa-angle-down"></span>
											</a>
											<ul class="dropdown-menu btn-xs">
												<li> <a href="#">(€)&nbsp;Euro</a></li>
												<li> <a href="#">(£)&nbsp;Pounds	</a></li>
												<li> <a href="#">($)&nbsp;US Dollar	</a></li>
											</ul>
										</form>
									</li>
									<li class="form-group languages-block ">
										<form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
											<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
												<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/flags/gb.png" alt="English" title="English">
												<span class="">English</span>
												<span class="fa fa-angle-down"></span>
											</a>
											<ul class="dropdown-menu">
												<li><a href="index.html"><img class="image_flag lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/flags/gb.png" alt="English" title="English" /> English </a></li>
												<li> <a href="index.html"> <img class="image_flag lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/flags/lb.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
											</ul>
										</form>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Header Bottom -->
			<div class="header-bottom compact-hidden">
				<div class="container">
				<div class="header-bottom-inner">
					<div class="row">
						<div class="header-bottom-menu col-md-10 col-sm-9 col-xs-4">
							<div class="responsive so-megamenu  megamenu-style-dev">
								<nav class="navbar-default">
									<div class=" container-megamenu  horizontal">
										<div class="navbar-header">
											<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>	
										</div>
										
										<div class="megamenu-wrapper ">
											<span id="remove-megamenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu " data-transition="slide" data-animationtime="250">
														<li class="home hover">
															<a href="index.html">Home <b class="caret"></b></a>
															<div class="sub-menu" style="width:100%;" >
																<div class="content" >
																	<div class="row">
																		<div class="col-md-3">
																			<a href="index.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/home-1.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - (Default)</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home2.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/home-2.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 2</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home3.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/home-3.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 3</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home4.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/home-4.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 4</h3> 
																			</a> 
																			
																		</div>
																		
																		<div class="col-md-3">
																			<a href="home5.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/home-5.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 5</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home6.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/home-6.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 6</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home7.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/home-7.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 7</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home8.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/home-8.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 8</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home9.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/home-9.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 9</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home10.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/home-10.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 10</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/home-11.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 11</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/home-12.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 12</h3> 
																			</a> 
																			
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>
																	
																	Features
																</strong>
							
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 100%; right: auto;">
																<div class="content" >
																	<div class="row">
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Listing pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="category.html">Category Page 1 </a></li>
																						<li><a href="category-v2.html">Category Page 2</a></li>
																						<li><a href="category-v3.html">Category Page 3</a></li>
																					</ul>
																					
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Product pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="product.html">Product Page 1</a></li>
																						<li><a href="product-v2.html">Product Page 2</a></li>
																						<li><a href="product-v3.html">Product Page 3</a></li>
																						<li><a href="product-v4.html">Product Page 4</a></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Shopping pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="cart.html">Shopping Cart Page</a></li>
																						<li><a href="checkout.html">Checkout Page</a></li>
																						<li><a href="compare.html">Compare Page</a></li>
																						<li><a href="wishlist.html">Wishlist Page</a></li>
																					
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">My Account pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="login.html">Login Page</a></li>
																						<li><a href="register.html">Register Page</a></li>
																						<li><a href="my-account.html">My Account</a></li>
																						<li><a href="order-history.html">Order History</a></li>
																						<li><a href="order-information.html">Order Information</a></li>
																						<li><a href="return.html">Product Returns</a></li>
																						<li><a href="gift-voucher.html">Gift Voucher</a></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/hot-icon.png" alt="">Pages</strong>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 40%; ">
																<div class="content" >
																	<div class="row">
																		<div class="col-md-6">
																			<ul class="row-list">
																				<li><a class="subcategory_item" href="faq.html">FAQ</a></li>
																				<li><a class="subcategory_item" href="typography.html">Typography</a></li>
																				<li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
																				<li><a class="subcategory_item" href="contact.html">Contact us</a></li>
																				<li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
																			</ul>
																		</div>
																		<div class="col-md-6">
																			<ul class="row-list">
																				<li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
																				<li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
																				<li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
																				<li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/menu/new-icon.png" alt="">Categories</strong>
																<span class="label"></span>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 100%; display: none;">
																<div class="content">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="row">
																				<div class="col-md-3 img img1">
																					<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/img1.jpg" alt="banner1"></a>
																				</div>
																				<div class="col-md-3 img img2">
																					<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/img2.jpg" alt="banner2"></a>
																				</div>
																				<div class="col-md-3 img img3">
																					<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/img3.jpg" alt="banner3"></a>
																				</div>
																				<div class="col-md-3 img img4">
																					<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/img4.jpg" alt="banner4"></a>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Automotive</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Car Alarms and Security</a></li>
																							<li><a href="#"  class="main-menu">Car Audio &amp; Speakers</a></li>
																							<li><a href="#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
																							<li><a href="#"  class="main-menu">More Car Accessories</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Electronics</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Battereries &amp; Chargers</a></li>
																							<li><a href="#"  class="main-menu">Headphones, Headsets</a></li>
																							<li><a href="#"  class="main-menu">Home Audio</a></li>
																							<li><a href="#"  class="main-menu">Mp3 Players &amp; Accessories</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Jewelry &amp; Watches</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Earings</a></li>
																							<li><a href="#"  class="main-menu">Wedding Rings</a></li>
																							<li><a href="#"  class="main-menu">Men Watches</a></li>
																							<li><a href="#"  class="main-menu">Women Watches</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Bags, Holiday Supplies</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#"  class="main-menu">Gift &amp; Lifestyle Gadgets</a></li>
																							<li><a href="#"  class="main-menu">Gift for Man</a></li>
																							<li><a href="#"  class="main-menu">Gift for Woman</a></li>
																							<li><a href="#"  class="main-menu">Lighter &amp; Cigar Supplies</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>Accessories</strong>
																
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 100%; display: none;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-md-8">
																			<div class="row">
																				<div class="col-md-6 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#"  class="main-menu">Automotive</a>
																								<ul>
																									<li><a href="#">Car Alarms and Security</a></li>
																									<li><a href="#" >Car Audio &amp; Speakers</a></li>
																									<li><a href="3#" >Gadgets &amp; Auto Parts</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#"  class="main-menu">Smartphone &amp; Tablets</a>
																								<ul>
																									<li><a href="#" >Accessories for i Pad</a></li>
																									<li><a href="#" >Apparel</a></li>
																									<li><a href="#" >Accessories for iPhone</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-md-6 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Sports &amp; Outdoors</a>
																								<ul>
																									<li><a href="#" >Camping &amp; Hiking</a></li>
																									<li><a href="#" >Cameras &amp; Photo</a></li>
																									<li><a href="#" >Cables &amp; Connectors</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#"  class="main-menu">Electronics</a>
																								<ul>
																									<li><a href="#" >Battereries &amp; Chargers</a></li>
																									<li><a href="#" >Bath &amp; Body</a></li>
																									<li><a href="#" >Outdoor &amp; Traveling</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4">
																			<span class="title-submenu">Bestseller</span>
																			<div class="col-sm-12 list-product">
																				<div class="product-thumb">
																					<div class="image pull-left">
																						<a href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/35.jpg" width="80" alt="Filet Mign" title="Filet Mign"></a>
																					</div>
																					<div class="caption">
																						<h4><a href="#">Filet Mign</a></h4>
																						<div class="ratings">
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						</div>
																						<p class="price">$88.00</p>
																					</div>
																				</div>
																			</div>
																			<div class="col-sm-12 list-product">
																				<div class="product-thumb">
																					<div class="image pull-left">
																						<a href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/W1.jpg" width="80" alt="Dail Lulpa" title="Dail Lulpa"></a>
																					</div>
																					<div class="caption">
																						<h4><a href="#">Dail Lulpa</a></h4>
																						<div class="ratings">
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																						   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																						</div>
																						<p class="price">$78.00</p>
																					</div>
																				</div>
																			</div>
																			<div class="col-sm-12 list-product">
																				<div class="product-thumb">
																					<div class="image pull-left">
																						<a href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/141.jpg" width="80" alt="Canon EOS 5D" title="Canon EOS 5D"></a>
																					</div>
																					<div class="caption">
																						<h4><a href="#">Canon EOS 5D</a></h4>
																						
																						<div class="ratings">
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																						</div>
																						<p class="price">
																							<span class="price-new">$60.00</span>
																							<span class="price-old">$145.00</span>
																							
																						</p>
																					</div>
																				</div>
																			</div>
																			
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="">
															<p class="close-menu"></p>
															<a href="blog-page.html" class="clearfix">
																<strong>Blog</strong>
																<span class="label"></span>
															</a>
														</li>
														
														<li class="hidden-md color-buy">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong>Buy Theme!</strong>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
						
						<!-- Cart Pro-->
						<div class="block-cart col-md-2 col-sm-3 col-xs-8">
							<div class="block-cart">
								<!--cart-->
								<div class="shopping_cart pull-right">
									<div id="cart" class=" btn-group btn-shopping-cart">
										<a data-loading-text="Loading..." class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
											<div class="shopcart">
												<span class="handle pull-left"></span>
												<span class="text-shopping-cart hidden-xs">	My cart	</span>
												<span class="total-shopping-cart cart-total-full">	 2</span>
											</div>
										</a>
										<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">							
											<li>
												<table class="table table-striped">
													<tbody>
														<tr>
															<td class="text-center" style="width:70px">
																<a href="product.html"> <img class="lazyload preview" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/35.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign"> </a>
															</td>
															<td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
															<td class="text-center"> x1 </td>
															<td class="text-center"> $1,202.00 </td>
															<td class="text-right">
																<a href="product.html" class="fa fa-edit"></a>
															</td>
															<td class="text-right">
																<a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
															</td>
														</tr>
														<tr>
															<td class="text-center" style="width:70px">
																<a href="product.html"> <img class="lazyload preview" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/141.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D"> </a>
															</td>
															<td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
															<td class="text-center"> x1 </td>
															<td class="text-center"> $60.00 </td>
															<td class="text-right">
																<a href="product.html" class="fa fa-edit"></a>
															</td>
															<td class="text-right">
																<a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
															</td>
														</tr>
													</tbody>
												</table>
											</li>
											<li>
												<div>
													<table class="table table-bordered">
														<tbody>
															<tr>
																<td class="text-left"><strong>Sub-Total</strong>
																</td>
																<td class="text-right">$1,060.00</td>
															</tr>
															<tr>
																<td class="text-left"><strong>Eco Tax (-2.00)</strong>
																</td>
																<td class="text-right">$2.00</td>
															</tr>
															<tr>
																<td class="text-left"><strong>VAT (20%)</strong>
																</td>
																<td class="text-right">$200.00</td>
															</tr>
															<tr>
																<td class="text-left"><strong>Total</strong>
																</td>
																<td class="text-right">$1,262.00</td>
															</tr>
														</tbody>
													</table>
													<p class="text-center"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!--//cart-->
							</div>
						</div>
						<!-- //End Cart Pro -->
					</div>
				</div>
				</div>
			</div>
		</header>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<main id="content" class="page-main">
			<!-- Block Spotlight1  -->
			<div class="so-spotlight1 ">
				<div class="container">
					<div class="row">
						<div id="sohomepage-slider1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="slider-container "> 
								<div id="so-slideshow" class="">
									<div class="module slideshow no-margin">
										<div class="item">
											<a href="#"><img class="lazyload img-responsive"src="image/demo/slider/sl21/1.jpg" alt="slider1"></a>
											<div class="sohomeslider-description">
												<img class="image image-sl11 pos-right img-active" src="image/demo/slider/sl21/2.png" alt="slideshow">
												<div class="text pos-right text-sl11">
													<h3 class="tilte modtitle-sl11  title-active">Nikon D7100</h3>
													<p class="des des-sl11 des-active">Ultimate image quality. Create without limination</p>      
												</div> 					
											</div>
										</div>
										<div class="item">
											<a href="#"><img class="lazyload img-responsive"src="image/demo/slider/sl22/1.jpg" alt="slider1"></a>
											<div class="sohomeslider-description">
												<img class="image image-sl12 pos-left img-active" src="image/demo/slider/sl22/2.png" alt="slideshow">
												<div class="text pos-right text-sl12">
												<h3 class="tilte modtitle-sl12 title-active">OUR NEW RANGE OF</h3>
												<h4 class="titleh4 h4-active">TABLET</h4>
												<p class="des des-sl11 des-active">FOR LESS THAN $99.00</p>   
												</div>    					
											</div>
										</div>
										<div class="item">
											<a href="#"><img class="lazyload img-responsive"src="image/demo/slider/sl23/1.jpg" alt="slider1"></a>
											<div class="sohomeslider-description">
												<img class="image image-sl13 pos-right img-active" src="image/demo/slider/sl23/2.png" alt="slideshow">
												<div class="text pos-left text-sl13">
													<h3 class="tilte modtitle-sl13 title-active">OUR NEW RANGE OF</h3>
													<h4 class="titleh4 h4-active">IMACS</h4>   
												</div>  					
											</div>
										</div>
									</div>
									<div class="loadeding"></div>

								</div>
							</div>
						</div>
					</div>
					<div class="static-home-2 banners">
						<div class="col-s col-s-1"><a title="Static Image" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/st-img-1-home-2.png" alt="Static Image"></a> 
						<a title="Static Image" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/st-img-2-home-2.png" alt="Static Image"></a></div>
						<div class="col-s col-s-2"><a title="Static Image" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/st-img-3-home-2.png" alt="Static Image"></a></div>
						<div class="col-s col-s-3"><a title="Static Image" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/st-img-4-home-2.png" alt="Static Image"></a></div>
						<div class="col-s col-s-4"><a title="Static Image" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/st-img-5-home-2.png" alt="Static Image"></a></div>
					</div>
				</div>  
			</div>
			<!-- Block Spotlight2  -->
			<div class="so-spotlight2 ">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-12">
							<!-- Mod Best Seller -->
							<div class="moduletable module best-seller">
								<h3 class="modtitle"><span>Best Sellers</span></h3>
								<div id="sp_extra_slider_20796849091482058205" class="so-extraslider">
									<div class="extraslider-inner best-seller-slider">
										<div class="item ">
											<div class="item-wrap style1">
												<div class="item-wrap-inner media">
													<div class="media-left">
														<div class="item-image">
															<div class="item-img-info">
															<a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
																<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e12.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
																<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e11.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
															</a>
															</div>
														</div>
													</div>
													<div class="media-body">
														<div class="item-info">
															<div class="rating">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															</div>
															<div class="item-title">
																<a href="product.html" target="_self" title="Bikum masen dumas">
																	Caras cursus nulla												</a>
															</div>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="content_price">
																	<span class="price product-price">	$122.00	</span>
																</div>
															</div>
															<!-- End item-content -->
														</div>
													</div><!-- End item-info -->
												</div>
												<!-- End item-wrap-inner -->
											</div>
											<div class="item-wrap style1">
												<div class="item-wrap-inner media">
													<div class="media-left">
														<div class="item-image">
															<div class="item-img-info">
															<a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
																<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e4.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
																<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e4_2.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
															</a>
															</div>
														</div>
													</div>
													<div class="media-body">
														<div class="item-info">
															<div class="rating">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															</div>
															<div class="item-title">
																<a href="product.html" target="_self" title="Bikum masen dumas">
																	Doner spareribs												</a>
															</div>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="content_price">
																	<span class="price product-price">	$122.00	</span>
																</div>
															</div>
															<!-- End item-content -->
														</div>
													</div><!-- End item-info -->
												</div>
												<!-- End item-wrap-inner -->
											</div>
											<div class="item-wrap style1">
												<div class="item-wrap-inner media">
													<div class="media-left">
														<div class="item-image">
															<div class="item-img-info">
															<a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
																<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e13.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
																<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e14.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
															</a>
															</div>
														</div>
													</div>
													<div class="media-body">
														<div class="item-info">
															<div class="rating">
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															</div>
															<div class="item-title">
																<a href="product.html" target="_self" title="Bikum masen dumas">
																	Bikum masen dum..												</a>
															</div>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="content_price">
																	<span class="price product-price">	$122.00	</span>
																</div>
															</div>
															<!-- End item-content -->
														</div>
													</div><!-- End item-info -->
												</div>
												<!-- End item-wrap-inner -->
											</div>
											<!-- End item-wrap -->													
										</div>
										<div class="item ">
											<div class="item-wrap style1">
												<div class="item-wrap-inner media">
													<div class="media-left">
														<div class="item-image">
															<div class="item-img-info">
															<a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
																<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/1.png" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
																<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/2.png" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
															</a>
															</div>
														</div>
													</div>
													<div class="media-body">
														<div class="item-info">
															<div class="rating">
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															</div>
															<div class="item-title">
																<a href="product.html" target="_self" title="Bikum masen dumas">
																	Lorem exercit..								</a>
															</div>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="content_price">
																	<span class="price product-price">	$122.00	</span>
																</div>
															</div>
															<!-- End item-content -->
														</div>
													</div><!-- End item-info -->
												</div>
												<!-- End item-wrap-inner -->
											</div>
											<div class="item-wrap style1">
												<div class="item-wrap-inner media">
													<div class="media-left">
														<div class="item-image">
															<div class="item-img-info">
															<a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
																<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/j1.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;" />
																<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/j2.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
															</a>
															</div>
														</div>
													</div>
													<div class="media-body">
														<div class="item-info">
															<div class="rating">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
															</div>
															<div class="item-title">
																<a href="product.html" target="_self" title="Bikum masen dumas">
																	Cornedbeef turk..											</a>
															</div>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="content_price">
																	<span class="old-price product-price">$55.00</span>
																	<span class="price-old">$79.00</span>	
																</div>
															</div>
															<!-- End item-content -->
														</div>
													</div><!-- End item-info -->
												</div>
												<!-- End item-wrap-inner -->
											</div>
											<div class="item-wrap style1">
												<div class="item-wrap-inner media">
													<div class="media-left">
														<div class="item-image">
															<div class="item-img-info">
															<a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
																<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/34.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
																<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/35.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
															</a>
															</div>
														</div>
													</div>
													<div class="media-body">
														<div class="item-info">
															<div class="rating">
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															</div>
															<div class="item-title">
																<a href="product.html" target="_self" title="Bikum masen dumas">
																	Doner sparerib..									</a>
															</div>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="content_price">
																	<span class="old-price product-price">$75.00</span>
																	<span class="price-old">$99.00</span>												
																</div>
															</div>
															<!-- End item-content -->
														</div>
													</div><!-- End item-info -->
												</div>
												<!-- End item-wrap-inner -->
											</div>
											<!-- End item-wrap -->													
										</div>
									</div>
								</div>
							</div>
							<!-- //End Best Seller  -->
							<!-- Mod Blog -->
							<div class="module so-latest-blog ">
								<h3 class="modtitle"><span><span class="first">Latest</span> Post</span></h3>
								<div id="so_latest_blog_2" class="so-blog-external button-type2 button-type2">
									<div class="blog-external">
										<div class="media">
											<div class="item head-button">
												<div class="media-lefts so-block">
													<a href="blog-detail.html" target="_blank">
													<img  class="media-object lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/blog/1.jpg" alt="Kire tuma demonstraverunt lector">
													</a>
												</div>
												<div class="media-body">
													<div class="media-content so-block">
														<h4 class="media-heading head-item">
														<a href="blog-detail.html" title="Kire tuma demonstraverunt lector" target="_blank">Kire tuma demonstraverunt lector</a>
														</h4>
														<div class="description">
															Morbi tempus, non ullamcorper euismod, erat odio suscipit purus, nec ornare lacus turpis ac purus. Mauris cursus euismod suspendisse euismod....
														</div>
													</div>
												</div>
											</div>
										</div>


										<div class="media">
											<div class="item head-button">
												<div class="media-lefts so-block">
													<a href="blog-detail.html" target="_blank">
													<img class="media-object lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/blog/4.jpg" alt="Neque porro quisquam est, lore">
													</a>
												</div>
												<div class="media-body">

													<div class="media-content so-block">
													<h4 class="media-heading head-item">
													<a href="blog-detail.html" title="Neque porro quisquam est, lore" target="_blank">Neque porro quisquam est, lore</a>
													</h4>
													<div class="description">
													Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam euismod suspendisse euismod...
													</div>
													</div>
												</div>
											</div>
										</div>

										<div class="media">
											<div class="item head-button">
												<div class="media-lefts so-block">
													<a href="blog-detail.html" target="_blank">
													<img class="media-object lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/blog/3.jpg" alt="Ac tincidunt Suspendisse malesu">
													</a>
												</div>
												<div class="media-body">
													<div class="media-content so-block">
														<h4 class="media-heading head-item">
														<a href="blog-detail.html" title="Ac tincidunt Suspendisse malesu" target="_blank">Ac tincidunt Suspendisse malesu</a>
														</h4>
														<div class="description">
														Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor euismod suspendisse. euismod....
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Mod -->
							<!-- Banner Left -->
							<div class="module block-banner-left">
								<div class="banners"><div><a href="#" title="banner"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/l1.jpg" alt="banner"></a></div></div>
							</div>
							<!-- //End Banner Left -->
							<!-- Testiminal -->
							<div class="module block-clients-say">
								<h3 class="modtitle"><span>TESTIMONIAL</span></h3>
								<div class="block clients_say">
									<div class="slider-clients-say">
										<div class="item block_content">
											<div class="text">"Duis aliquam, magna ac fermentum are we finibus, orci viverra risus, into varius telluso tortor sed eros. Sedion pharetra ante sit amet suscipit ornare. Integer et auctor diam sit dolor."</div>

											<div class="info"><div class="image"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/clients_say.png" alt="banner"></div>
											<div class="author">Aliquam Tellus</div>

											<p>Vitae Ornare Mauris</p>
											</div>
										</div>

										<div class="item block_content">
											<div class="text">"Duis aliquam, magna ac fermentum are we finibus, orci viverra risus, into varius telluso tortor sed eros. Integer et auctor diam sit dolor. Sedion pharetra ante sit amet suscipit ornare. "</div>

											<div class="info"><div class="image"><img src="image/demo/cms/clients_say.png" alt="banner"></div>

											<div class="author">Alecsandra Bon</div>

											<p>Vitae Ornare Mauris</p>

											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- //End -->
							<!-- Brand -->
							<div class="module so-manu-slider">
								<h3 class="modtitle">
									<span><span class="first">Our</span> brand</span>
									<a class="view-all-brand" href="#" title="View All">View All</a>
								</h3>
								<div class="wrap_manu_slider">	
									<div class="manu-slider-inner">					
										<div class="item">
											<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/2.jpg" alt="image" class="img-responsive"></a>
										</div>
										<div class="item">
											<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/3.jpg" alt="image" class="img-responsive"></a>
										</div>
										<div class="item">
											<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/4.jpg" alt="image" class="img-responsive"></a>
										</div>
										<div class="item">
											<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/5.jpg" alt="image" class="img-responsive"></a>
										</div>
										<div class="item">
											<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/6.jpg" alt="image" class="img-responsive"></a>							
										</div>
										<div class="item">
											<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/7.jpg" alt="image" class="img-responsive"></a>
										</div>
										<div class="item">
											<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/8.jpg" alt="image" class="img-responsive"></a>
										</div>
										<div class="item">
											<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/9.jpg" alt="image" class="img-responsive"></a>
										</div>
									</div>
								</div>
							</div>
							<!-- //End Brand -->
						</div>
						<div class="col-md-9 col-sm-8 col-xs-12">
							<!-- Mod Supercategory 1 -->
							<div class="module cus-style-supper-cate supper1">
								<div class="header">
										<h3 class="modtitle">
										<span class="icon-color">
											<i class="fa fa-empire"></i>
											Electronics			
											<small class="arow-after"></small>
										</span>
										<strong class="line-color"></strong>
									</h3>
									
								</div>
								
								<div id="so_super_category_1" class="so-sp-cat first-load">
									<div class="spcat-wrap ">
										<div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
											<!--Begin Tabs-->
											    <div class="spcat-tabs-wrap">
											        <span class="spcat-tab-selected">	Rating	</span>
											        <span class="spcat-tab-arrow">▼</span>
											        <ul class="spcat-tabs cf">
							                            <li class="spcat-tab  tab-sel tab-loaded" data-active-content=".items-category-sales" data-field_order="sales">
															<span class="spcat-tab-label">Sale</span>
										                </li>
										                <li class="spcat-tab " data-active-content=".items-category-p_date_added" data-field_order="p_date_added">
															<span class="spcat-tab-label">Date Add</span>
										                </li>
										                <li class="spcat-tab " data-active-content=".items-category-p_sort_order" data-field_order="p_sort_order">
															<span class="spcat-tab-label">Sort Order</span>
										                </li>
										                <li class="spcat-tab" data-active-content=".items-category-rating" data-field_order="rating">
															<span class="spcat-tab-label">Rating</span>
										                </li>
										                <li class="spcat-tab " data-active-content=".items-category-p_quantity" data-field_order="p_quantity">
															<span class="spcat-tab-label">Quantity</span>
										                </li>
										                <li class="spcat-tab " data-active-content=".items-category-p_price" data-field_order="p_price">
															<span class="spcat-tab-label">Price</span>
										                </li>
								                    </ul>
											    </div>
											<!-- End Tabs-->
										</div>
										<div class="main-left">
											<div class="banner-post-text">
												 <a href="#" title="banner"> <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/s2.jpg" alt="banner">  </a>                        				
											</div>
											<div class="hot-category">
												<div class="category-wrap-cat">
										            <div class="title-imageslider  sp-cat-title-parent">
													 Hot Categories        </div>
										   
										            <div id="cat_slider_3" class="slider">
														<div class="cat_slider_inner so_category_type_default">
										                    <div class="item">
										                        <div class="item-inner">
											                        <div class="cat_slider_title">
																				
											                            <a href="category.html" title="Tange manue" target="_self">
											                                       <i class="fa fa-caret-right"></i> Egante mangetes </a>
											                        </div>
										                            
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                    <a href="category.html" title="Punge nenune" target="_self">
										                                       <i class="fa fa-caret-right"></i> Guntes magesg</a>
										                            </div>
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                <a href="category.html" title="Hanet magente" target="_self">
										                                <i class="fa fa-caret-right"></i> Hanet magente</a>
										                            </div>
										                            
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                <a href="category.html" title="Knage unget" target="_self">
										                                	<i class="fa fa-caret-right"></i> Angene mafin</a>
										                                </div>
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                <a href="category.html" title="Latenge mange" target="_self">
										                                <i class="fa fa-caret-right"></i> Latenge mange </a>
										                            </div>
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                <a href="category.html" title="Qunge genga" target="_self">
										                                     <i class="fa fa-caret-right"></i> Rengae manges </a>
										                            </div>
										                        </div>
										                    </div>
										            	</div>
													</div>
												</div>
											</div>
										</div>
										<div class="main-right">
											<div class="banner-pre-text">
												<div class="slider-img-cate">
													<a href="#" title="banner">   <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/t1.jpg" alt="banner"></a> 
													<a href="#" title="banner">   <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/t2.jpg" alt="banner"></a>   
													<a href="#" title="banner">   <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/t3.jpg" alt="banner"></a>        
												</div>            				
											</div>
																				
											<div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->	
												<div class="spcat-items spcat-items-loaded items-category-p_date_added product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">				
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b6.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b9.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b14.jpg" alt="Apple Cinema 30" title="Duidem rerum facilis"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b15.jpg" alt="Apple Cinema 30" title="Duidem rerum facilis"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-new">New</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Duidem rerum facilis" target="_self">
																				   Duidem rerum facilis							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$85.00</span>
													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b5.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-new">New</span>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Verty nolen laben							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b2.png" alt="Apple Cinema 30" title="Lande sincut inste"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Lande sincut inste"/>
																				</a>
																			</div>
																	   						
																		</div>
																		
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lande sincut inste							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>								
												<div class="spcat-items spcat-items-loaded items-category-sales product-layout spcat-items-selected" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">				
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b5.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>				
																		</div>
																		<span class="label label-new">New</span>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Verty nolen laben							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b6.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b9.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b2.png" alt="Apple Cinema 30" title="Lande sincut inste"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Lande sincut inste"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lande sincut inste							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b1.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b3.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																				</a>
																			</div>			
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Emdcu meagi" target="_self">
																				   Emdcu meagi inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							
														</div>
													</div>
												</div>	
												
												<div class="spcat-items spcat-items-loaded items-category-p_sort_order product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">				
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b2.png" alt="Apple Cinema 30" title="Lande sincut inste"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Lande sincut inste"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lande sincut inste							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b1.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b3.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																				</a>
																			</div>			
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Emdcu meagi" target="_self">
																				   Emdcu meagi inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b9.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b13.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b14.jpg" alt="Apple Cinema 30"  title="Duidem rerum facilis"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b15.jpg" alt="Apple Cinema 30" title="Duidem rerum facilis"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-new">New</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Duidem rerum facilis" target="_self">
																				   Duidem rerum facilis							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>
												<div class="spcat-items spcat-items-loaded items-category-rating product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">				
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b1.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b3.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																				</a>
																			</div>			
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Emdcu meagi" target="_self">
																				   Emdcu meagi inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b6.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b9.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b5.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>				
																		</div>
																		<span class="label label-new">New</span>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Verty nolen laben							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b2.png" alt="Apple Cinema 30" title="Lande sincut inste"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Lande sincut inste"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lande sincut inste							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>
												<div class="spcat-items spcat-items-loaded items-category-p_quantity product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">				
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b9.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b13.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b6.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b9.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b5.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>				
																		</div>
																		<span class="label label-new">New</span>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Verty nolen laben							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b2.png" alt="Apple Cinema 30" title="Lande sincut inste"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Lande sincut inste"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lande sincut inste							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>
												<div class="spcat-items spcat-items-loaded items-category-p_price product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b5.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>				
																		</div>
																		<span class="label label-new">New</span>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Verty nolen laben							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>				
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b9.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b13.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b14.jpg" alt="Apple Cinema 30" title="Duidem rerum facilis"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b15.jpg" alt="Apple Cinema 30" title="Duidem rerum facilis"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-new">New</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Duidem rerum facilis" target="_self">
																				   Duidem rerum facilis							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b2.png" alt="Apple Cinema 30" title="Lande sincut inste"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Lande sincut inste"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lande sincut inste							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>
											</div>
											<!--End Items-->
										</div>
									</div>
								</div>
							</div>
							<!-- End Mod -->
							<!-- Mod Supercategory 2 -->
							<div class="module cus-style-supper-cate supper2">
								<div class="header">
										<h3 class="modtitle">
										<span class="icon-color">
											<i class="fa fa-mobile"></i>
											Mobile &amp; Tablet				
											<small class="arow-after"></small>
										</span>
										<strong class="line-color"></strong>
									</h3>
									
								</div>
								
								<div id="so_super_category_2" class="so-sp-cat first-load">
									<div class="spcat-wrap ">
										<div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
											<!--Begin Tabs-->
											    <div class="spcat-tabs-wrap">
											        <span class="spcat-tab-selected">	Rating	</span>
											        <span class="spcat-tab-arrow">▼</span>
											        <ul class="spcat-tabs cf">
							                            <li class="spcat-tab" data-active-content=".items-category-sales" data-field_order="sales">
															<span class="spcat-tab-label">Sale</span>
										                </li>
										                <li class="spcat-tab" data-active-content=".items-category-p_date_added" data-field_order="p_date_added">
															<span class="spcat-tab-label">Date Add</span>
										                </li>
										                <li class="spcat-tab" data-active-content=".items-category-p_sort_order" data-field_order="p_sort_order">
															<span class="spcat-tab-label">Sort Order</span>
										                </li>
										                <li class="spcat-tab tab-sel tab-loaded" data-active-content=".items-category-rating" data-field_order="rating">
															<span class="spcat-tab-label">Rating</span>
										                </li>
										                <li class="spcat-tab " data-active-content=".items-category-p_quantity" data-field_order="p_quantity">
															<span class="spcat-tab-label">Quantity</span>
										                </li>
										                <li class="spcat-tab " data-active-content=".items-category-p_price" data-field_order="p_price">
															<span class="spcat-tab-label">Price</span>
										                </li>
								                    </ul>
											    </div>
											<!-- End Tabs-->
										</div>
										<div class="main-left">
											<div class="banner-post-text">
												 <a href="#" title="banner"> <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/s1.jpg" alt="banner">  </a>                        				
											</div>
											<div class="hot-category">
												<div class="category-wrap-cat">
										            <div class="title-imageslider  sp-cat-title-parent">
													 Hot Categories        </div>
										   
										            <div id="cat_slider_2" class="slider">
														<div class="cat_slider_inner so_category_type_default">
										                    <div class="item">
										                        <div class="item-inner">
											                        <div class="cat_slider_title">
																				
											                            <a href="category.html" title="Tange manue" target="_self">
											                                       <i class="fa fa-caret-right"></i> Tange manue </a>
											                        </div>
										                            
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                    <a href="category.html" title="Punge nenune" target="_self">
										                                       <i class="fa fa-caret-right"></i> Punge nenune</a>
										                            </div>
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                <a href="category.html" title="Hanet magente" target="_self">
										                                <i class="fa fa-caret-right"></i> Hanet magente</a>
										                            </div>
										                            
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                <a href="category.html" title="Knage unget" target="_self">
										                                	<i class="fa fa-caret-right"></i> Knage unget</a>
										                                </div>
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                <a href="category.html" title="Latenge mange" target="_self">
										                                <i class="fa fa-caret-right"></i> Latenge mange </a>
										                            </div>
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                <a href="category.html" title="Qunge genga" target="_self">
										                                     <i class="fa fa-caret-right"></i> Qunge genga </a>
										                            </div>
										                        </div>
										                    </div>
										            	</div>
													</div>
												</div>
											</div>
										</div>
										<div class="main-right">
											<div class="banner-pre-text">
												<div class="slider-img-cate">
													<a href="#" title="banner">   <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/t3.jpg" alt="banner"></a> 
													<a href="#" title="banner">   <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/t2.jpg" alt="banner"></a>   
													<a href="#" title="banner">   <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/t1.jpg" alt="banner"></a>        
												</div>                   				
											</div>
																				
											<div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->	
												<div class="spcat-items spcat-items-loaded items-category-rating product-layout spcat-items-selected" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">				
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/t3.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/t3.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																				</a>
																			</div>			
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Emdcu meagi" target="_self">
																				  Meagi Gemdcu  inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$125.00</span><span class="price-old">$159.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/14.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/19.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lampac Sende cuisei							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span> <span class="price-old">$119.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e7.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e6.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>				
																		</div>
																		<span class="label label-new">New</span>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Punerty bolen Regaben							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span> <span class="price-old">$119.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/15.png" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/11.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>
												<div class="spcat-items spcat-items-loaded items-category-p_date_added product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">
															
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/14.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/19.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lampac Sende cuisei							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span> <span class="price-old">$119.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e7.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e6.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>				
																		</div>
																		<span class="label label-new">New</span>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Punerty bolen Regaben							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span> <span class="price-old">$119.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/4.jpg" alt="Apple Cinema 30" title="Duidem rerum facilis"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/4.jpg" alt="Apple Cinema 30" title="Duidem rerum facilis"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-new">New</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Duidem rerum facilis" target="_self">
																				   Duidem rerum facilis							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/t3.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/t3.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																				</a>
																			</div>			
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Emdcu meagi" target="_self">
																				  Meagi Gemdcu  inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$125.00</span><span class="price-old">$159.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>								
												<div class="spcat-items spcat-items-loaded items-category-sales product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">				
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/15.png" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/11.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  src="image/demo/shop/product/t3.jpg" alt="Apple Cinema 30" title="Emdcu meagi" class="img-1 img-responsive" />
																					<img  src="image/demo/shop/product/t3.jpg" alt="Apple Cinema 30" title="Emdcu meagi" class="img-2 img-responsive" />
																				</a>
																			</div>			
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Emdcu meagi" target="_self">
																				  Meagi Gemdcu  inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$125.00</span><span class="price-old">$159.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/23.png" alt="Apple Cinema 30" title="Lande sincut inste"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e2.jpg" alt="Apple Cinema 30" title="Lande sincut inste"
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lande sincut inste							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/4.jpg" alt="Apple Cinema 30" title="Duidem rerum facilis"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/4.jpg" alt="Apple Cinema 30" title="Duidem rerum facilis"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-new">New</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Duidem rerum facilis" target="_self">
																				   Duidem rerum facilis							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>	
												<div class="spcat-items spcat-items-loaded items-category-p_sort_order product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">				
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/t3.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/t3.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																				</a>
																			</div>			
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Emdcu meagi" target="_self">
																				  Meagi Gemdcu  inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$125.00</span><span class="price-old">$159.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/14.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/19.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lampac Sende cuisei							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span> <span class="price-old">$119.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e7.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e6.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>				
																		</div>
																		<span class="label label-new">New</span>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Punerty bolen Regaben							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span> <span class="price-old">$119.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/15.png" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/11.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>
												<div class="spcat-items spcat-items-loaded items-category-p_quantity product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/15.png" alt="Apple Cinema 30" title="Verty nolen laben" />
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/11.jpg" alt="Apple Cinema 30" title="Verty nolen laben" />
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>				
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/4.jpg" alt="Apple Cinema 30" title="Duidem rerum facilis" />
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/4.jpg" alt="Apple Cinema 30" title="Duidem rerum facilis" />
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-new">New</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Duidem rerum facilis" target="_self">
																				   Duidem rerum facilis							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/23.png" alt="Apple Cinema 30" title="Lande sincut inste"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e2.jpg" alt="Apple Cinema 30" title="Lande sincut inste"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lande sincut inste							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e7.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e6.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>				
																		</div>
																		<span class="label label-new">New</span>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Punerty bolen Regaben							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span> <span class="price-old">$119.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>
												<div class="spcat-items spcat-items-loaded items-category-p_price product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/23.png" alt="Apple Cinema 30" title="Lande sincut inste"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e2.jpg" alt="Apple Cinema 30" title="Lande sincut inste"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lande sincut inste							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>				
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/t3.jpg" alt="Apple Cinema 30" title="Emdcu meagi" />
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/t3.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																				</a>
																			</div>			
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Emdcu meagi" target="_self">
																				  Meagi Gemdcu  inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$125.00</span><span class="price-old">$159.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/14.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/19.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lampac Sende cuisei							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span> <span class="price-old">$119.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/15.png" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/11.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>
											</div>
											<!--End Items-->
										</div>
									</div>
								</div>
							</div>
							<!-- End Mod -->
							<!-- Mod Supercategory 3 -->
							<div class="module cus-style-supper-cate supper3">
								<div class="header">
										<h3 class="modtitle">
										<span class="icon-color">
											<i class="fa fa-futbol-o"></i>
											Computer			
											<small class="arow-after"></small>
										</span>
										<strong class="line-color"></strong>
									</h3>
									
								</div>
								
								<div id="so_super_category_3" class="so-sp-cat first-load">
									<div class="spcat-wrap ">
										<div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
											<!--Begin Tabs-->
											    <div class="spcat-tabs-wrap">
											        <span class="spcat-tab-selected">	Rating	</span>
											        <span class="spcat-tab-arrow">▼</span>
											        <ul class="spcat-tabs cf">
							                            <li class="spcat-tab  " data-active-content=".items-category-sales" data-field_order="sales">
															<span class="spcat-tab-label">Sale</span>
										                </li>
										                <li class="spcat-tab " data-active-content=".items-category-p_date_added" data-field_order="p_date_added">
															<span class="spcat-tab-label">Date Add</span>
										                </li>
										                <li class="spcat-tab " data-active-content=".items-category-p_sort_order" data-field_order="p_sort_order">
															<span class="spcat-tab-label">Sort Order</span>
										                </li>
										                <li class="spcat-tab" data-active-content=".items-category-rating" data-field_order="rating">
															<span class="spcat-tab-label">Rating</span>
										                </li>
										                <li class="spcat-tab " data-active-content=".items-category-p_quantity" data-field_order="p_quantity">
															<span class="spcat-tab-label">Quantity</span>
										                </li>
										                <li class="spcat-tab tab-sel tab-loaded" data-active-content=".items-category-p_price" data-field_order="p_price">
															<span class="spcat-tab-label">Price</span>
										                </li>
								                    </ul>
											    </div>
											<!-- End Tabs-->
										</div>
										<div class="main-left">
											<div class="banner-post-text">
												 <a href="#" title="banner"> <img src="image/demo/banner/s3.jpg" alt="banner">  </a>                        				
											</div>
											<div class="hot-category">
												<div class="category-wrap-cat">
										            <div class="title-imageslider  sp-cat-title-parent">
													 Hot Categories        </div>
										   
										            <div id="cat_slider_1" class="slider">
														<div class="cat_slider_inner so_category_type_default">
										                    <div class="item">
										                        <div class="item-inner">
											                        <div class="cat_slider_title">
																				
											                            <a href="category.html" title="Tange manue" target="_self">
											                                       <i class="fa fa-caret-right"></i> Theid cupensg </a>
											                        </div>
										                            
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                    <a href="category.html" title="Punge nenune" target="_self">
										                                       <i class="fa fa-caret-right"></i> Punge nenune</a>
										                            </div>
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                <a href="category.html" title="Hanet magente" target="_self">
										                                <i class="fa fa-caret-right"></i> Denta magela</a>
										                            </div>
										                            
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                <a href="category.html" title="Knage unget" target="_self">
										                                	<i class="fa fa-caret-right"></i> Knage unget</a>
										                                </div>
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                <a href="category.html" title="Latenge mange" target="_self">
										                                <i class="fa fa-caret-right"></i> Verture agoent </a>
										                            </div>
										                        </div>
										                    </div>
										                    <div class="item">
										                        <div class="item-inner">
										                            <div class="cat_slider_title">
										                                <a href="category.html" title="Qunge genga" target="_self">
										                                     <i class="fa fa-caret-right"></i> Qunge genga </a>
										                            </div>
										                        </div>
										                    </div>
										            	</div>
													</div>
												</div>
											</div>
										</div>
										<div class="main-right">
											<div class="banner-pre-text">
												<div class="slider-img-cate">
													<a href="#" title="banner">   <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/t2.jpg" alt="banner"></a> 
													<a href="#" title="banner">   <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/t1.jpg" alt="banner"></a>   
													<a href="#" title="banner">   <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/t3.jpg" alt="banner"></a>        
												</div>                      				
											</div>
																				
											<div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->
												<div class="spcat-items spcat-items-loaded items-category-p_price product-layout spcat-items-selected" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e10.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e11.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																				</a>
																			</div>				
																		</div>
																		<span class="label label-new">New</span>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Maolen Verty  laben							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>				
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f13.jpg" alt="img" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f14.jpg" alt="img" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f14.jpg" alt="img" title="Duidem rerum facilis"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f13.jpg" alt="img" title="Duidem rerum facilis"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-new">New</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Duidem rerum facilis" target="_self">
																				   Duidem rerum facilis							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e11.jpg" alt="img" title="Lande sincut inste"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e11.jpg" alt="img" title="Lande sincut inste"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lande sincut inste							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>	
												<div class="spcat-items spcat-items-loaded items-category-p_date_added product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">
																	
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f13.jpg" alt="img" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f14.jpg" alt="img" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f17.jpg" alt="img" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f18.jpg" alt="img" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e11.jpg" alt="img" title="Lande sincut inste"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e11.jpg" alt="img" title="Lande sincut inste"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lande sincut inste							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f14.jpg" alt="img" title="Duidem rerum facilis"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f13.jpg" alt="img" title="Duidem rerum facilis"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-new">New</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Duidem rerum facilis" target="_self">
																				   Duidem rerum facilis							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							
														</div>
													</div>
												</div>								
												<div class="spcat-items spcat-items-loaded items-category-sales product-layout " data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/m16.png" alt="img" title="Emdcu meagi"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/m16.png" alt="img" title="Emdcu meagi"/>
																				</a>
																			</div>			
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Emdcu meagi" target="_self">
																				   Emdcu meagi inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>				
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f13.jpg" alt="img" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f14.jpg" alt="img" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e11.jpg" alt="img" title="Lande sincut inste"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e11.jpg" alt="img" title="Lande sincut inste"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lande sincut inste							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e10.jpg" alt="img" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e11.jpg" alt="img" title="Verty nolen laben"/>
																				</a>
																			</div>				
																		</div>
																		<span class="label label-new">New</span>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Maolen Verty  laben							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>	
												<div class="spcat-items spcat-items-loaded items-category-p_sort_order product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f14.jpg" alt="img" title="Duidem rerum facilis"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f13.jpg" alt="img" title="Duidem rerum facilis"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-new">New</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Duidem rerum facilis" target="_self">
																				   Duidem rerum facilis							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e11.jpg" alt="img" title="Lande sincut inste"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e11.jpg" alt="img" title="Lande sincut inste"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Lande sincut inste							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
															
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f17.jpg" alt="img" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f18.jpg" alt="img" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/m16.png" alt="img" title="Emdcu meagi"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/m16.png" alt="img" title="Emdcu meagi"/>
																				</a>
																			</div>			
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Emdcu meagi" target="_self">
																				   Emdcu meagi inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							
														</div>
													</div>
												</div>
												<div class="spcat-items spcat-items-loaded items-category-rating product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">
						
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f13.jpg" alt="img" title="Verty nolen laben" />
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f14.jpg" alt="img" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f17.jpg" alt="img" title="Verty nolen laben"/>
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f18.jpg" alt="img" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/m16.png" alt="img" title="Emdcu meagi" />
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/m16.png" alt="img" title="Emdcu meagi" />
																				</a>
																			</div>			
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Emdcu meagi" target="_self">
																				   Emdcu meagi inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e10.jpg" alt="img" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e11.jpg" alt="img" title="Verty nolen laben"/>
																				</a>
																			</div>				
																		</div>
																		<span class="label label-new">New</span>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Maolen Verty  laben							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>
												<div class="spcat-items spcat-items-loaded items-category-p_quantity product-layout" data-total="9">
													<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
														<div class="ltabs-items-inner ltabs-slider ">
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/m16.png" alt="img" title="Emdcu meagi"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/m16.png" alt="img" title="Emdcu meagi"/>
																				</a>
																			</div>			
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Emdcu meagi" target="_self">
																				   Emdcu meagi inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f14.jpg" alt="img" title="Duidem rerum facilis" />
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f13.jpg" alt="img" title="Duidem rerum facilis" />
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-new">New</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Duidem rerum facilis" target="_self">
																				   Duidem rerum facilis							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>			
															<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f13.jpg" alt="img" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f14.jpg" alt="img" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
							    							<div class="ltabs-item ">
																<div class="item-inner product-thumb product-item-container transition ">
																	<div class="left-block">
																		<div class="product-image-container">
																			<div class="image">
																			   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																					<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f17.jpg" alt="img" title="Verty nolen laben"/>
																					<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/f18.jpg" alt="img" title="Verty nolen laben"/>
																				</a>
																			</div>
																	   						
																		</div>
																		<span class="label label-sale">Sale</span>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																			  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>					
																			<h4>
																				<a href="product.html" title="Verty nolen max.." target="_self">
																				   Sende cuisei inges							</a>
																			</h4>				
																			<p class="price">
													  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

													  						</p>
																		</div>
																	</div>
																	<div class="button-group">
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																		<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																		<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																		<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
																	</div>
																</div>
							    							</div>
														</div>
													</div>
												</div>
											</div>
											<!--End Items-->
										</div>
									</div>
								</div>
							</div>
							<!-- End Mod -->
						</div>
					</div>
				</div>  
			</div>
			<!--Block Spotlight3  -->
			<div class="so-spotlight3">
				<div class="container">
					<ul class="mudule list-services row">
						<li class="item-service col-lg-4 col-md-4 col-sm-4 col-xs-12"><a title="Free Shipping" href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/free-shipping.png" alt="Free Shipping"></a></li>
						<li class="item-service col-lg-4 col-md-4 col-sm-4 col-xs-12"><a title="Guaranteed" href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/guaranteed.png" alt="Guaranteed"></a></li>
						<li class="item-service col-lg-4 col-md-4 col-sm-4 col-xs-12"><a title="Deal" href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/deal.png" alt="Deal"></a></li>
					</ul>
				</div>
			</div>		
		</main >
		<!-- //Main Container -->
		<script type="text/javascript"><!--
			var $typeheader = 'header-home2';
			//-->
		</script>
		<!-- Footer Container -->
		<footer class="footer-container typefooter-1" data-wow-duration="0" data-wow-delay="0.1s">
			<!-- FOOTER TOP -->
			<div class="footer-top  wow fadeInRight">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="module social_block col-md-3 col-sm-12 col-xs-12" >
								<ul class="social-block ">
									<li class="facebook"><a class="_blank" href="https://www.facebook.com/MagenTech" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a class="_blank" href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li class="rss"><a class="_blank" href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
									<li class="google_plus"><a class="_blank" href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa  fa-google-plus"></i></a></li>
									<li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
							<div class="module news-letter col-md-9 col-sm-12 col-xs-12">
								<div class="newsletter">
									<div class="title-block">
										<div class="page-heading">SIGN UP FOR OUR NEWSLETTER</div>
										<div class="pre-text">
											Duis at ante non massa consectetur iaculis id non tellus			
										</div>
									</div>
									<div class="block_content">
										<form method="post" name="signup" id="signup" class="btn-group form-inline signup">
											<div class="form-group required send-mail">
												<div class="input-box">
													<input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
												</div>
												<div class="subcribe">
													<button class="btn btn-default btn-lg" type="submit" onclick="return subscribe_newsletter();" name="submit">
														Subscribe						</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<!-- FOOTER CENTER -->
			<div class="footer-center">
				<div class="container content">
					<div class="row">
						<!-- BOX INFO -->
						<div class="col-md-3 col-sm-6 col-xs-12 collapsed-block footer-links box-footer wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
							<div class="module ">
								<div class="content-block-footer">
									<div class="footer-logo">
										<a href="home2.html"><img src="image/demo/logos/theme_logo.png" title="Your Store" alt="Your Store" /></a>
									</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
							</div>				
						</div>
						<!-- BOX ACCOUT -->
						<div class="col-md-3 col-sm-6 box-account box-footer wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
							<div class="module clearfix">
								<h3 class="modtitle">My Account</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="#">Brands</a></li>
										<li><a href="#">Gift Certificates</a></li>
										<li><a href="#">Affiliates</a></li>
										<li><a href="#">Specials</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- BOX INFOMATION -->
						<div class="col-md-3 col-sm-6 box-information box-footer wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
							<div class="module clearfix">
								<h3 class="modtitle">Information</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="#">About Us</a></li>
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Pricing Tables</a></li>
										<li><a href="#">Terms And Conditions</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- BOX ABOUT -->
						<div class="col-md-3  col-sm-6 collapsed-block box-footer wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
							<div class="module ">
								<h3 class="modtitle">About Us</h3>
								<div class="modcontent">
									<ul class="contact-address">
										<li><span class="fa fa-home"></span> My Company, 42 avenue des Champs</li>
										<li><span class="fa fa-envelope"></span> Email: <a href="#"> sales@yourcompany.com</a></li>
										<li><span class="fa fa-phone">&nbsp;</span> Phone 1: 0123456789</li>
									</ul>
									<ul class="payment-method">
										<li><a title="Payment Method" href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/payment/payment-1.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/payment/payment-2.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/payment/payment-3.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/payment/payment-4.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/payment/payment-5.png" alt="Payment"></a></li>
									</ul>
								</div>
							</div>				
						</div>
					</div>
				</div>
			</div>		
			<!-- FOOTER BOTTOM -->
			<div class="footer-bottom wow fadeIn">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						Maxshop © 2017 - 2019. MAGENTECH Store. All Rights Reserved.				
						</div>
						<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
					</div>
				</div>
			</div>
		</footer>
		<!-- //end Footer Container -->
    </div>
	<!-- Social widgets -->
	<section class="social-widgets visible-lg">
		<ul class="items">
			<li class="item item-01 facebook"> <a href="php/facebook.php?account=envato" class="tab-icon"><span class="fa fa-facebook"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>FACEBOOK</h5>
					</div>
					<div class="loading">
						<img src="image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
					</div>
				</div>
			</li>
			<li class="item item-02 twitter"> <a href="php/twitter.php?account_twitter=envato" class="tab-icon"><span class="fa fa-twitter"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>TWITTER FEEDS</h5> 
					</div>
					<div class="loading">
						<img src="image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
					</div>
				</div>
			</li>
			<li class="item item-03 youtube"> <a href="php/youtubevideo.php?account_video=PY2RLgTmiZY" class="tab-icon"><span class="fa fa-youtube"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>YouTube</h5>
					</div>
					<div class="loading"> <img src="image/theme/lazy-loader.gif" class="ajaxloader" alt="loader"></div>
				</div>
			</li>
		</ul>
	</section>	<!-- End Social widgets -->
	
	<!-- Cpanel Block -->
	<div id="sp-cpanel_btn" class="isDown visible-lg">
		<i class="fa fa-cog fa-spin"></i>
	</div>		
	<div id="sp-cpanel" class="sp-delay">
		<h2 class="sp-cpanel-title"> Demo Options <span class="sp-cpanel-close"> <i class="fa fa-times"> </i></span></h2>
		<div id="sp-cpanel_settings">
			<div class="panel-group">
				<label>Color Scheme</label>
				<div class="group-schemes" >
					<a data-scheme="default" title="Orange"  data-toggle="tooltip" class="item_scheme selected"><span style="background: #ea3a3c;"></span></a>
					<a data-scheme="blue" title="Blue"  data-toggle="tooltip" class="item_scheme"><span style="background: #5f87d1;"></span></a>
					<a data-scheme="orange"  title="Orange"  data-toggle="tooltip" class="item_scheme"><span style="background: #F4A137;"></span></a>
					<a data-scheme="cyan" title="Cyan"  data-toggle="tooltip" class="item_scheme"><span style="background: #009688;"></span></a>
					<a data-scheme="green" title="Green" data-toggle="tooltip" class="item_scheme "><span style="background: #20bc5a;"></span></a>
					
				 </div>
			</div>
			
			<div class="panel-group ">
				<label>Header style</label>
				<div class="group-boxed">
					<select id="change_header_type" name="cpheaderstype" class="form-control" onchange="headerTypeChange(this.value);">
						<option value="header-home1" >Header 1</option>
						<option value="header-home2" >Header 2</option>
						<option value="header-home3" >Header 3</option>
						<option value="header-home4" >Header 4</option>
						<option value="header-home5" >Header 5</option>
						<option value="header-home6" >Header 6</option>
						<option value="header-home7" >Header 7</option>
						<option value="header-home8" >Header 8</option>
						<option value="header-home9" >Header 9</option>
						<option value="header-home10" >Header 10</option>
					</select>
				</div>
			</div>
			
			
			<div class="panel-group ">
				<label>Layout Box</label>
				<div class="group-boxed">
					<select id="cp-layoutbox" name="cplayoutbox" class="form-control" onchange="changeLayoutBox(this.value);">
						<option value="full">Wide</option>
						<option value="boxed">Boxed</option>
						<option value="iframed">Iframed</option>
						<option value="rounded">Rounded</option>
					</select>
				</div>
			</div>
			
			<div class="panel-group">
				<label>Body Image</label>
				
				<div class="group-pattern">
					<div data-pattern="28"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/28.png" alt="pattern 28"></div>
					<div data-pattern="29"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/29.png" alt="pattern 29"></div>
					<div data-pattern="30"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/30.png" alt="pattern 30"></div>
					<div data-pattern="31"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/31.png" alt="pattern 31"></div>
					<div data-pattern="32"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/32.png" alt="pattern 32"></div>
					<div data-pattern="33"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/33.png" alt="pattern 33"></div>
					<div data-pattern="34"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/34.png" alt="pattern 34"></div>
					<div data-pattern="35"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/35.png" alt="pattern 35"></div>
					<div data-pattern="36"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/36.png" alt="pattern 36"></div>
					<div data-pattern="37"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/37.png" alt="pattern 37"></div>
					<div data-pattern="38"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/38.png" alt="pattern 38"></div>
					<div data-pattern="39"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/39.png" alt="pattern 39"></div>
					<div data-pattern="40"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/40.png" alt="pattern 40"></div>
					<div data-pattern="41"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/41.png" alt="pattern 41"></div>
					<div data-pattern="42"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/42.png" alt="pattern 42"></div>
					<div data-pattern="43"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/43.png" alt="pattern 43"></div>
					<div data-pattern="44"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/44.png" alt="pattern 44"></div>
					<div data-pattern="45"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/patterns/45.png" alt="pattern 45"></div>
				</div>
				<p class="label-sm">Background only applies for Boxed,Framed, Rounded Layout</p>
			</div>
			
			<div class="reset-group">
				<a href="home2.html" class="btn btn-success " onclick="ResetAll()">Reset</a>
			</div>
			
		</div>
	</div>

	<link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />
	
	<!-- Preloading Screen -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	 </div>
	<!-- End Preloading Screen -->
	
	<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="js/themejs/libs.js"></script>
	<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>


	<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="js/themejs/application.js"></script>
	<script type="text/javascript" src="js/themejs/toppanel.js"></script>
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>	
	<script type="text/javascript" src="js/themejs/cpanel.js"></script>
</body>
</html>
    