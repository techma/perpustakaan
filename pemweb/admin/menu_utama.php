<?php
error_reporting(0);

	//require("../include/session.inc");
	include("conecsi.php");
	require("cekadmin.php");
	session_start();
	require_once "menu.html";
	$tb_masukan=$_POST['tb_masukan'];
	$tb_pengelolaan="";
	$tb_laporan="";
	$tb_logout="";
	
	if($tb_masukan){
		//memeriksa form (droplist) menu
		if(!isset($fm_menu))$fm_menu='';
		switch($fm_menu)
		{
			case 'jenis' : include "in_jenis.html"; break;
			case 'buku'	 : include "in_buku.php"; break;
			case 'anggota': include "in_anggota.html"; break;
			case 'desk'	  : include "in_deskbuku.php"; break;
			case 'penulis': include "in_penulis.html"; break;
			case 'penerbit': include "in_penerbit.html"; break;
		}
	}
	
	else if($tb_pengelolaan){
		if(!isset($fm_menu))$fm_menu='';
		switch($fm_menu)
		{
			case 'jenis' : include "olah_jenis.php"; break;
			case 'buku'  : include "olah_buku.php"; break;
			case 'anggota': include "olah_anggota.php"; break;
			case 'desk' : include "olah_deskbuku.php"; break;
			case 'penulis' : include "olah_penulis.php"; break;
			case 'penerbit' : include "olah_penerbit.php"; break;
		}
	}
	
	else if ($tb_laporan)
		{
			//memeriksa form (droplist) menu
			if(!isset($fm_menu))$fm_menu='';
			switch ($fm_menu){
				case 'jenis' 	: include "lap_jenis.php"; break;
				case 'buku'  	: include "lap_buku.php"; break;
				case 'anggota'	: include "lap_anggota.php"; break;
				case 'desk' 	: include "lap_deskbuku.php"; break;
				case 'penulis' 	: include "lap_penulis.php"; break;
				case 'penerbit' : include "lap_penerbit.php"; break;
			
			}
	}
	
	else if($tb_logout){
	require_once "logout.php";
	}
?>