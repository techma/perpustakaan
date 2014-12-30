<!DOCTYPE html>
<?php
error_reporting(0);
$link=$_GET['link'];
include('cekadmin.php');
include("conecsi.php");
session_start();
?>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Best Oto</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>Admin</span></a>
				
				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Masukan Baru</li>
						<li><a class="ajax-link" href="index2.php?link=Bpenerbit"><i class="icon-home"></i><span class="hidden-tablet"> Penerbit</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Bpenulis"><i class="icon-file"></i><span class="hidden-tablet"> Penulis</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Banggota"><i class="icon-user"></i><span class="hidden-tablet"> Anggota</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Bjenis"><i class="icon-file"></i><span class="hidden-tablet"> Jenis Buku</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Bbuku"><i class="icon-user"></i><span class="hidden-tablet"> Buku</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Bdeskripsi"><i class="icon-user"></i><span class="hidden-tablet"> Deskripsi Buku</span></a></li>
						<li class="nav-header hidden-tablet">Pengelolaan Data</li>
						<li><a class="ajax-link" href="index2.php?link=Ppenerbit"><i class="icon-home"></i><span class="hidden-tablet"> Penerbit</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Ppenulis"><i class="icon-file"></i><span class="hidden-tablet"> Penulis</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Panggota"><i class="icon-user"></i><span class="hidden-tablet"> Anggota</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Pjenis"><i class="icon-file"></i><span class="hidden-tablet"> Jenis Buku</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Pbuku"><i class="icon-user"></i><span class="hidden-tablet"> Buku</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Pdeskripsi"><i class="icon-user"></i><span class="hidden-tablet"> Deskripsi Buku</span></a></li>
						<li class="nav-header hidden-tablet">Laporan</li>
						<li><a class="ajax-link" href="index2.php?link=Lpenerbit"><i class="icon-home"></i><span class="hidden-tablet"> Penerbit</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Lpenulis"><i class="icon-file"></i><span class="hidden-tablet"> Penulis</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Langgota"><i class="icon-user"></i><span class="hidden-tablet"> Anggota</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Ljenis"><i class="icon-file"></i><span class="hidden-tablet"> Jenis Buku</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Lbuku"><i class="icon-user"></i><span class="hidden-tablet"> Buku</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Ldeskripsi"><i class="icon-user"></i><span class="hidden-tablet"> Deskripsi Buku</span></a></li>
						<li class="nav-header hidden-tablet">All in One</li>
						<li><a class="ajax-link" href="index2.php?link=Lpenerbit"><i class="icon-home"></i><span class="hidden-tablet"> Penerbit</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Lpenulis"><i class="icon-file"></i><span class="hidden-tablet"> Penulis</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Langgota"><i class="icon-user"></i><span class="hidden-tablet"> Anggota</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Ljenis"><i class="icon-file"></i><span class="hidden-tablet"> Jenis Buku</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Lbuku"><i class="icon-user"></i><span class="hidden-tablet"> Buku</span></a></li>
						<li><a class="ajax-link" href="index2.php?link=Ldeskripsi"><i class="icon-user"></i><span class="hidden-tablet"> Deskripsi Buku</span></a></li>
						</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<?php
			if($link==''){include('home.php');} else
			if($link=='saldo'){include('saldo.php');} else
//Tambah baru
if($link=='Bpenerbit'){include('in_penerbit.html');} else
if($link=='Bpenulis'){include('in_penulis.html');} else
if($link=='Bdeskripsi'){include('in_deskbuku.php');} else
if($link=='Banggota'){include('in_anggota.html');} else
if($link=='Bbuku'){include('in_buku.php');} else
if($link=='Bjenis'){include('in_jenis.html');} else

//kelola
if($link=='Ppenerbit'){include('olah_penerbit.php');} else
if($link=='Ppenulis'){include('olah_penulis.php');} else
if($link=='Pdeskripsi'){include('olah_deskbuku.php');} else
if($link=='Panggota'){include('olah_anggota.php');} else
if($link=='Pbuku'){include('olah_buku.php');} else
if($link=='Pjenis'){include('olah_jenis.php');} else

//Laporan
if($link=='Lpenerbit'){include('lap_penerbit.php');} else
if($link=='Lpenulis'){include('lap_penulis.php');} else
if($link=='Ldeskripsi'){include('lap_deskbuku.php');} else
if($link=='Langgota'){include('lap_anggota.php');} else
if($link=='Lbuku'){include('lap_buku.php');} else
if($link=='Ljenis'){include('lap_jenis.php');} else

//All in One
if($link=='provinsi'){include('provinsi/provinsi.php');} else
if($link=='addprovinsi'){include('provinsi/addprovinsi.php');} else
if($link=='proaddprovinsi'){include('provinsi/proaddprovinsi.php');} else
if($link=='editprovinsi'){include('provinsi/editprovinsi.php');} else
if($link=='proeditprovinsi'){include('provinsi/proeditprovinsi.php');} else
if($link=='deleteprovinsi'){include('provinsi/deleteprovinsi.php');} else


//kota
if($link=='kota'){include('kota/kota.php');} else
if($link=='addkota'){include('kota/addkota.php');} else
if($link=='proaddkota'){include('kota/proaddkota.php');} else
if($link=='editkota'){include('kota/editkota.php');} else
if($link=='proeditkota'){include('kota/proeditkota.php');} else
if($link=='deletekota'){include('kota/deletekota.php');} else

//shop
if($link=='shop'){include('shop/shop.php');} else
if($link=='addshop'){include('shop/addshop.php');} else
if($link=='proaddshop'){include('shop/proaddshop.php');} else
if($link=='editshop'){include('shop/editshop.php');} else
if($link=='proeditshop'){include('shop/proeditshop.php');} else
if($link=='deleteshop'){include('shop/deleteshop.php');} else

//pinjam
if($link=='pinj'){include('pinj/pinj.php');} else
if($link=='propinj'){include('pinj/propinj.php');} else

//simpanan
if($link=='simpan'){include('simpan/simpan.php');} else
if($link=='wajib'){include('simpan/wajib.php');} else
if($link=='pokok'){include('simpan/pokok.php');} else
if($link=='pribadi'){include('simpan/pribadi.php');} else
if($link=='prosimpan'){include('simpan/prosimpan.php');} else

//simulasi
if($link=='sim'){include('sim/sim.php');} else
if($link=='prosim'){include('sim/prosim.php');} else

//tipe
if($link=='tipe'){include('tipe/tipe.php');} else
if($link=='addtipe'){include('tipe/addtipe.php');} else
if($link=='proaddtipe'){include('tipe/proaddtipe.php');} else
if($link=='edittipe'){include('tipe/edittipe.php');} else
if($link=='proedittipe'){include('tipe/proedittipe.php');} else
if($link=='deletetipe'){include('tipe/deletetipe.php');} else

//merk
if($link=='merk'){include('merk/merk.php');} else
if($link=='addmerk'){include('merk/addmerk.php');} else
if($link=='proaddmerk'){include('merk/proaddmerk.php');} else
if($link=='editmerk'){include('merk/editmerk.php');} else
if($link=='proeditmerk'){include('merk/proeditmerk.php');} else
if($link=='deletemerk'){include('merk/deletemerk.php');} else

//kategori
if($link=='kategori'){include('kategori/kategori.php');} else
if($link=='addkategori'){include('kategori/addkategori.php');} else
if($link=='proaddkategori'){include('kategori/proaddkategori.php');} else
if($link=='editkategori'){include('kategori/editkategori.php');} else
if($link=='proeditkategori'){include('kategori/proeditkategori.php');} else
if($link=='deletekategori'){include('kategori/deletekategori.php');} else

//merk
if($link=='kategori'){include('kategori/kategori.php');} else
if($link=='cetak_forum2'){include('forum/cetak_forum2.php');} else
if($link=='view_forum'){include('forum/view_forum.php');} else
if($link=='view_berita'){include('berita/view_berita.php');} else
if($link=='cetak_berita2'){include('berita/cetak_berita2.php');}
			?>
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>
<!--
		<footer>
			<p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012</p>
			<p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
		</footer>
	-->	
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="js/charisma.js"></script>
	
		
</body>
</html>
