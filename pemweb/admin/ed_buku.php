<html>
<head><title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../tpl/style_admin.css">
</head>

<body>
<?php
	if(!empty($fm_nobuku)){
		include "../include/conecsi.inc";
		$minta="select*from buku where nobuku='$fm_nobuku' order by nobuku";
		$eksekusi =mysql_query($minta);
		while($hasil=mysql_fetch_array($eksekusi)){
			$no_buku=$hasil[no_buku];
			$isbn=$hasil[isbn];
			$judul=$hasil[judul];
			$jenis=$hasil[jenis];
			$penulis=$hasil[penulis];
			$penerbit=$hasi[penerbit];
			$tahun=$hasil[tahun];
			$jml_buku=$hasil[jml_buku];
			$rak_buku=$hasi[rak_buku];
		}

?>



<form name="form1" method="post" action="exe_buku.php">
<table width="425" border="0" align="center" cellpadding="0" cellspacing="2" class="tb_admin">
	<tr bgcolor="#BFD0EA">
		<td height="21" colspan="3"><b>Masukkan Data Buku</b></td>
	</tr>
	<tr>
		<td width="24%" align="center">ISBN</td>
		<td width="2%"><b>:</b></td>
		<td width="74%">
			<input name="fm_isbn" type="text" id="kd_isbn" value="<?php echo "$isbn"; ?>" size="6" maxlength="5">
			<input name="fm_nobuku" type="hidden" id="fm_nobuku" value="<?php echo "$nobuku"; ?>">
		</td>
	</tr>
	<tr>
		<td align="right">Judul Buku</td>
		<td><b>:</b></td>
		<td><input name="fm_judul" type="text" id="fm_nama2" value="<?php echo "$judul"; ?>" size="35" maxlength="35"></td>
	</tr>
	<tr>
		<td align="right">Jenis Buku</td>
		<td><b>:</b></td>
		<td>
			<select name="fm_jenis" id="fm_jenis">
			<?php
				include "../include/conecsi.inc";
			echo"<option value=not_jenis>------Jenis Buku-------</option>";
			echo "<option value=not_jenis>------------------------</option>";
			$minta="select kd_jenis,jenis_buku from jenis order by kd_jenis";
			$eksekusi=mysql_query($minta);
			while($hasil=mysql_fetch_array($eksekusi)){
				echo "<option value=$hasil[kd_jenis]$hasil[jenis_buku]</option>";
			}
			?>
			</select>
		</td>
	</tr>
	<tr>
		<td align="right">Penulis</td>
		<td><b>:</b></td>
		<td><select name="fm_penulis" id="fm_penulis">
			<?php
				include "../include/conecsi.inc";
			echo"<option value=not_jenis>------Nama Penulis-------</option>";
			echo "<option value=not_jenis>------------------------</option>";
			$minta="select kd_penulis,penulis from penulis order by kd_penulis";
			$eksekusi=mysql_query($minta);
			while($hasil=mysql_fetch_array($eksekusi)){
				echo "<option value=$hasil[kd_penulis]$hasil[penulis]</option>";
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
				include "../include/conecsi.inc";
			echo"<option value=not_jenis>------Nama Penerbit-------</option>";
			echo "<option value=not_jenis>------------------------</option>";
			$minta="select kd_penerbit,penerbit from penerbit order by kd_penerbit";
			$eksekusi=mysql_query($minta);
			while($hasil=mysql_fetch_array($eksekusi)){
				echo "<option value=$hasil[kd_penerbit]$hasil[penerbit]</option>";
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
				echo "<option value=not_tahun>-----Tahun-----</option> ";
				echo "<option value=not_tahun>---------------</option> ";
			} else 
			$thn_sekarang=date('Y');
			for($tahun=1950; $tahun<=$thn_sekarang; $tahun++)
				echo "<option value=$tahun>$tahun</option>";
				?>			
			</select>
		</td>
	</tr>
	<tr>
		<td align="right">Jumlah Buku</td>
		<td><b>:</b></td>
		<td><input name="fm_jmlbuku" type="text" id="fm_jmlbuku" value="<?php echo "$jmlbuku"; ?>"></td>
	</tr>
	<tr>
		<td align="right">Rak Buku</td>
		<td><b>:</b></td>
		<td><input name="fm_rakbuku" type="text" id="fm_rakbuku" value="<?php echo "$rakbuku"; ?>"></td>
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
include "olah_buku.php";
}
?>
</body>
</html>