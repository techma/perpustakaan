<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>
<?php
	if(!empty($fm_nodesk)){
		include "../include/conecsi.inc";
		$minta="select*from desk_buku where no_desk='$fm_nodesk' order by no_desk";
		$eksekusi =mysql_query($minta);
		while($hasil=mysql_fetch_array($eksekusi)){
			$kondisi=$hasil[kondisi];
			$deskripsi=$hasil[deskripsi];
		}

?>



<form name="form1" method="post" enctype="multipart-formdata" action="exe_deskbuku.php">
<input type='hidden'  name="max_file_size" value="1024">
<table width="425" border="0" align="center" cellpadding="0" cellspacing="2" class="tb_admin">
	<tr bgcolor="#BFD0EA">
		<td height="21" colspan="3"><b>Update Deskripsi Buku</b></td>
	</tr>
	<tr>
		<td width="24%" align="center">Judul Buku</td>
		<td width="2%"><b>:</b></td>
		<td width="74%">
			<select name="fm_judul" type="text" id="fm_judul">
			<?php
				include "../include/conecsi.inc";
			echo"<option value=not_judul>------Jenis Judul Buku-------</option>";
			echo "<option value=not_judul>------------------------</option>";
			$minta="select no_buku,judul from buku order by no_buku";
			$eksekusi=mysql_query($minta);
			while($hasil=mysql_fetch_array($eksekusi)){
				echo "<option value=$hasil[no_buku]$hasil[judul]</option>";
			}
			?>
			</select>
			<input name="fm_nodesk" type="hidden" id="fm_nodesk" value="<?php echo "$fm_nodesk"; ?>">
		</td>
	</tr>
	<tr>
		<td align="right">Gambar</td>
		<td><b>:</b></td>
		<td><input name="namafile" type="file" id="namafile" size="30" maxlength="50"></td>
	</tr>
	<tr>
		<td align="right">Kondisi Buku</td>
		<td><b>:</b></td>
		<td><input name="fm_kondisi" type="text" id="fm_kondisi" value="<?php echo "$kondisi"; ?>" size="25" maxlength="25"></td>
	</tr>
	<tr>
		<td align="right">Keterangan</td>
		<td><b>:</b></td>
		<td><textarea name="fm_deskripsi" type="text" id="fm_deskripsi" value="<?php echo "$deskripsi"; ?>"></textarea></td>
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
include "olah_deskbuku.php";
}
?>
</body>
</html>