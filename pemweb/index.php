<?php
error_reporting(0);
$act=$_GET['act'];

?>
<html>
<head>
	<title>Perpustakaan Online</title>
	<link rel="stylesheet" type="text/css" href="tpl/style_utama.css">
	<link href="css/styleing.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<marquee><title>PERPUSTAKAAN FMIPA UNS</title></marquee>
	<link href="css/model.css" rel = "stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/animated-menu.css"/>
	<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
	<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
	<link href="css/generic.css" rel="stylesheet" type="text/css" />
	

</head>
<body class="background">
<div class="welcome" align="center"></div>
	<table class="tabel">
		<tr>
			<td align="center" colspan="3"><strong><font size="+2">PERPUSTAKAAN ONLINE</font></strong><BR/>
			<align="center" colspan="3"><strong><font size="+2">FMIPA UNIVERSITAS SEBELAS MARET</font></strong></td>
		</tr>
		<tr>
			<td width="140">&nbsp;</td>
			<td width="618">&nbsp;</td>
		</tr>
		
		<tr>
			<td align="center" valign="top" class="td_menu"><br>
			<table class="table_utama" width="98%" border="0" cellspacing="2" cellpadding="0">
				<tr>
					<td align="center" class="td_headmenu"><strong>Menu Utama</strong></td>
				</tr>
				<tr>
					<td height="20">&raquo; <a href="?">Home</a></td>
				</tr>
				<tr>
					<td height="20">&raquo; <a href="?act=login">Login</a></td>
				</tr>
				<tr>
					<td height="20">&raquo; <a href="index.php?act=profil">Profil</a></td>
				</tr>
				<tr>
					<td height="20">&raquo; <a href="?act=bantuan">Bantuan Progam</a></td>
				</tr>
			</table>
			</td>
			<?php
			
			if($act=='login'){echo "<script>alert ('Mohon Tunggu')</script>
<script>window.location ='admin/index.php'</script>";}
//	if($act=='login'){include('admin/index.php');} ?>
			<td align="center" valign="top" class="isi">
			<br>
			
				<?php
				//menu yang digunakan untuk membuka halaman progam
				include "form_cari.html";
				include "buka_halaman.php";
				?>
			</td>
		</tr>
	</table>
</body>
</html>