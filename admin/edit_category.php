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
            Edit Pages
          </h1>
        </section>
<?php
include "koneksi.php";

$edit = mysql_query("SELECT * FROM content_category where id_category='$_GET[id_category]'");
$r=mysql_fetch_array($edit);
?>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- form start -->
                        <form method="POST" action="proses_edit_category.php" enctype="multipart/form-data" class="form-horizontal form-material">
					<div class="box-body">
                        <input type="hidden" name="id_category" value="<?php echo $r['id_category'];?>">
							<div class="form-group">
                                <label class="col-md-12">Title</label>
                                <div class="col-md-12">
                                    <input type="text" name="title" class="form-control form-control-line" value="<?php echo $r['title'];?>"> </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
					</div><!-- /.box -->
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
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