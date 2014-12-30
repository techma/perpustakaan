<?php

require("../include/session.inc");
require "menu_utama.php";
require_once "fn_anggota.php";

if($tb_simpan){
	//pemanggilan fungsi
	cek_formanggota();
	cek_email();
	$tanggal=date('Y-m-d');
	
	//jika ketemu tombol simpan(tb_simpan) maka perintah ini akan dijalankan
	include "../include/conecsi.inc";
	mysql_query("insert into anggota (
	user,
	password,
	nama,
	sex,
	telp,
	alamat,
	email,
	tgl_entry,
	deskripsi) values (
	'$fm_user',
	password('$fm_password'),
	'$fm_nama',
	'$fm_sex',
	'$fm_telp',
	'$fm_alamat',
	'$fm_email',
	'$tanggal',
	'$fm_deskripsi'
	)
	");
		
	echo "Data anggota $fm_nama telah tersimpan";
	include "in_anggota.html";
}
else if($tb_update){
	cek_formanggota();
	cek_email();
	$tanggal=date('Y-m-d');
	include "../include/conecsi.inc";
	mysql_query("update anggota set
	user='$fm_user',
	password='$fm_password',
	nama='$fm_nama',
	telp='$fm_telp',
	alamat='$fm_alamat',
	email='$fm_email',
	tgl_entry='$tanggal',
	deskripsi='$fm_deskripsi'
	where id_anggota='$hd_idanggota'
	");
	
	echo "Data dengan id_anggota=$fm_idanggota atau user = $fm_user telah di update";
	include "ed_anggota.php";
	
}
else if($tb_hapus){
//bagian ini akan dikerjakan jika tombol hapus di klik 
include "../include/conecsi.inc";
mysql_query("delete from anggota where id_anggota='$fm_idanggota'");

echo "data dengan kd_anggota=$fm_idanggota telah dihapus";
include "olah_anggota.php";
}
else if($tb_edit){
include "ed_anggota.php";
}
?>