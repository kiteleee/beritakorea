<?php
    $site_key = '6LfgBj4UAAAAALiPza5AGBChaiDjAIsgx2DEe9ag'; // Diisi dengan site_key API Google reCapthca yang sobat miliki
    $secret_key = '6LfgBj4UAAAAAM9xVS8QrDFbkjW-tQy-iOfrgVkN'; // Diisi dengan secret_key API Google reCapthca yang sobat miliki
 
    if (isset($_POST['submit']))
    {
        if(isset($_POST['g-recaptcha-response']))
        {
            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
            $response = @file_get_contents($api_url);
            $data = json_decode($response, true);
 
            if($data['success'])
            {
                $comment = $_POST['feedback'];
               
 include "test_email.php";
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