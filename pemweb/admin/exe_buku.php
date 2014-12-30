<?php

require("../include/session.inc");
require "menu_utama.php";
require_once "fn_buku.php";

if($tb_simpan){
	//pemanggilan fungsi
	cek_formbuku();
	$tanggal=date('Y-m-d');
	
	//jika ketemu tombol simpan(tb_simpan) maka perintah ini akan dijalankan
	include "../include/conecsi.inc";
	mysql_query("insert into buku (
	isbn,
	kd_jenis,
	judul,
	kd_penulis,
	kd_penerbit,
	thn_terbit,
	jml_buku,
	rak_buku,
	tgl_entry
	) 
	values (
	'$fm_isbn',
	'$fm_jenis',
	'$fm_judul',
	'$fm_penulis',
	'$fm_penerbit',
	'$fm_tahun',
	'$fm_jmlbuku',
	'$fm_rakbuku',
	'$tanggal'
	)
	");
		
	echo "Data  buku $fm_judul telah tersimpan";
	include "in_buku.php";
}
else if($tb_update){
	cek_formbuku();
	$tanggal=date('Y-m-d');
	
	include "../include/conecsi.inc";
	mysql_query("update buku set
	isbn='$fm_isbn',
	kd_jenis='$fm_jenis',
	judul='$fm_judul',
	kd_penulis='$fm_penulis',
	kd_penerbit='$fm_penerbit',
	thn_terbit='$fm_tahun',
	jml_buku='$fm_jmlbuku',
	rak_buku='$fm_rakbuku',
	tgl_entry='$tanggal',
	where no_buku='$fm_nobuku'
	");
	
	echo "Data dengan judul :$fm_judul/$fm_nobuku telah di update";
	include "ed_buku.php";
	
}
else if($tb_hapus){
//bagian ini akan dikerjakan jika tombol hapus di klik 
include "../include/conecsi.inc";
mysql_query("delete from buku where no_buku='$fm_nobuku'");

echo "data dengan judul : $fm_judul telah dihapus";
include "olah_buku.php";
}
else if($tb_edit){
include "ed_buku.php";
}
?>