<?php
session_start();
if(isset($_SESSION['nama']))
{
?>
<?php
include "header.php";
?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Content
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
					<div class="table-responsive">
			<a href="tambah_content.php"><button type="button" class="btn btn-success">Tambah</button></a>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
						<th>Jenis</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
						<th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include "koneksi.php";
$no=0;
$data = "SELECT id_content, nama, tgl, keterangan, gambar, cc.id_category, title 
			FROM content c JOIN content_category cc 
				ON c.id_category=cc.id_category";
$bacadata = mysql_query($data);
while($select_result = mysql_fetch_array($bacadata))
{
$no++;
$nama          = $select_result['nama'];
$tgl         	= $select_result['tgl'];
$title         	= $select_result['title'];
$keterangan 	= $select_result['keterangan'];
$gambar         = "upload/".$select_result['gambar'];

echo"<tr>
<td>$no</td> 
<td>$nama</td>
<td>$tgl</td>
<td>$title</td>
<td>$keterangan</td>
<td><img src='$gambar' height='100'></td>
";
//ganti imagesup dengan nama folder dimana anda menempatkan image hasil upload
?>
<td>
	<a href="hapus_content.php?id_content=<?php echo $select_result['id_content'];?>"class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
	<a href="edit_content.php?id_content=<?php echo $select_result['id_content'];?>"class='btn btn-warning'><i class='glyphicon glyphicon-edit'></i></a>
</td>
</tr>
<?php } ?>
                    </tbody>
                  </table>
					</div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php
include "footer.php";
?>
<?php
}
else{
	header("location:login/logout.php");
}
?>