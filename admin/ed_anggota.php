<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>
<?php
	if(!empty($fm_idanggota)){
		include "../include/conecsi.inc";
		$minta="select*from anggota where id_anggota='$fm_idanggota' order by id_anggota";
		$eksekusi =mysql_query($minta);
		while($hasil=mysql_fetch_array($eksekusi)){
			$id_anggota=$hasil[id_anggota];
			$user=$hasil[user];
			$password=$hasi[password];
			$nama=$hasil[nama];
			$sex=$hasi[sex];
			$telp=$hasil[telp];
			$alamat=$hasi[alamat];
			$deskripsi=$hasi[deskripsi];
		}

?>



<form name="form1" method="post" action="exe_anggota.php">
<table width="425" border="0" align="center" cellpadding="0" cellspacing="2" class="tb_admin">
	<tr bgcolor="#BFD0EA">
		<td height="21" colspan="3"><b>Update Data Anggota</b></td>
	</tr>
	<tr>
		<td width="23%" align="center">User Id</td>
		<td width="2%"><b>:</b></td>
		<td width="74%">
			<input name="fm_user" type="text" id="fm_user" value="<?php echo "$user"; ?>" size="6" maxlength="5">
			<input name="hd_idanggota" type="hidden" id="hd_idanggota" value="<?php echo "$id_anggota"; ?>">
		</td>
	</tr>
	<tr>
		<td align="right">Nama</td>
		<td><b>:</b></td>
		<td><input name="fm_nama" type="text" id="fm_nama" value="<?php echo "$nama"; ?>" size="35" maxlength="35"></td>
		<td><input name="fm_password" type="hidden" id="fm_password" value="<?php echo "$password"; ?>" size="35" maxlength="35"></td>

	</tr>
	<tr>
		<td align="right">Sex</td>
		<td><b>:</b></td>
		<td><select name="fm_sex" id="fm_sex">
			<option value="not_kelamin">----------Jenis Kelamin</option>
			<option value="P">Pria</option>
			<option value="W">Wanita</option>
			</select></td>
	</tr>
	<tr>
		<td align="right">No Telpon</td>
		<td><b>:</b></td>
		<td><input name="fm_telp" type="text" id="fm_telp" value="<?php echo "$telp"; ?>" size="35" maxlength="25"></td>
	</tr>
	<tr>
		<td align="right">Email</td>
		<td><b>:</b></td>
		<td><input name="fm_email" type="text" id="fm_email5" value="<?php echo "$email"; ?>" size="35" maxlength="40"></td>
	</tr>
	<tr>
		<td align="right">Alamat</td>
		<td><b>:</b></td>
		<td><textarea name="fm_alamat" type="text" id="textarea5"><?php echo "$alamat"; ?></textarea></td>
	</tr>
		<tr>
		<td align="right">Keterangan</td>
		<td><b>:</b></td>
		<td><textarea name="fm_deskripsi" id="textarea4"><?php echo"$deskripsi"?></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input name="tb_update" type="submit" id="tb_update3" value="Update"></td>

	</tr>
</table>
</form>

<?php
}
else {
include "olah_anggota.php";
}
?>
</body>
</html>