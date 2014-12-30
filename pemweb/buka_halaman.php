<?php
if(!isset($act))$act='';
switch ($act){
	case ''				: include "welcome.html"; break;
	case 'pencarian'	: include "pencarian.php"; break;
	case 'detail_cari'	: include "cari_detail.php"; break;
	case 'profil'		: include "profil.php"; break;
	case 'bantuan'		: include "bantuan.html"; break;
}

?>

