
<?php
error_reporting(0);
session_start();

if(!isset($_SESSION['admin']))
{
print "<script>window.location ='../index.php' </script>";
exit;
}else
{

}
?>