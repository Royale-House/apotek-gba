<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="UTF-8">
	

	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

	<title> Apotek Griya Bandung Asri </title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/smartadmin/css/dava.css">	

	<!-- Basic Styles -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/smartadmin/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/smartadmin/css/font-awesome.min.css">

	<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/smartadmin/css/smartadmin-production.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/smartadmin/css/smartadmin-skins.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/smartadmin/css/smartadmin-production-plugins.min.css">
	
	<!-- SmartAdmin RTL Support -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/smartadmin/css/smartadmin-rtl.min.css">
	<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

	<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/smartadmin/css/demo.min.css">-->

	<!-- FAVICONS -->
	<link rel="shortcut icon" href="<?=base_url()?>assets/smartadmin/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?=base_url()?>assets/smartadmin/img/favicon/favicon.ico" type="image/x-icon">

	<!-- GOOGLE FONT -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

	<!-- Specifying a Webpage Icon for Web Clip
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
	<link rel="apple-touch-icon" href="<?=base_url()?>assets/smartadmin/img/splash/sptouch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/smartadmin/img/splash/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?=base_url()?>assets/smartadmin/img/splash/touch-icon-iphone-retina.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?=base_url()?>assets/smartadmin/img/splash/touch-icon-ipad-retina.png">

	<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- Startup image for web apps -->
	<link rel="apple-touch-startup-image" href="<?=base_url()?>assets/smartadmin/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
	<link rel="apple-touch-startup-image" href="<?=base_url()?>assets/smartadmin/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
	<link rel="apple-touch-startup-image" href="<?=base_url()?>assets/smartadmin/img/splash/iphone.png" media="screen and (max-device-width: 320px)">
	
	<!-- Text Align -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/smartadmin/css/align.css">
	
	<!-- BredCrumb -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/smartadmin/css/bredcrumb.css">
	
	<!-- GoogleMap -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/smartadmin/css/map.css">
	
</head>

<!--

	TABLE OF CONTENTS.

	Use search to find needed section.

	===================================================================

	|  01. #CSS Links                |  all CSS links and file paths  |
	|  02. #FAVICONS                 |  Favicon links and file paths  |
	|  03. #GOOGLE FONT              |  Google font link              |
	|  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
	|  05. #BODY                     |  body tag                      |
	|  06. #HEADER                   |  header tag                    |
	|  07. #PROJECTS                 |  project lists                 |
	|  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
	|  09. #MOBILE                   |  mobile view dropdown          |
	|  10. #SEARCH                   |  search field                  |
	|  11. #NAVIGATION               |  left panel & navigation       |
	|  12. #RIGHT PANEL              |  right panel userlist          |
	|  13. #MAIN PANEL               |  main panel                    |
	|  14. #MAIN CONTENT             |  content holder                |
	|  15. #PAGE FOOTER              |  page footer                   |
	|  16. #SHORTCUT AREA            |  dropdown shortcuts area       |
	|  17. #PLUGINS                  |  all scripts and plugins       |

	===================================================================

	-->

<!-- #BODY -->
<!-- Possible Classes

		* 'smart-style-{SKIN#}'
		* 'smart-rtl'         - Switch theme mode to RTL
		* 'menu-on-top'       - Switch to top navigation (no DOM change required)
		* 'no-menu'			  - Hides the menu completely
		* 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
		* 'fixed-header'      - Fixes the header
		* 'fixed-navigation'  - Fixes the main menu
		* 'fixed-ribbon'      - Fixes breadcrumb
		* 'fixed-page-footer' - Fixes footer
		* 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
	-->
<body class="desktop-detected pace-done smart-style-3" id="editPadding">

<!-- HEADER -->
<header id="header">
<!-- collapse menu button -->
		<div id="logo-group">

						<!-- PLACE YOUR LOGO HERE -->
						<span id="logo"> <img src="<?php base_url(); ?>assets/smartadmin/img/logo-white.png" alt="SmartAdmin"> </span>
						<!-- END LOGO PLACEHOLDER -->

						<!-- Note: The activity badge color changes when clicked and resets the number to 0
						Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
						<span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

						<!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
						<div class="ajax-dropdown">

							<!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
							<div class="btn-group btn-group-justified" data-toggle="buttons">
								<label class="btn btn-default">
									<input type="radio" name="activity" id="<?php base_url(); ?>assets/smartadmin/ajax/notify/mail.php">
									Msgs (14) </label>
								<label class="btn btn-default">
									<input type="radio" name="activity" id="<?php base_url(); ?>assets/smartadmin/ajax/notify/notifications.php">
									notify (3) </label>
								<label class="btn btn-default">
									<input type="radio" name="activity" id="<?php base_url(); ?>assets/smartadmin/ajax/notify/tasks.php">
									Tasks (4) </label>
							</div>

							<!-- notification content -->
							<div class="ajax-notifications custom-scroll">

								<div class="alert alert-transparent">
									<h4>Click a button to show messages here</h4>
									This blank page message helps protect your privacy, or you can show the first message here automatically.
								</div>

								<i class="fa fa-lock fa-4x fa-border"></i>

							</div>
							<!-- end notification content -->

							<!-- footer: refresh area -->
							<span> Last updated on: 12/12/2013 9:43AM
								<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
									<i class="fa fa-refresh"></i>
								</button> </span>
							<!-- end footer -->

						</div>
						<!-- END AJAX-DROPDOWN -->
					</div>
		<div id="hide-menu" class="btn-header pull-right"  style="margin-top:0px;">
	
			<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
		<!-- #MOBILE -->
		<!-- Top menu profile link : this shows only when top menu is active -->
		<ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-1">
			<li class="">
				<a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
					<img src="<?=base_url()?>assets/smartadmin/img/avatars/sunny.png" alt="John Doe" class="online" />
				</a>
				<ul class="dropdown-menu pull-right">
					<li>
						<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
					</li>
				</ul>
			</li>
		</ul>

		<!-- logout button -->
		<div id="logout" class="btn-header transparent pull-right">
			<span> <a href="<?=base_url()?>Auth/logout" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
		</div>
		<!-- end logout button -->
		</div>
		<!-- end collapse menu -->
</header>

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as is --> 
					
					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="http://localhost/smartadmin/DEVELOPER/PHP_HTML_Version/img/avatars/sunny.png" alt="me" class="online"> 
						<span>
							Revian 
						</span>
						<i class="fa fa-angle-down"></i>
					</a> 
					
				</span>
			</div>
			<!-- end user info -->

			<!-- NAVIGATION : This navigation is also responsive

			To make this navigation dynamic please make sure to link the node
			(the reference to the nav > ul) after page load. Or the navigation
			will not initialize.
			-->
			<nav>
				<!-- NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional hre="" links. See documentation for details.
				-->
				<ul style="">
					<li class="open">
						<a href="#" title="Dashboard" class="active">
							<i class="fa fa-lg fa-fw fa-home"></i>
							<span class="menu-item-parent">Dashboard </span>
						</a>
					</li>
					<li><a href="#" title="SmartAdmin Intel">
						<i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i>
						<span class="menu-item-parent">Data Master</span>
						<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Data Suplier
								</a>
							</li>
							<li>
								<a href="#" title="App Settings">
									<i class="fa fa-lg fa-fw fa-cube"></i>Data Gudang 
								</a>
							</li>
							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Data Golongan Obat
								</a>
							</li>
							<li>
								<a href="#" title="App Settings">
									<i class="fa fa-lg fa-fw fa-cube"></i>Data Kategori Obat
								</a>
							</li>

							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Data Obat
								</a>
							</li>

							<li>
								<a href="#" title="App Settings">
									<i class="fa fa-lg fa-fw fa-cube"></i>Data Stok Gudang
								</a>
							</li>
							<li>
								<a href="#" title="App Settings">
									<i class="fa fa-lg fa-fw fa-cube"></i>Data Stok Etalase
								</a>
							</li>
						</ul>
					</li>
					<li><a href="#" title="SmartAdmin Intel">
						<i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i>
						<span class="menu-item-parent">Transaksi</span>
						<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Pembelian Obat
								</a>
							</li>
							<li>
								<a href="#" title="App Settings">
									<i class="fa fa-lg fa-fw fa-cube"></i>Retur Pembelian Obat 
								</a>
							</li>
							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Penjualan Obat
								</a>
							</li>
							<li>
								<a href="#" title="App Settings">
									<i class="fa fa-lg fa-fw fa-cube"></i>Retur Penjualan Obat
								</a>
							</li>

							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Mutasi
								</a>
							</li>
						</ul>
					</li>
					<li><a href="#" title="SmartAdmin Intel">
						<i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i>
						<span class="menu-item-parent">Utilitas Apotek</span>
						<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Cetak Barcode
								</a>
							</li>
							<li>
								<a href="#" title="App Settings">
									<i class="fa fa-lg fa-fw fa-cube"></i>Ubah Harga Jual 
								</a>
							</li>
							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Stock Opname
								</a>
							</li>
							<li>
								<a href="#" title="App Settings">
									<i class="fa fa-lg fa-fw fa-cube"></i>Pembayaran
								</a>
							</li>

							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Salinan Resep
								</a>
							</li>
						</ul>
					</li>

					<li><a href="#" title="SmartAdmin Intel">
						<i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i>
						<span class="menu-item-parent">Laporan</span>
						<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Data Gudang
								</a>
							</li>
							<li>
								<a href="#" title="App Settings">
									<i class="fa fa-lg fa-fw fa-cube"></i>Data Suplier 
								</a>
							</li>
							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Stok Obat Gudang
								</a>
							</li>
							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Stok Obat Etalase
								</a>
							</li>
							<li>
								<a href="#" title="App Settings">
									<i class="fa fa-lg fa-fw fa-cube"></i>Mutasi Obat
								</a>
							</li>
							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Perubahan Obat
								</a>
							</li>
							<li>
								<a href="#" title="App Settings">
									<i class="fa fa-lg fa-fw fa-cube"></i>Obat Expired
								</a>
							</li>
							<li>
								<a href="#" title="App Layouts">
									<i class="fa fa-lg fa-fw fa-gear"></i>Obat Laku
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
			<span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

		</aside>



