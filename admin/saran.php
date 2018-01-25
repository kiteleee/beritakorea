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
            Data Saran
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
					<div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>email</th>
						<th>saran</th>
						<th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include "koneksi.php";
$no=0;
$data = "SELECT * from feedback";
$bacadata = mysql_query($data);
while($select_result = mysql_fetch_array($bacadata))
{
$no++;
$nama       = $select_result['nama'];
$email      = $select_result['email'];
$saran  	= $select_result['saran'];

echo"<tr>
<td>$no</td> 
<td>$nama</td>
<td>$email</td>
<td>$saran</td>
";
//ganti imagesup dengan nama folder dimana anda menempatkan image hasil upload
?>
<td>
	<a href="hapus_saran.php?id=<?php echo $select_result['id'];?>"class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
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