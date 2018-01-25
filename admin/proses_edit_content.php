<?php
include "koneksi.php";
$foto = $_FILES['gambar']['name'];
$lokasi = $_FILES['gambar']['tmp_name'];
if(empty($foto))
{
	$update = mysql_query("UPDATE content SET nama='$_POST[nama]',id_category='$_POST[id_category]', tgl='$_POST[tgl]',keterangan='$_POST[keterangan]' where id_content='$_POST[id_content]'");
}
else{
	$v_dir = "upload/";
	$v_file = $v_dir . $foto;
	move_uploaded_file($_FILES['gambar']['tmp_name'],$v_file);
	$update = mysql_query("UPDATE content SET nama='$_POST[nama]',id_category='$_POST[id_category]',tgl='$_POST[tgl]', keterangan='$_POST[keterangan]', gambar='$foto' where  id_content='$_POST[id_content]'");

	}

header("location:content.php");
?>