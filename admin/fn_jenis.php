<?php
function cek_formjenis(){
global $fm_kdjenis,$fm_jenis,$fm_deskripsi;

	if(trim($fm_kdjenis)==""){
		echo "<b>Kode Jenis Buku Harus Diisi</b><br><br>";
		exit();
	}
		else if(trim($fm_jenis)==""){
			echo "<b>Nama Jenis Harus Diisi</b><br><br>";
			exit();
		}
			else if(trim($fm_deskripsi)==""){
				echo "<b>Deskripsi Penulis Harus Diisi</b><br><br>";
					exit();
					}
		
}

?>