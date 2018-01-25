<?php
session_start();
if(isset($_SESSION['nama']))
{
?>
<?php
include "koneksi.php";

mysql_query("delete from content_category where id_category='$_GET[id_category]'");
header("location:category.php");
?>

<?php
}
else{
	header("location:login/logout.php");
}
?>