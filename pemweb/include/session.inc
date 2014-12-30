<?php
session_start();
if(!session_is_registered(master)){
	echo "<center><font color=red size=+3><b>
	Anda tidak berhak atas halaman ini</b></font><br>";
	echo "<br>Klick<a href=../>Kembali</a>Ke HOME</center><br>";
	exit;
}
?>