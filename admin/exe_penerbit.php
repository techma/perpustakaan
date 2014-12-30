<?php

require("../include/session.inc");
require "menu_utama.php";
require_once "fn_penerbit.php";

if($tb_simpan){
	//pemanggilan fungsi
	cek_formpenerbit();
	cek_email();
	
	//jika ketemu tombol simpan(tb_simpan) maka perintah ini akan dijalankan
	include "../include/conecsi.inc";
	mysql_query("insert into penerbit (
	kd_penerbit,
	penerbit,
	alamat,
	telp,
	email,
	deskripsi) values (
	'$fm_kdpenerbit',
	'$fm_penerbit',
	'$fm_alamat',
	'$fm_telp',
	'$fm_email',
	'$fm_deskripsi'
	)
	");
		
	echo "Data penerbit $fm_penerbit telah tersimpan";
	include "in_penerbit.html";
}
else if($tb_update){
	cek_formpenerbit();
	cek_email();
	
	include "../include/conecsi.inc";
	mysql_query("update penerbit set
	kd_penerbit='$fm_kdpenerbit',
	penerbit='$fm_penerbit',
	alamat='$fm_alamat',
	telp='$fm_telp',
	email='$fm_email',
	deskripsi='$fm_deskripsi'
	where kd_penerbit='$hd_kdpenerbit'
	");
	
	echo "Data dengan kd_penerbit=$hd_kdpenerbit telah di update";
	include "ed_penerbit.php";
	
}
else if($tb_hapus){
//bagian ini akan dikerjakan jika tombol hapus di klik 
include "../include/conecsi.inc";
mysql_query("delete from penerbit where kd_penerbit='$fm_kdpenerbit'");

echo "data dengan kd_penerbit=$fm_kdpenerbit telah dihapus";
include "olah_penerbit.php";
}
else if($tb_edit){
include "ed_penerbit.php";
}
?>