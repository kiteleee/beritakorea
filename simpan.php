<?php
    $site_key = '6LcbOUAUAAAAAJsOrMWS4NHy-wEd5dsklMFno2L7'; // Diisi dengan site_key API Google reCapthca yang sobat miliki
    $secret_key = '6LcbOUAUAAAAAHg0y1FGlOgV6Kuo3G9Bg-X9BZ98'; // Diisi dengan secret_key API Google reCapthca yang sobat miliki
 
    if (isset($_POST['submit']))
    {
        if(isset($_POST['g-recaptcha-response']))
        {
            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
            $response = @file_get_contents($api_url);
            $data = json_decode($response, true);
 
            if($data['success'])
            {
                $comment = $_POST['komentar'];
               include "admin/koneksi.php";
               $tgl=date('d/m/Y');                                          
$update = mysql_query("INSERT INTO komentar(nama,email,isi,tgl,id_content) VALUES('$_POST[nama]','$_POST[email]','$_POST[isi]','$tgl','$_POST[id_content]')");
                // proses penyimpananan dan lain-lain disini
                $success = true;
            }
            else
            {
                $success = false;
            }
        }
        else
        {
            $success = false;
        }
    }
?>