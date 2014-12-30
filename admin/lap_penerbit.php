<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000" class="tb_admin">
	<tr bgcolor="BFD0EA">
		<td height="20" colspan="6" align="center" font size="4"><b>Daftar Penerbit</font></td>
	</tr>
	<tr>
		<td width="6%" align="left" bgcolor="#FFFFFF"><b>Kode</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Nama</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Alamat</b></td>
		<td align="left" bgcolor="#FFFFFF"><strong>No Telp</strong></td>
		<td align="left" bgcolor="#FFFFFF"><b>Email</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Deskripsi</b></td>
	</tr>
	
	<?php
	include "../include/conecsi.inc";
	$minta="select*from penerbit order by kd_penerbit ";
	$eksekusi = mysql_query($minta);
	while ($hasil=mysql_fetch_array($eksekusi)){
	
	?>
	
	<tr>
		<td align="left" bgcolor="#FFFFFF">
			<?php echo "$hasil[kd_penerbit]";?>
		</td>
		<td width="12%" bgcolor="#FFFFFF">
			<?php echo "$hasil[penerbit]";?>
		</td>
		<td width="19%" bgcolor="#FFFFFF">
			<?php echo "$hasil[alamat]";?>
		</td>
		<td width="12%" bgcolor="#FFFFFF">
			<?php echo "$hasil[telp]";?>
		</td>
		<td width="12%" bgcolor="#FFFFFF">
			<?php echo "$hasil[email]";?>
		</td>
		<td width="12%" bgcolor="#FFFFFF">
			<?php echo "$hasil[deskripsi]";?>
		</td>
		
	</tr>
	<?php } ?>
</table>
</body>
</html>