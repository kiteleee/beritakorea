<?php
session_start();
include "../koneksi.php";
function anti($data)
{
	$filter = mysql_real_escape_string(strip_tags(stripcslashes(htmlspecialchars($data,ENT_QUOTES))));
	return $filter;
}	 
$username = anti($_POST['username']);
$password = anti($_POST['password']);
$data = mysql_query("SELECT * FROM data_admin where username='$username' AND password='$password'");
$ketemu = mysql_num_rows($data);
if($ketemu == 1)
{
	$r = mysql_fetch_array($data);
	$_SESSION['id'] = $r['id'];
	$_SESSION['nama'] = $r['nama'];
	header("location:../content.php");
}
else
{
	echo "<script>alert('Login Gagal');</script>";
	echo "<script>window.location='login.php';</script>";
}
?>