<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000" class="tb_admin">
	<tr bgcolor="BFD0EA">
		<td height="20" colspan="3" align="center" font size="4"><b>Daftar Buku</font></td>
	</tr>
	<tr>
		<td width="6%" align="left" bgcolor="#FFFFFF"><b>Kode</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>ISBN</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Judul</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Jenis</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Penulis</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Penerbit</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Jumlah</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Rak</b></td>

	</tr>
	
	<?php
	include "../include/conecsi.inc";
	$minta="select*from B.no_buku,B.isbn,B.judul,B.jml_buku,B.rak_buku,J.jenis_buku,PS.penulis,P.penerbit from
	buku B,penulis PS,jenis J, penerbit P 
	where (B.kd_jenis=J.kd_jenis
	and B.kd_penulis=PS.kd_penulis
	and B.kd_penerbit=P.kd_penerbit)
	group by B.no_buku
	order by B.no_buku";
	$eksekusi = mysql_query($minta);
	while ($hasil=mysql_fetch_array($eksekusi)){
	
	?>
	
	<tr>
		<td align="left" bgcolor="#FFFFFF">
			<?php echo "$hasil[no_buku]";?>
		</td>
		<td width="15%" bgcolor="#FFFFFF">
			<?php echo "$hasil[isbn]";?>
		</td>
		<td width="23%" bgcolor="#FFFFFF">
			<?php echo "$hasil[judul]";?>
		</td>	
		<td width="23%" bgcolor="#FFFFFF">
			<?php echo "$hasil[jenis_buku]";?>
		</td>
		<td width="23%" bgcolor="#FFFFFF">
			<?php echo "$hasil[penulis]";?>
		</td>
		<td width="23%" bgcolor="#FFFFFF">
			<?php echo "$hasil[penerbit]";?>
		</td>
		<td width="23%" bgcolor="#FFFFFF">
			<?php echo "$hasil[jml_buku]";?>
		</td>
		<td width="23%" bgcolor="#FFFFFF">
			<?php echo "$hasil[rak_buku]";?>
		</td>		
	</tr>
	<?php } ?>
</table>
</body>
</html>