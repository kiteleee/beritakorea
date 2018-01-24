<!-- start Latest post Section -->
<section id="lts_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h5>Trending News</h5>
				</div>			
			</div>
<?php 
include "admin/koneksi.php"; 
  //menghitung data yang akan di tampilkan pada tabel
  $perhalaman=6;
   $page=(isset($_GET['page']))?$_GET['page']:1;
   $start=($page - 1) * $perhalaman;

  $data=mysql_query("SELECT * FROM content WHERE id_category = 1 ORDER BY tgl DESC LIMIT $start, $perhalaman");
  $sql=mysql_query("SELECT * FROM content WHERE id_category = 1");

  $jum=mysql_num_rows($sql);
  $halaman=ceil($jum/$perhalaman);
 
 
while($select_result = mysql_fetch_array($data))
{
$nama          = $select_result['nama'];
$tgl          = $select_result['tgl'];
$keterangan 	= substr($select_result['keterangan'],0,130);
$gambar         = "admin/upload/".$select_result['gambar'];
  ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">						
					<img src="timthumb/<?php echo $gambar;?>/300/200" alt=""/>
					<h3><?php echo $nama;?></h3>
					<p><?php echo $keterangan;?>....</p>
					<a href="<?php echo'berita-'.$nama.'-'.$select_result['id_content'];?>">Read more <i class="fa fa-long-arrow-right"></i></a>					
				</div>
			</div>
			</br>
 <?php 
} 
?>

<div class="col-md-12" align="center">
    <ul class="pagination">
    <?php if ($page>1) { ?>
    <li>
      <a href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
      <?php }else{ ?> <li class="disabled">
      <a href="?page=<?php echo $page; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li> <?php } ?>
    <?php 

    for ($x=1; $x<=$halaman ; $x++) {
      if ($page==$x) {
        $ini="active";
      }else{$ini="";}
      ?>
    <li class="<?php echo "$ini"; ?>"><a href="?page=<?php echo "$x"; ?>"><?php echo "$x"; ?></a></li>
   <?php  } ?>
    <li>
      <a href="?page=<?php echo $page + 1; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
  </div>
		</div>
	</div>
</section>
<!-- End Latest post Section -->

<!-- komentar more -->
<!-- jQuery 2.1.3 -->
    <script src="admin/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='admin/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="admin/dist/js/demo.js" type="text/javascript"></script>
    <script src="admin/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>