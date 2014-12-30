<?php
//fungsi untuk cek form penulis
function cek_formpenulis(){
global $fm_kdpenulis,$fm_penulis,$fm_email,$fm_alamat,$fm_deskripsi;

	if(trim($fm_kdpenulis)==""){
		echo "<b>Penulis Buku Harus Diisi</b><br><br>";
		exit();
	}
		else if(trim($fm_penulis)==""){
			echo "<b>Nama Penulis Harus Diisi</b><br><br>";
			exit();
		}
			else if(trim($fm_email)==""){
				echo "<b>Email Penulis Harus Diisi</b><br><br>";
				exit();
			}
				else if(trim($fm_alamat)==""){
					echo "<b>Alamat Penulis Harus Diisi</b><br><br>";
					exit();
				}
					else if(trim($fm_deskripsi)==""){
						echo "<b>Deskripsi Penulis Harus Diisi</b><br><br>";
						exit();
					}
		
}
//fungsi untuk mengecek email
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