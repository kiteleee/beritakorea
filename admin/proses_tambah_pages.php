<?php
include "koneksi.php";
	$update = mysql_query("INSERT INTO pages(menu,link,status) VALUES('$_POST[menu]','$_POST[link]','$_POST[status]')");

header("location:pages.php");
?>