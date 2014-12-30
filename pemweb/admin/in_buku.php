<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>
<form name="form1" method="post" action="exe_buku.php">
<table width="425" border="0" align="center" cellpadding="0" cellspacing="2" class="tb_admin">
	<tr bgcolor="BFD0EA">
		<td height="23" colspan="3"><b>Masukkan Data Buku</b></td>
	</tr>
	<tr>
		<td width="27%" align="right">ISBN</td>
		<td width="3%"><b>:</b></td>
		<td width="70%"><input name="fm_isbn" type="text" id="fm_isbn" size="35" maxlength="15"></td>
	</tr>
	<tr>
		<td align="right">Judul Buku</td>
		<td><b>:</b></td>
		<td><input name="fm_judul" type="text" id="fm_nama2" size="35" maxlength="50"></td>
	</tr>
	<tr>
		<td align="right">Jenis Buku</td>
		<td><b>:</b></td>
		<td><select name="fm_jenis" id="fm_jenis">
		<?php
			include "../include/conecsi.inc";
			echo"<option value=not_jenis>------Jenis Buku--------</option>";
			echo "<option value=not_jenis>------------------------</option>";
			$minta="select kd_jenis,jenis_buku from jenis order by kd_jenis";
			$eksekusi=mysql_query($minta);
			while($hasil=mysql_fetch_array($eksekusi)){
				echo "<option value=$hasil[kd_jenis]$hasil[jenis_buku]</option>";
			}
		?>
		
		</select></td>
		</tr>
		<tr>
			<td height="24" align="right">Penulis</td>
			<td><b>:</b></td>
			<td><select name="fm_penulis" id="fm_penulis">
			<?php
				echo "<option value=not_penulis>--Nama Penulis--</option>";
				echo "<option value=not_penulis>----------------</option>";
				$minta ="select kd_penulis,penulis from penulis order by kd_penulis";
				$eksekusi = mysql_query($minta);
				while ($hasil=mysql_fetch_array($eksekusi)){
				
					echo "<option value=$hasil[kd_penulis]>$hasil[penulis]</option>";
				}
			?>
			</select>
			</td>
		</tr>
		<tr>
			<td align="right">Penerbit</td>
			<td><b>:</b></td>
			<td><select name="fm_penerbit" id="fm_penerbit">
			<?php
			echo "<option value=not_penerbit>--------Nama Penerbit-------</optiom>";
			echo "<option value=not_penerbit>-----------------------------</option>";
			$minta ="select kd_penerbit,penerbit from penerbit order by kd_penerbit";
			$eksekusi = mysql_query ($minta);
			while ($hasil=mysql_fetch_array($eksekusi)){
				
					echo "<option value=$hasil[kd_penerbit]>$hasil[penerbit]</option>";
				}
			?>
			</select>
			</td>
		</tr>
		<tr>
			<td align="right">Tahun Terbit</td>
			<td><b>:</b></td>
			<td><select name="fm_tahun" id="fm_tahun">
			<?php
				$thn_sekarang=date('Y');
				if(empty($thn_terbit)){
					echo "<option value=not_tahun>--Tahun--</option>";
					echo "<option value=not_tahun>----------</option>";
				}
				else 
				$thn_sekarang=date('Y');
				for($tahun=1950; $tahun<=$thn_sekarang; $tahun++)
					echo "<option value=$tahun_ingris>$tahun</option>";
			?>
			</select>
			</td>
		</tr>
		<tr>
			<td align="right">Jumlah Buku</td>
			<td><b>:</b></td>
			<td><input name="fm_jmlbuku" type="text" id="fm_jmlbuku" size="10" maxlength="5"></td>
		</tr>
		<tr>
			<td align="right">Rak Buku</td>
			<td><b>:</b></td>
			<td><input name="fm_rakbuku" type="text" id="fm_rakbuku" size="10" maxlength="10"></td>
		</tr>
		<tr>
		<td></td>
		<td></td>
		<td><input name="sb_simpan" type="submit" id="tb_simpan" value="Simpan" ></td>
		</tr>
</table>

</form>
</body>
</html>