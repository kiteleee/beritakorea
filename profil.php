<!-- start portfolio Section -->
<section id="protfolio_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Portfolio</h1>
					<h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>			
			</div>		
			<div class="col-lg-12">
				<div class="portfolio-filter text-uppercase text-center">
				<ul class="filter">
				<li class="active" data-filter="*">All</li>
				<li data-filter=".web-design">BOYBAND</li>
				<li data-filter=".graphic">GIRLBAND</li>
				</ul>
				</div>
				 
				<div class="all-portfolios">
<?php
include "admin/koneksi.php";
$data = "SELECT * from content where id_category = 2";
$bacadata = mysql_query($data);
while($select_result = mysql_fetch_array($bacadata))
{
$id_content          = $select_result['id_content'];
$nama          = $select_result['nama'];
$keterangan    = $select_result['keterangan'];
$gambar        = "admin/upload/".$select_result['gambar'];

?>
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="timthumb/<?php echo $gambar;?>/300/200" alt="">
					</div>				
					</div>
<?php } ?>	
<?php
include "admin/koneksi.php";
$data = "SELECT * from content where id_category = 3";
$bacadata = mysql_query($data);
while($select_result = mysql_fetch_array($bacadata))
{
$id_content          = $select_result['id_content'];
$nama          = $select_result['nama'];
$keterangan    = $select_result['keterangan'];
$gambar        = "admin/upload/".$select_result['gambar'];

?>	
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio graphic">
					<img class="img-responsive" src="timthumb/<?php echo $gambar;?>/280/185" alt="">
					</div>				
					</div>	
<?php } ?>
				</div>
			</div>
			</div>			
		</div>
</section>
<!-- End Portfolio Section -->
