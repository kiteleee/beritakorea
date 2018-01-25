<?php
include "koneksi.php";
	$update = mysql_query("INSERT INTO content_category(title) VALUES('$_POST[title]')");

header("location:category.php");
?>