<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>
<?php
	if(!empty($fm_kdpenerbit)){
		include "../include/conecsi.inc";
		$minta="select*from jenis where kd_jenis='$fm_kdjenis' order by kd_jenis";
		$eksekusi =mysql_query($minta);
		while($hasil=mysql_fetch_array($eksekusi)){
			$kd_jenis=$hasil[kd_jenis];
			$jenis_buku=$hasil[jenis_buku];
			$deskripsi=$hasi[deskripsi];
		}

?>



<form name="form1" method="post" action="exe_jenis.php">
<table width="425" border="0" align="center" cellpadding="0" cellspacing="2" class="tb_admin">
	<tr bgcolor="#BFD0EA">
		<td height="21" colspan="3"><b>Update Data Jenis Buku</b></td>
	</tr>
	<tr>
		<td width="24%" align="center">Kode</td>
		<td width="2%"><b>:</b></td>
		<td width="74%">
			<input name="fm_kdjenis" type="text" id="kd_jenis" value="<?php echo "$kd_jenis"; ?>" size="6" maxlength="5">
			<input name="hd_kdjenis" type="hidden" id="hd_jenis" value="<?php echo "$kd_jenis"; ?>">
		</td>
	</tr>
	<tr>
		<td align="right">Jenis Buku</td>
		<td><b>:</b></td>
		<td><input name="fm_jenis" type="text" id="fm_jenis" value="<?php echo "$jenis_buku"; ?>" size="35" maxlength="35"></td>
	</tr>
	<tr>
		<td align="right">Keterangan</td>
		<td><b>:</b></td>
		<td><textarea name="fm_deskripsi" type="text" id="fm_deskripsi" value="<?php echo "$deskripsi"; ?>"></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input name="tb_update" type="submit" id="tb_update" value="Update"></td>

	</tr>
</table>
</form>

<?php
}
else {
include "olah_jenis.php";
}
?>
</body>
</html>