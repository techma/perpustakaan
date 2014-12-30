<?php

include "include/conecsi.inc";
$sql="SELECT B.no_buku, B.isbn, B.judul,
		B.thn_terbit, B.jml_buku, B.rak_buku, B.tgl_entry,
		P.penerbit, PN.penulis, J.jenis_buku,
		D.deskripsi, D.gambar, D.kondisi
		FROM buku B, penerbit P, penulis PN, jenis J, desk_buku D
		WHERE P.kd_penerbit=B.kd_penerbit
		AND PN.kd_penulis=B.kd_penulis
		AND B.kd_jenis=J.kd_jenis
		AND B.no_buku='$no_buku'
		AND B.no_buku=D.no_buku
		GROUP BY B.no_buku
		ORDER BY B.no_buku
";

if(!$hasil=mysql_query($sql)){
	echo mysql_error();
	return 0;
}

$ada_baris=mysql_num_rows($hasil);
if($ada_baris>=1){
	$minta=mysql_query($sql);
	while($hs=mysql_fetch_array($minta)){
		$isbn=$hs[isbn];
		$penulis=$hs[penulis];
		$penerbit=$hs[penerbit];
		$jenis=$hs[jenis_buku];
		$judul=$hs[judul];
		$thn_terbit=$hs[thn_terbit];
		$jml_buku=$hs[jml_buku];
		$rak_buku=$hs[rak_buku];
		$kondisi=$hs[kondisi];
		$gambar=$hs[gambar];
		$deskripsi=$hs[deskripsi];
	}
	

?>

<html>
<head>
<title>Detail Pencarian</title>
</head>

<body>

<table class=table_utama width="99%" border="0" cellpadding="0" cellspacing="2">
	<tr>
		<th class=td_headmenu width="166" scope="col">&nbsp;</th>
		<th class=td_headmenu width="807" scope="col">&nbsp;</th>
	</tr>
	<tr>
		<td align="center"><b><br>
		<img src="img_buku/<?php echo "$gambar";?>" width="143" height="157"><br>
		<br>
		</b>
		</td>
		
		<td align="left" valign="top"><br>
		<?php  echo "$deskripsi";?><br><br>
			<table class=table_utama width="75%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th class=td_headmenu width="198" scope="col">Judul</th>
					<th class=td_headmeni width="407" scope="col">Keterangan</th>
				</tr>
				<tr>
					<td>Isbn</td>
					<td><?php echo "$isbn";?></td>
				</tr>
				<tr>
					<td>Jenis</td>
					<td><?php echo "$jenis";?></td>
				</tr>
				<tr>
					<td>Judul</td>
					<td><?php echo "$judul";?></td>
				</tr>
				<tr>
					<td>Penulis</td>
					<td><?php echo "$penulis";?></td>
				</tr>
				<tr>
					<td>Penerbit</td>
					<td><?php echo "$penerbit";?></td>
				</tr>
				<tr>
					<td>Tahun Terbit</td>
					<td><?php echo "$thn_terbit";?></td>
				</tr>
				<tr>
					<td>Jumlah Buku</td>
					<td><?php echo "$jml_buku";?></td>
				</tr>
				<tr>
					<td>Rak Buku</td>
					<td><?php echo "$rak_buku";?></td>
				</tr>
				<tr>
					<td>Kondisi</td>
					<td><?php echo "$kondisi";?></td>
				</tr>
				</table>
		</td>
	</tr>
	</table>
	<br>
	<br>
</body>
</html>
<?php
}
else {
	echo "Tidak ada detail buku";
}
?>
