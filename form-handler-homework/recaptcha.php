<?php 
    if(isset($_POST) && isset($_POST['button'])) {
        $secret_key = '6Lej71wlAAAAAHdcWRx8ZCONx-MFKHUgwTUxOZ1k';
        $token = $_POST['captchaToken'];
        $ip = $_SERVER['REMOTE_ADDR'];
       
    
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$token.'&remoteip='.$ip;
    
        $request = file_get_contents($url);
        $reponse = json_decode($request);

        if($response->success) {
            $from = $_POST['email'];
            $name = $_POST['name'];
            $comments = $_POST['comments'];
            $testEmail = file_get_contents('email.html');
            
            $tz = 'America/Chicago';
            $timestamp = time();
            $dt = new DateTime('now', new DateTimeZone($tz));
            $date = $dt->format('m/d/Y'); 
            
            $to = 'contact@maramandernach.net';
            $subject = 'Form Submission';
            $headers = "From: A sender <" . $from . ">\n";
            $headers .= "Reply-To: " . $to . "\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1";
            $headers .= "MIME-Version: 1.0\r\n";
   
            $subject2 = 'Thank you for submitting';
            $headers2 .= 'Content-type: text/html; charset=iso-8859-1';
            $headers2 .= "MIME-Version: 1.0\r\n";
            
            $message = '<html><body>';
            $message .= '<h1>' . $from . '</h1';
            $message .= '<h1>' . $name . '</h1';
            $message .= '<h1>' . $date . '</h1';
            $message .= '<h1>Comments</h1';
            $message .= '<p>' . $comments . '</p>';
            $message .= '</body></html>';
            
            $message2 = '<html><body>';
            $message2 .= '<h1>confirmed email from ' . $from .  '</h1>';
            $message2 .= '</body></html>'; 
    
            $send = mail($to, $subject, $testEmail, $headers);
            $send2 = mail('<zimmyzon@gmail.com>', 'subject', $testEmail, $headers2, '-f contact@maramandernach.net');
    
            //echo ($send2 ? 'Was2send ' : '2not ');
            //echo ($send ? 'Was send ' : 'Not ');   
        } else {
            $from = $_POST['email'];
            $name = $_POST['name'];
            $comments = $_POST['comments'];
            
            $tz = 'America/Chicago';
            $timestamp = time();
            $dt = new DateTime('now', new DateTimeZone($tz));
            $date = $dt->format('m/d/Y'); 
            
            $to = 'contact@maramandernach.net';
            $subject = 'Form Submission';
            $headers = "From: A sender <" . $from . ">\n";
            $headers .= "Reply-To: " . $to . "\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1";
            $headers .= "MIME-Version: 1.0\r\n";
            
            $error = 'Attempt made by ' . $from . ' to access form';
            
            $send = mail($to, $subject, $error, $headers);

        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for your response</title>
    
</head>
<body>
</body>
</html>