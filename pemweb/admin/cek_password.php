<?php

	error_reporting(0);
	require("conecsi.php");
function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;	
}

	$username = anti_injection($_POST['fm_admin']);
	$pass    = anti_injection(md5($_POST['fm_pass']));
	
	
// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($username) OR !ctype_alnum($pass)){
 }
else{	


	//nama file cek_passsword.php
	$sql="select admin,passadmin from admin where (admin='$username' and passadmin='$pass')";
	$hasil=mysql_query($sql);
	$dapat=mysql_num_rows($hasil);
	$r=mysql_fetch_array($hasil);
	
	if ($dapat > 0){
		
		
  session_start();

	$_SESSION[admin]     	= $r[admin];
	 $_SESSION[passadmin]      	= $r[passadmin];
    $_SESSION[id_admin]     	= $r[id_admin];
	$sid_lama = session_id();

	session_regenerate_id();

	$sid_baru = session_id();

  mysql_query("UPDATE admin SET id_session='$sid_baru' WHERE username='$username'");
  header('location:index2.php');
 echo"$sid_baru";
}
else{
print '<script>alert ("Login Gagal, Username atau Password salah!"); </script>';
print '<meta http-equiv="refresh" content="0;url=index.php" />';
}
}
?>