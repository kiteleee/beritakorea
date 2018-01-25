<?php
include "koneksi.php";
	$update = mysql_query("UPDATE content_category SET title='$_POST[title]' where id_category='$_POST[id_category]'");
header("location:category.php");
?>