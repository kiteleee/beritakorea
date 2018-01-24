<!-- start Latest post Section -->
<section id="lts_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h5>Trending Drama</h5>
				</div>			
			</div>
<?php 
include "admin/koneksi.php"; 
  //menghitung data yang akan di tampilkan pada tabel
  $perhalaman= 6;
   $pages=(isset($_GET['pages']))?$_GET['pages']:1;
   $start=($pages - 1) * $perhalaman;
  $data=mysql_query("SELECT * FROM content WHERE id_category = 4 ORDER BY tgl DESC LIMIT $start, $perhalaman");
  $sql=mysql_query("select * from content where id_category = 4");
  $jum=mysql_num_rows($sql);
  $halaman=ceil($jum/$perhalaman);

while($select_result = mysql_fetch_array($data))
{
$nama          = $select_result['nama'];
$keterangan 	= substr($select_result['keterangan'],0,130);
$gambar         = "admin/upload/".$select_result['gambar'];
  ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">						
					<img src="timthumb/<?php echo $gambar;?>/300/200" alt=""/>
					<h3><?php echo $nama;?></h3>
					<p><?php echo $keterangan;?>....</p>
					<a href="<?php echo'drama-'.$nama.'-'.$select_result['id_content'];?>">Read more <i class="fa fa-long-arrow-right"></i></a>					
				</div>
			</div>
			</br>
 <?php 
} 
?>

<div class="col-md-12" align="center">
    <ul class="pagination">
    <?php if ($pages>1) { ?>
    <li>
      <a href="drama.php?pages=<?php echo $pages - 1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
      <?php }else{ ?> <li class="disabled">
      <a href="drama.php?pages=<?php echo $pages; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li> <?php } ?>
    <?php 

    for ($x=1; $x<=$halaman ; $x++) {
      if ($pages==$x) {
        $ini="active";
      }else{$ini="";}
      ?>
    <li class="<?php echo "$ini"; ?>"><a href="drama.php?pages=<?php echo "$x"; ?>"><?php echo "$x"; ?></a></li>
   <?php  } ?>
    <li>
      <a href="drama.php?pages=<?php echo $pages + 1; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
  </div>
		</div>
	</div>
</section>
<!-- End Latest post Section -->