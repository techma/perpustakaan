<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>
<?php
	if(!empty($fm_kdpenerbit)){
		include "../include/conecsi.inc";
		$minta="select*from penerbit where kd_penerbit='$fm_kdpenerbit' order by kd_penerbit";
		$eksekusi =mysql_query($minta);
		while($hasil=mysql_fetch_array($eksekusi)){
			$kd_penerbit=$hasil[kd_penerbit];
			$penerbit=$hasil[penerbit];
			$email=$hasil[email];
			$telp=$hasil[telp];
			$alamat=$hasil[alamat];
			$deskripsi=$hasi[deskripsi];
		}

?>



<form name="form1" method="post" action="exe_penerbit.php">
<table width="425" border="0" align="center" cellpadding="0" cellspacing="2" class="tb_admin">
	<tr bgcolor="#BFD0EA">
		<td height="21" colspan="3"><b>Update Data Penerbit</b></td>
	</tr>
	<tr>
		<td width="24%" align="center">Kode Penerbit</td>
		<td width="2%"><b>:</b></td>
		<td width="74%">
			<input name="fm_kdpenerbit" type="text" id="kd_penerbit" value="<?php echo "$kd_penerbit"; ?>" size="6" maxlength="5">
			<input name="hd_kdpenerbit" type="hidden" id="hd_penerbit" value="<?php echo "$kd_penerbit"; ?>">
		</td>
	</tr>
	<tr>
		<td align="right">Nama Penerbit</td>
		<td><b>:</b></td>
		<td><input name="fm_penerbit" type="text" id="fm_penerbit" value="<?php echo "$kd_penerbit"; ?>" size="35" maxlength="35"></td>
	</tr>
	<tr>
		<td align="right">No Telpon</td>
		<td><b>:</b></td>
		<td><input name="fm_telp" type="text" id="fm_telp" value="<?php echo "$telp"; ?>" size="35" maxlength="25"></td>
	</tr>
	<tr>
		<td align="right">Email</td>
		<td><b>:</b></td>
		<td><input name="fm_email" type="text" id="fm_email" value="<?php echo "$email"; ?>" size="35" maxlength="40"></td>
	</tr>
	<tr>
		<td align="right">Alamat</td>
		<td><b>:</b></td>
		<td><textarea name="fm_alamat" type="text" id="fm_alamat" value="<?php echo "$alamat"; ?>"></textarea></td>
	</tr>
		<tr>
		<td align="right">Keterangan</td>
		<td><b>:</b></td>
		<td><textarea name="fm_deskripsi" type="text" id="fm_deskripsi" value="<?php echo "$deskripsi"; ?>"></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input name="tb_update" type="submit" id="tb_update2" value="Update"></td>

	</tr>
</table>
</form>

<?php
}
else {
include "olah_penerbit.php";
}
?>
</body>
</html>