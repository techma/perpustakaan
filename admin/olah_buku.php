<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>
<form name="form1" method="post" action="exe_buku.php">
<table width="476" border="0" align="center" cellpadding="0" cellspacing="1" class="tb_admin">
	<tr>
		<td height="20" colspan="2" align="center" bgcolor="#BFD0EA">
		<font size="4"><b>Pengelolaan Buku</b></font></td>
	</tr>
	<tr>
		<td colspan="2" align="center" valign="top"></td>
	</tr>
	<tr>
		<td width="11%" colspan="2" align="center">
			<select name="fm_nobuku" id="fm_nobuku">
			<?php
				include "../include/conecsi.inc";
			echo"<option value=not_jenis>------Tentukan Judul Buku-------</option>";
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
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">
		<input name="tb_edit" type="submit" id="tb_edit" value="Edit Buku"></td>
		<td align="center">
		<input name="tb_hapus" type="submit" id="tb_hapus" value="Hapus Buku"></td>
	</tr>
</table>
</form>
</body>
</html>