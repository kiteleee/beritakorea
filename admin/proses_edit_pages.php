<?php
include "koneksi.php";
	$update = mysql_query("UPDATE pages SET menu='$_POST[menu]',link='$_POST[link]', status='$_POST[status]' where id='$_POST[id]'");
header("location:pages.php");
?>