<?php
session_start();
if(isset($_SESSION['nama']))
{
?>
<?php
include "koneksi.php";

mysql_query("delete from content where id_content='$_GET[id_content]'");
header("location:content.php");
?>

<?php
}
else{
	header("location:login/logout.php");
}
?>