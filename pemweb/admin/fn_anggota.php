<?php
//fungsi untuk cek form buku
function cek_formanggota(){
global $fm_user,$fm_nama,$fm_sex,$fm_password,$fm_telp,$fm_email,$fm_alamat,$fm_deskripsi;

	if(trim($fm_user)==""){
		echo "<b>User Id Harus Diisi</b><br><br>";
		exit();
	}
		else if(trim($fm_nama)==""){
			echo "<b>Nama Belum Diisi</b><br><br>";
			exit();
		}
		
			else if(trim($fm_sex)=="not_kelamin"){
				echo "<b>Anda belum Menentukan Jenis Kelamin</b><br><br>";
				exit();
			}
			
				else if(trim($fm_telp)==""){
					echo "<b>Anda belum Mengisi No Telp</b><br><br>";
					exit();
				}
				
					else if(trim($fm_email)==""){
						echo "<b>Email Anggota Harus Diisi</b><br><br>";
						exit();
					}
					
						else if(trim($fm_alamat)==""){
							echo "<b>Alamat anggota harus diisi</b><br><br>";
							exit();
						}
							
							else if(trim($fm_deskripsi)==""){
								echo "<b>Deskripsi buku harus diisi</b><br><br>";
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