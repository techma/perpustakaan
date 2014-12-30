<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000" class="tb_admin">
	<tr bgcolor="BFD0EA">
		<td height="20" colspan="3" align="center" font size="4"><b>Daftar Deskripsi Buku</font></td>
	</tr>
	<tr>
		<td width="6%" align="left" bgcolor="#FFFFFF"><b>No</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>ISBN</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Judul</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Gambar</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Kondisi</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Deskripsi</b></td>

	</tr>
	
	<?php
	include "../include/conecsi.inc";
	$minta="select*from B.isbn,B.isbn,B.judul,D.gambar,D.kondisi,D.deskripsi
	from desk_buku D, buku B 
	where B.no_buku=D.no_buku
	group by B.no_buku
	order by B.no_buku";
	$eksekusi = mysql_query($minta);
	while ($hasil=mysql_fetch_array($eksekusi)){
	$i++
	?>
	
	<tr>
		<td align="left" bgcolor="#FFFFFF">
			<?php echo "$i";?>
		</td>
		<td width="8%" bgcolor="#FFFFFF">
			<?php echo "$hasil[isbn]";?>
		</td>
		<td width="16%" bgcolor="#FFFFFF">
			<?php echo "$hasil[judul]";?>
		</td>	
		<td width="11%" align="center" bgcolor="#FFFFFF">
			<img src="../img_buku/<?php echo "$hsl[gambar]";?>" width="75" height="62">
		</td>
		<td width="18%" bgcolor="#FFFFFF">
			<?php echo "$hasil[kondisi]";?>
		</td>
		<td width="44%" bgcolor="#FFFFFF">
			<?php echo "$hasil[deskripsi]";?>
		</td>		
	</tr>
	<?php } ?>
</table>
</body>
</html>