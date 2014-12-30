<html>
<head><title>Perpustakaan Online</title>
<link href="css/model.css" rel = "stylesheet" type="text/css" />
<link rel="stylesheet" href="css/animated-menu.css"/>
<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
<link href="css/generic.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<table class="tabel"> 
	<tr> 
    <td class="logo"><img src="img/logo-uns.png" height="90px" width="90" /> </td>
	<td class="header">PERPUSTAKAAN ONLINE FMIPA </td> 
  	<td class="header2"> UNIVERSITAS SEBELAS MARET SURAKARTA </TD>
    
    <td class="menu2">
    <ul>
		<li class="blue">
			<p style="margin-left:0px"><a href="?page=main">Beranda</a></p>
		</li>
		<li class="blue">
			<p style="margin-left:0px"><a href="?page=profil">Profil</a></p>
		</li>
		<li class="blue">
			<p style="margin-left:0px"><a href="?page=prosedural">Bantuan Progam</a></p>
		</li>

        <li class="blue">
			<p style="margin-left:0px"><a href="?page=infobuku">Buku Baru</a></p>
		</li>
        <li class="blue">
			<p style="margin-left:0px"><a href="?page=koleksibuku">Koleksi Buku</a></p>
		</li>
        <li class="blue">
			<p style="margin-left:0px"><a href="?page=login">Login</a></p>
		</li>
	</ul>
    </td>
  	</tr> 
</table>
	
		<table>	
		<tr>
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