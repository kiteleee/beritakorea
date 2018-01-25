<?php
session_start();
if(isset($_SESSION['nama']))
{
?>
<?php
include "header.php";
?>
<?php
include "content.php";
?>
<?php
include "footer.php";
?>
<?php
}
else{
	header("location:login/logout.php");
}
?>