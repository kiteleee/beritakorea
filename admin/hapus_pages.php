<?php
session_start();
if(isset($_SESSION['nama']))
{
?>
<?php
include "koneksi.php";

mysql_query("delete from pages where id='$_GET[id]'");
header("location:pages.php");
?>

<?php
}
else{
	header("location:login/logout.php");
}
?>