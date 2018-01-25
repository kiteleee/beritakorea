<?php
session_start();
if(isset($_SESSION['nama']))
{
?>
<?php
include "koneksi.php";

mysql_query("delete from feedback where id='$_GET[id]'");
header("location:saran.php");
?>

<?php
}
else{
	header("location:login/logout.php");
}
?>