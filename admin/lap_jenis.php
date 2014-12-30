<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000" class="tb_admin">
	<tr bgcolor="BFD0EA">
		<td height="20" colspan="3" align="center" font size="4"><b>Daftar Jenis</font></td>
	</tr>
	<tr>
		<td width="6%" align="left" bgcolor="#FFFFFF"><b>Kode</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Jenis Buku</b></td>
		<td align="left" bgcolor="#FFFFFF"><b>Deskripsi</b></td>
	</tr>
	
	<?php
	include "../include/conecsi.inc";
	$minta="select*from jenis order by kd_jenis ";
	$eksekusi = mysql_query($minta);
	while ($hasil=mysql_fetch_array($eksekusi)){
	
	?>
	
	<tr>
		<td align="left" bgcolor="#FFFFFF">
			<?php echo "$hasil[kd_jenis]";?>
		</td>
		<td width="15%" bgcolor="#FFFFFF">
			<?php echo "$hasil[jenis_buku]";?>
		</td>
		<td width="23%" bgcolor="#FFFFFF">
			<?php echo "$hasil[deskripsi]";?>
		</td>		
	</tr>
	<?php } ?>
</table>
</body>
</html>