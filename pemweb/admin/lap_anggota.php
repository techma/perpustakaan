<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000" class="tb_admin">
	<tr bgcolor="BFD0EA">
		<td height="20" colspan="3" align="center" font size="4"><b>Daftar Anggota</font></td>
	</tr>
	<tr>
		<td width="6%" align="left" bgcolor="#FFFFFF"><b>Kode</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>User Id</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Nama</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Sex</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Alamat</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Telepon</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Email</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Deskripsi</b></td>


	</tr>
	
	<?php
	include "../include/conecsi.inc";
	$minta="select*from anggota order by id_anggota";
	$eksekusi = mysql_query($minta);
	while ($hasil=mysql_fetch_array($eksekusi)){
	$i++
	?>
	
	<tr>
		<td width="8%" bgcolor="#FFFFFF">
			<?php echo "$hasil[id_anggota]";?>
		</td>
		<td width="16%" bgcolor="#FFFFFF">
			<?php echo "$hasil[user]";?>
		</td>	
		<td width="18%" bgcolor="#FFFFFF">
			<?php echo "$hasil[nama]";?>
		</td>
		<td width="44%" bgcolor="#FFFFFF">
			<?php echo "$hasil[sex]";?>
		</td>	
		<td width="44%" bgcolor="#FFFFFF">
			<?php echo "$hasil[alamat]";?>
		</td>	
		<td width="44%" bgcolor="#FFFFFF">
			<?php echo "$hasil[telp]";?>
		</td>	
		<td width="44%" bgcolor="#FFFFFF">
			<?php echo "$hasil[email]";?>
		</td>	
		<td width="44%" bgcolor="#FFFFFF">
			<?php echo "$hasil[deskripsi]";?>
		</td>			
	</tr>
	<?php } ?>
</table>
</body>
</html>