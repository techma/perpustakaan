<?php
error_reporting(0);
	require("conecsi.php");
function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;	
}
$username = anti_injection($_POST['fm_admin']);
	$pass    = anti_injection(md5($_POST['fm_pass']));

	echo "$username    $pass	</br>";
		$sql="select admin,passadmin from admin where (admin='$fm_admin' and passadmin='$pass')";
	$hasil=mysql_query($sql);
	$dapat=mysql_num_rows($hasil);
	$r=mysql_fetch_array($hasil);
	
echo"$sql";
	
?>