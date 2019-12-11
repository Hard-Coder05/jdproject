<?php
$to = '@gmail.com';
$subject = 'Hello from Siddharth!';
$message = 'body';
$headers = "From: smishra1605@gmail.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS. The mail is sent successfully";
    echo "<script>setTimeout(\"location.href = 'html_main.php';\",6000);</script>"; 
} else {
   echo "ERROR";
    echo "<script>setTimeout(\"location.href = 'html_main.php';\",6000);</script>"; 
}
