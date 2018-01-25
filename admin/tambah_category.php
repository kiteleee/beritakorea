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
            Tambah category
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- form start -->
					    <form method="POST" action="proses_tambah_category.php" enctype="multipart/form-data" class="form-horizontal form-material">
                          <div class="box-body">
							<div class="form-group">
                                <label class="col-md-12">Title</label>
                                <div class="col-md-12">
                                    <input type="text" name="title" placeholder="enter title.." class="form-control form-control-line"> </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
							</div>
                        </form>

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