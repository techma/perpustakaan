<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>



<form name="form1" method="post" action="exe_penulis.php">
<table width="476" border="0" align="center" cellpadding="0" cellspacing="1" class="tb_admin">
	<tr>
		<td height="20" colspan="2" align="center" bgcolor="#BFD0EA"><font size="4"><b>Pengelolaan Penulis</b></font></td>
	</tr>
	<tr>
		<td colspan="2" align="center" valign="top"></td>
	</tr>
	<tr>
		<td width="11%" colspan="2" align="center">
		<select name="fm_kdpenulis" id="fm_kdpenulis">
			<?php
				include "../include/conecsi.inc";
			echo"<option value=not_penulis>------Tentukan Nama Penulis-------</option>";
			echo "<option value=not_penulis>------------------------</option>";
			$minta="select*from penulis order by kd_penerbit";
			$eksekusi=mysql_query($minta);
			while($hasil=mysql_fetch_array($eksekusi)){
				echo "<option value=$hasil[kd_penulis]$hasil[penulis]</option>";
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
		<input name="tb_edit" type="submit" id="tb_edit" value="Edit Penulis"></td>
		<td align="center">
		<input name="tb_hapus" type="submit" id="tb_hapus" value="Hapus Penulis"></td>
	</tr>
	
	
</table>
</form>
</body>
</html>