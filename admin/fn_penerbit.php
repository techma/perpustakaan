<?php
function cek_formpenerbit(){
global $fm_kdpenerbit,$fm_penerbit,$fm_telp,$fm_email,$fm_alamat,$fm_deskripsi;

	if(trim($fm_kdpenerbit)==""){
		echo "<b>Kode Penerbit Buku Harus Diisi</b><br><br>";
		exit();
	}
		else if(trim($fm_penerbit)==""){
			echo "<b>Nama Penerbit Harus Diisi</b><br><br>";
			exit();
		}
			else if(trim($fm_email)==""){
				echo "<b>Email Penerbit Harus Diisi</b><br><br>";
				exit();
			}
				else if(trim($fm_alamat)==""){
					echo "<b>Alamat Penerbit Harus Diisi</b><br><br>";
					exit();
				}
					else if(trim($fm_deskripsi)==""){
						echo "<b>Deskripsi Penerbit Harus Diisi</b><br><br>";
						exit();
					}
		
}

function cek_email(){
global $fm_email;
if(isset($fm_email))
if(empty($fm_email))
echo "email belum diisi<br>\n";
else{
//cek email
if(ereg("^.+@.+\\..+$",$fm_email)){
echo "alamat email $email benar<br>\n";
}
else{
echo "alamat email $email salah<br>\n";
exit();
}
}
}
?>