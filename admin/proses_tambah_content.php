<?php
include "koneksi.php";
$foto = $_FILES['gambar']['name'];
$lokasi = $_FILES['gambar']['tmp_name'];
if(empty($foto))
{
	$update = mysql_query("INSERT INTO content(id_category,nama,tgl,keterangan) VALUES('$_POST[id_category]','$_POST[nama]','$_POST[tgl]','$_POST[keterangan]')");
}
else{
	$v_dir = "upload/";
	$v_file = $v_dir . $foto;
	move_uploaded_file($_FILES['gambar']['tmp_name'],$v_file);
	$update = mysql_query("INSERT INTO content(id_category,nama,tgl,keterangan,gambar) VALUES('$_POST[id_category]','$_POST[nama]','$_POST[tgl]','$_POST[keterangan]','$foto')");

	}

header("location:content.php");
?>