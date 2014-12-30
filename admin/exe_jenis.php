<?php

require("../include/session.inc");
require "menu_utama.php";
require_once "fn_jenis.php";

if($tb_simpan){
	//pemanggilan fungsi
	cek_formjenis();
	
	//jika ketemu tombol simpan(tb_simpan) maka perintah ini akan dijalankan
	include "../include/conecsi.inc";
	mysql_query("insert into jenis (
	kd_jenis,
	jenis_buku,
	deskripsi) 
	values (
	'$fm_kdjenis',
	'$fm_jenis',
	'$fm_deskripsi'
	)
	");
		
	echo "Data telah tersimpan";
	include "in_jenis.html";
}
else if($tb_update){
	cek_formjenis();
	
	include "../include/conecsi.inc";
	mysql_query("update jenis set
	kd_jenis='$fm_kdjenis',
	jenis_buku='$fm_jenis',
	deskripsi='$fm_deskripsi'
	where kd_jenis='$hd_jenis'
	");
	
	echo "Data dengan kd_jenis=$hd_kdjenis telah di update";
	include "ed_jenis.php";
	
}
else if($tb_hapus){
//bagian ini akan dikerjakan jika tombol hapus di klik 
include "../include/conecsi.inc";
mysql_query("delete from jenis where kd_jenis='$fm_kdjenis'");

echo "data dengan kd_jenis=$fm_kdjenis telah dihapus";
include "olah_jenis.php";
}
else if($tb_edit){
include "ed_jenis.php";
}
?>