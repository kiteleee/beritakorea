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
            Edit Content
          </h1>
        </section>
<?php
include "koneksi.php";

$edit = mysql_query("SELECT * FROM content where id_content='$_GET[id_content]'");
$r=mysql_fetch_array($edit);
{
?>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- form start -->
                        <form method="POST" action="proses_edit_content.php" enctype="multipart/form-data" class="form-horizontal form-material">
					<div class="box-body">
                        <input type="hidden" name="id_content" value="<?php echo $r['id_content'];?>">
							<div class="form-group">
                                <label class="col-md-12">Nama</label>
                                <div class="col-md-12">
                                    <input type="text" name="nama" class="form-control form-control-line" value="<?php echo $r['nama'];?>"> </div>
                            </div>
<?php
}
include "koneksi.php";
$menu = mysql_query("SELECT * FROM content_category  ");
{
?>
							<div class="form-group">
								<label class="col-md-12">Id Category</label>
								<div class="col-md-3">
								<select name="id_category" value="<?php echo $r['title'];?>" class="form-control">
								<?php
						           while($menus = mysql_fetch_array($menu))
									echo '<option value="'.$menus['id_category'].'">'.$menus['title'].'</option>';
								?>
								</select>
								</div>
							</div>
							<div class="form-group">
                                <label class="col-md-12">Tanggal</label>
                                <div class="col-md-12">
                                    <input type="date" name="tgl" class="form-control form-control-line" value="<?php echo $r['tgl'];?>"> </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Keterangan</label>
                                <div class="col-md-12">
									<textarea class="ckeditor" name="keterangan" class="form-control" rows="3" placeholder="Enter ..."><?php echo $r['keterangan'];?></textarea>
								</div>
                            </div>
							<div class="form-group">
							<label for="example-email" class="col-md-12">Gambar</label>
                                <div class="col-md-12">
							<input type="file" name="gambar" value="<?php echo $r['gambar'];?>"></div>
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
<?php } ?> 
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
