<?php
function cek_formdeskbuku(){
global $fm_judul,$fm_kondisi,$fm_deskripsi,$namafile,$namafile_name;

	if(trim($fm_judul)=="" | trim($fm_judul)=="not_judul"){
		echo "<b>Judul Buku Harus Dipilih</b><br><br>";
		exit();
	}
		else if(trim($fm_kondisi)==""){
			echo "<b>Kondisi Buku Harus Diisi</b><br><br>";
			exit();
		}
			else if(trim($fm_deskripsi)==""){
				echo "<b>Deskripsi Penulis Harus Diisi</b><br><br>";
				exit();
			}
				
		
}
?>