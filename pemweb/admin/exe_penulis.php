<?php

require("../include/session.inc");
require "menu_utama.php";
require_once "fn_penulis.php";

if($tb_simpan){
	//pemanggilan fungsi
	cek_formpenulis();
	cek_email();
	
	//jika ketemu tombol simpan(tb_simpan) maka perintah ini akan dijalankan
	include "../include/conecsi.inc";
	mysql_query("insert into penulis (
	kd_penulis,
	penulis,
	alamat,
	email,
	deskripsi) values (
	'$fm_kdpenulis',
	'$fm_penulis',
	'$fm_alamat',
	'$fm_email',
	'$fm_deskripsi'
	)
	");
		
	echo "Data penulis $fm_penulis telah tersimpan";
	include "in_penulis.html";
}
else if($tb_update){
	cek_formpenulis();
	cek_email();
	
	include "../include/conecsi.inc";
	mysql_query("update penulis set
	kd_penulis='$fm_kdpenulis',
	penulis='$fm_penulis',
	alamat='$fm_alamat',
	email='$fm_email',
	deskripsi='$fm_deskripsi'
	where kd_penulis='$hd_kdpenulis'
	");
	
	echo "Data dengan kd_penulis=$hd_kdpenulis telah di update";
	include "ed_penulis.php";
	
}
else if($tb_hapus){
//bagian ini akan dikerjakan jika tombol hapus di klik 
include "../include/conecsi.inc";
mysql_query("delete from penulis where kd_penulis='$fm_kdpenulis'");

echo "data dengan kd_penulis=$fm_kdpenulis telah dihapus";
include "olah_penulis.php";
}
else if($tb_edit){
include "ed_penulis.php";
}
?>