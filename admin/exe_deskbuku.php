<?php

require("../include/session.inc");
require "menu_utama.php";
require_once "fn_buku.php";

if($tb_simpan){
	//pemanggilan fungsi
	cek_formdeskbuku();
	$tanggal=date('Y-m-d');
	
	//jika ketemu tombol simpan(tb_simpan) maka perintah ini akan dijalankan
	include "../include/conecsi.inc";
	mysql_query("insert into desk_buku (
	no_buku,
	gambar,
	kondisi,
	deskripsi
	) 
	values (
	'$fm_judul',
	'$namafile_name',
	'$fm_kondisi',
	'$fm_deskripsi'
	)
	");
	
	copy($namafile,"../img_buku/$namafile_name");
	include_once('in_deskbuku.php');
}
else if($tb_update){
	cek_formdeskbuku();
	
	include "../include/conecsi.inc";
	mysql_query("update desk_buku set
	no_buku='$fm_judul',
	gambar='$namafile_name',
	kondisi='$fm_kondisi',
	deskripsi='$fm_deskripsi'
	where no_desk='$fm_nodesk'
	");
	
	copy($namafile,"../img_buku/$namafile_name");
	echo "Data dengan no buku :$fm_judul telah di update";
	include "ed_deskbuku.php";
	
}
else if($tb_hapus){
//bagian ini akan dikerjakan jika tombol hapus di klik 
include "../include/conecsi.inc";
mysql_query("delete from desk_buku where no_desk='$fm_nodesk'");

echo "data dengan no judul : $fm_judul telah dihapus";
include "olah_deskbuku.php";
}
else if($tb_edit){
include "ed_deskbuku.php";
}
?>