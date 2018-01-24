<?php
include "header.php";
?>
<?php
            include "admin/koneksi.php";
            $url   = $_SERVER['QUERY_STRING'];
            $pecah = explode('-',$url);
            $hal  = $pecah[0];
            $judul  = $pecah[1];
            $id_content	   = $pecah[2];
if($hal=="berita")
    echo "";
elseif($hal=="drama")
    echo "";
elseif($hal=="drama.php")
    echo "";
elseif($hal=="profil.php")
     echo "";
 else{
            ?>
<?php
include "berita.php";
?>
<?php
}
//print_r($hal);
switch($hal){
	case 'berita':
		include 'more1.php';
		//print_r($pecah);
		break;
	case 'drama':
		include 'more2.php';
		//print_r($pecah);
		break;
    case 'berita.php':
		include 'berita.php';
		//print_r($pecah);
		break;
	case 'drama.php':
		include 'drama.php';
		//print_r($pecah);
		break;
	case 'profil.php':
		include 'profil.php';
		//print_r($pecah);
		break;
		
	default:
		echo '';
		break;
}
?>
<?php

if($hal=="berita")
    echo "";
elseif($hal=="drama")
    echo "";

 else{
            ?>

<!-- start contact us Section -->
<section id="ctn_sec">
<?php   
    include "proses.php";
?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Feedback</h1>
					<h2>berikan feedback dan bagikan kesosial media</h2>
				</div>			
			</div>		
			<div class="col-sm-6"> 
				<div id="cnt_form">
				    
				<?php if (isset($success)) {
             if ($success==true) { ?>
            <div class="alert alert-success"><?php echo "Terima Kasih Telah Memberikan Feedback"; ?></div>
            <? } else { ?>
            <div class="alert alert-danger"><?php echo "Gagal!, Mohon lengkapi form dan Captcha yang tersedia"; ?></div>
            <?php } } ?>
            
					<form id="contact-form" class="contact" name="contact-form" method="post" action="?">
						<div class="form-group">
						<input type="text" name="nama" class="form-control name-field" required="required" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
						</div> 
						<div class="form-group">
							<textarea name="saran" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
						</div>
						<div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
						 <script src='https://www.google.com/recaptcha/api.js'></script>
						 </br>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-primary" value="Send">
						</div>
					</form> 
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="cnt_info">
					<ul>
						<a href="http://www.facebook.com/sharer.php?u=http://pkl.code.redwhite.co.id/kitel" target="_blank" class="btn btn-social-icon btn-facebook">
                        <i class="fa fa-facebook"></i>
                    </a></br></br>
						<a href="https://plus.google.com/share?url=http://pkl.code.redwhite.co.id/kitel" target="_blank"class="btn btn-social-icon btn-google-plus">
                        <i class="fa fa-google-plus"></i>
                    </a></br></br>
						<a href="https://twitter.com/share?url=http://pkl.code.redwhite.co.id/kitel&text=Berita%20Korea%20Share&hashtags=beritakorea" target="_blank" class="btn btn-social-icon btn-twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
					</ul>
				</div>
			</div>			
		</div>
	</div>
</section>
<!-- End contact us  Section -->
<?php
}
include "footer.php";
?>