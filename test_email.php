<?php
include "admin/koneksi.php";
$update = mysql_query("INSERT INTO feedback(nama,email,saran) VALUES('$_POST[nama]','$_POST[email]','$_POST[saran]')");
ini_set('display_errors', 1);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\POP3;
use PHPMailer\PHPMailer\OAuth;
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/POP3.php';
require_once 'PHPMailer/src/OAuth.php';
$mail = new PHPMailer;
// Konfigurasi SMTP
$mail->isSMTP();
$mail->Host = 'mail.pkl.code.redwhite.co.id';
$mail->SMTPAuth = true;
$mail->Username = 'kiki@pkl.code.redwhite.co.id';
$mail->Password = '123qweasd2018';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('kiki@pkl.code.redwhite.co.id', "'$_POST[nama]'");
$mail->addReplyTo('kiki@pkl.code.redwhite.co.id',"'$_POST[nama]'");
// Menambahkan penerima
$mail->addAddress('beritakorea84@gmail.com');
$mail->addAddress('kiki@pkl.code.redwhite.co.id');
// Subjek email
$mail->Subject = 'feedback dari user';
// Mengatur format email ke HTML
$mail->isHTML(true);
// Konten/isi email
$mailContent = "'$_POST[saran]'";
$mail->Body = $mailContent;
// Kirim email
if(!$mail->send()){
    echo 'Feedback email tidak dapat dikirim.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    //echo 'Pesan telah terkirim';
}