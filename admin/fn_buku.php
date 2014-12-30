<?php
//fungsi untuk cek form buku
function cek_formbuku(){
global $fm_isbn,$fm_judul,$fm_jenis,$fm_penulis,$fm_penerbit,$fm_tahun,$fm_jmlbuku,$fm_rakbuku;

	if(trim($fm_isbn)==""){
		echo "<b>ISBN Harus Diisi</b><br><br>";
		exit();
	}
		else if(trim($fm_judul)==""){
			echo "<b>Judul Buku Harus Diisi</b><br><br>";
			exit();
		}
			else if(trim($fm_jenis)=="" | trim($fm_jenis)=="not_jenis"){
				echo "<b>Jenis Buku Belum Diisi</b><br><br>";
				exit();
			}
				else if(trim($fm_penulis)=="" | trim($fm_penulis)=="not_penulis"){
					echo "<b>Anda Belum Menentukan Nama Penulis</b><br><br>";
					exit();
				}
					else if(trim($fm_penerbit)=="" | trim($fm_penerbit)=="not_penerbit"){
						echo "<b>Anda Belum Menentukan Penerbit</b><br><br>";
						exit();
					}
						else if(trim($fm_tahun)=="" | trim($fm_tahun)=="not_tahun"){
							echo "<b>Email Buku Harus Diisi</b><br><br>";
							exit();
						}
							else if(trim($fm_jmlbuku)==""){
								echo "<b>Jumlah Buku Harus Diisi</b><br><br>";
								exit();
							}
								else if(trim($fm_rakbuku)==""){
									echo "<b>Rak Buku Harus Diisi</b><br><br>";
									exit();
								}
		
}
?>