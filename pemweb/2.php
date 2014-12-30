<?php
error_reporting(0);

$pass=$_POST['md'];

$a=md5($pass);
echo "$a";

?>