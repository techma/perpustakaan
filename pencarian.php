<?php
error_reporting(0);
$pilihan=$_POST['pilihan'];
$data_cari=$_POST['data_cari'];
$cari=$_POST['cari'];
include('include/connect.php');




if(isset($cari)){
	if(empty($data_cari)){
		echo "Tentukan data yang ingin dicari";
	}
		else if($pilihan=='not_pilihan'){
		echo "Tentukan option yang ingin dicari";
		}

		else if($pilihan=='penulis'){
		$sql="SELECT B.no_buku,B.isbn,B.judul,
		B.thn_terbit,B.jml_buku,B.rak_buku,B.tgl_entry,
		P.penerbit,PN.penulis,J.jenis_buku
		FROM buku B, penerbit P,penulis PN,jenis J 
		WHERE P.kd_penerbit=B.kd_penerbit
		AND PN.kd_penulis=B.kd_penulis
		AND B.kd_jenis=J.kd_jenis
		AND PN.penulis LIKE '%$data_cari%'
		GROUP BY B.no_buku
		ORDER BY B.no_buku
		";
		}

		else if($pilihan=='judul'){
		$sql= "SELECT B.no_buku,B.isbn,B.judul,
		B.thn_terbit,B.jml_buku,B.rak_buku,B.tgl_entry,
		P.penerbit,PN.penulis,J.jenis_buku
		FROM buku B, penerbit P,penulis PN,jenis J 
		WHERE P.kd_penerbit=B.kd_penerbit
		AND PN.kd_penulis=B.kd_penulis
		AND B.kd_jenis=J.kd_jenis
		AND B.judul LIKE '%$data_cari%'
		GROUP BY B.no_buku
		ORDER BY B.no_buku
		";
		}

		else{
		echo "nggak ada query";
		}

if(!empty($sql)){
include"include/conecsi.inc";
echo "<table class=table_utama width=99%>
		<tr>
			<td class=td_headmenu>Jenis Buku</td>
			<td class=td_headmneu>Judul Buku</td>
			<td class=td_headmneu>Penulis</td>
		</tr>
	";

	
	$minta=mysql_query($sql);
	while($hs=mysql_fetch_array($minta)){
	echo "<tr>
			<td>$hs[jenis_buku]</td>
			<td><a href=?act=detail_cari&no_buku=$hs[no_buku]>$hs[judul]</a></td>
			<td>$hs[penulis]</td>
		</tr>
			";
	}
	echo "</table><br>";
		
	}
}
?>