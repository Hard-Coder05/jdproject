<?php  
$to = "smishra1605@gmail.com";  
$subject = "hellobro";  
$body = "Happy Birthday";  
$headers = "From: Peterrn";  
$headers .= "Reply-To: abhajha@gmail.com";  
$headers .= "Return-Path: abhajha@gmail.com";  
$headers .= "X-Mailer: PHP5n";  
$headers .= "MIME-Version: 1.0" . "n";  
$headers .= "Content-type: text/html; charset=iso-8859-1" . "rn";  
mail($to,$subject,$body,$headers);  
?>  