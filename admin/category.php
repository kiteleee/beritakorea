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
            Category
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
						<a href="tambah_category.php"><button type="button" class="btn btn-success">Tambah</button></a>
					<div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Title</th>
						<th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include "koneksi.php";
$no=0;
$data = "SELECT * from content_category";
$bacadata = mysql_query($data);
while($select_result = mysql_fetch_array($bacadata))
{
$no++;
$title          = $select_result['title'];
echo"<tr>
<td>$no</td> 
<td>$title</td>
";
?>
<td>
	<a href="hapus_category.php?id_category=<?php echo $select_result['id_category'];?>"class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
	<a href="edit_category.php?id_category=<?php echo $select_result['id_category'];?>"class='btn btn-warning'><i class='glyphicon glyphicon-edit'></i></a>
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