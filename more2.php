<!-- start about Section -->
<section id="abt_sec">
<?php
include "admin/koneksi.php";
	$berita = mysql_query("SELECT * FROM content where id_content='$id_content'");
    $r = mysql_fetch_array($berita);
    {
?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1><?php echo $r['nama'];?></h1>
					<img class="img-responsive" src="timthumb/<?php echo "admin/upload/".$r['gambar'];?>/600/300" alt=""/>
				</div>			
			</div>		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="abt">
					<p><?php echo $r['keterangan'];?></p>
				</div>
			</div>			
		</div>
	</div>
        <!-- End Culture -->
        <div class="text-center">
                    <a href="http://www.facebook.com/sharer.php?u=http://pkl.code.redwhite.co.id/kitel/<?php echo'drama-'.$r['nama'].'-'.$r['id_content'];?>" target="_blank" class="btn btn-social-icon btn-facebook">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="https://plus.google.com/share?url=http://pkl.code.redwhite.co.id/kitel/<?php echo'drama-'.$r['nama'].'-'.$r['id_content'];?>" target="_blank"class="btn btn-social-icon btn-google-plus">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    
                    <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                    
                    <a href="https://twitter.com/share?url=http://pkl.code.redwhite.co.id/kitel/<?php echo'drama-'.$r['nama'].'-'.$r['id_content'];?>&text=Berita%20Korea%20Share&hashtags=beritakorea" target="_blank" class="btn btn-social-icon btn-twitter">
                        <i class="fa fa-twitter"></i>
                    </a>

                  </div>
        

<section class="content">  
            <div class="row">
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Form Komentar</h3>
                </div><!-- /.box-header -->
<?php   
    include "simpan.php";
?>
                <?php if (isset($success)) {
             if ($success==true) { ?>
            <div class="alert alert-success"><?php echo "Terima Kasih Telah Memberikan Komentar"; ?></div>
            <? } else { ?>
            <div class="alert alert-danger"><?php echo "Gagal!, Mohon lengkapi form dan Captcha yang tersedia"; ?></div>
            <?php } } ?>

                <!-- form start -->
                <form role="form" method="POST" action="?">
                  <div class="box-body">
                      <input type="hidden" name="id_content" value="<?php echo $r['id_content'];?>">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label>Komentar</label>
                      <textarea class="form-control" name="isi" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                      <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
                    </div>
                     <script src='https://www.google.com/recaptcha/api.js'></script>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                      <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    
                  </div>
                </form>
              </div><!-- /.box -->
			</div>
			<div class="col-md-6">

<?php 
include "admin/koneksi.php"; 
  //menghitung data yang akan di tampilkan pada tabel
  $perhalaman=3;
   $pages=(isset($_GET['pages']))?$_GET['pages']:1;
   $start=($pages - 1) * $perhalaman;
  $data=mysql_query("select * from komentar where id_content='$id_content'LIMIT $start, $perhalaman");
  $sql=mysql_query("select * from komentar where id_content='$id_content'");
  $jum=mysql_num_rows($sql);
  $halaman=ceil($jum/$perhalaman);
 ?>
 <div class="box box-success">
                <div class="box-header ui-sortable-handle" style="cursor: move;">
                  <i class="fa fa-comments-o"></i>
        <h3 class="box-title"><?php echo "Komentar: $jum <br/>";}?></h3>
                </div>
 <?php
 
while($select_result = mysql_fetch_array($data))
{
$nama          = $select_result['nama'];
$tgl          = $select_result['tgl'];
$isi 	=$select_result['isi'];
  ?>

                  <!-- chat item -->
                  <div class="item">
                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i><?php echo $tgl;?></small>
                        <?php echo $nama;?>
                      </a>
                      <?php echo $isi;?>
                    </p>
                    &nbsp;
                  </div><!-- /.item -->
 <?php 
} 
?>

<div class="col-md-12" align="center">
    <ul class="pagination  pagination-sm no-margin pult">
    <?php if ($pages>1) { ?>
    <li>
      <a href="<?php echo'drama-'.$r['nama'].'-'.$r['id_content'];?>&pages=<?php echo $pages - 1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
      <?php }else{ ?> <li class="disabled">
      <a href="<?php echo'drama-'.$r['nama'].'-'.$r['id_content'];?>&pages=<?php echo $pages; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li> <?php } ?>
    <?php 

    for ($x=1; $x<=$halaman ; $x++) {
      if ($pages==$x) {
        $ini="active";
      }else{$ini="";}
      ?>
    <li class="<?php echo "$ini"; ?>"><a href="<?php echo'drama-'.$r['nama'].'-'.$r['id_content'];?>&pages=<?php echo "$x"; ?>"><?php echo "$x"; ?></a></li>
   <?php  } ?>
    <li>
      <a href="<?php echo'drama-'.$r['nama'].'-'.$r['id_content'];?>&pages=<?php echo $pages + 1; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
  </div>

              </div>
              </div>
          </div>
</section>
</section>
<!-- End About Section -->