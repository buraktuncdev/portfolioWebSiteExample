<?php
 if(isset($_POST['submit']))
{  
    $to = "info@gulsahgulgec.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Web Sayfandan İletişime Geçmek İstiyorum";
    $message = $first_name . " " . " adlı kişinin mesajı: " . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers .= "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type: text/plain; charset=utf-8" . "\r\n";
    mail($to,$subject,$message,$headers);
    echo "Mail Gönderildi. Teşekkürler " . $first_name . ".";
   
    header('Location: ../index.html');
    }
?>