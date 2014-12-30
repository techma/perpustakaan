<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>
<form name="form1" method="post" action="exe_deskbuku.php" enctype="multipart/form-data">
<input type='hidden' name="max_file_size" value='1024'>
<table width="425" border="0" align="center" cellpadding="0" cellspacing="2" class="tb_admin">
	<tr bgcolor="#BFD0EA">
		<td height="23" colspan="3"><b>Masukkan Data Deskripsi Buku</b></td>
	</tr>
	<tr>
		<td width="25%" align="right">Judul Buku</td>
		<td width="2%"><b>:</b></td>
		<td width="73%"><select name="fm_judul" type="text" id="fm_judul">
		<?php
			include "../include/conecsi.inc";
			echo"<option value=not_jenis>------Jenis Judul Buku--------</option>";
			echo "<option value=not_jenis>------------------------</option>";
			$minta="select no_buku,judul from buku order by no_buku";
			$eksekusi=mysql_query($minta);
			while($hasil=mysql_fetch_array($eksekusi)){
				echo "<option value=$hasil[no_buku]$hasil[judul]</option>";
			}
		?>
		</select>
		</td>
	</tr>
	<tr>
		<td align="right">Deskripsi</td>
		<td><b>:</b></td>
		<td><textarea name="fm_deskripsi" cols="35" rows="10" id="fm_deskripsi"></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input name="tb_simpan" type="submit" id="tb_simpan" value="Simpan"></td>
	</tr>
</table>
</form>
</body>
</html>