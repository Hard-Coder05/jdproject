<?php
                $host = "localhost";
                $dbUsername = "root";
                $dbPassword="";
                $dbname = "jdProject";

                $conn = new mysqli($host,$dbUsername, $dbPassword, $dbname);
    
                if(mysqli_connect_error()){
                die('Connect_Error('.mysqli_connect_error().')'.mysqli_connect_error());
                }else{
                $sql = "SELECT * from work_order ";
                $result =$conn->query($sql);
                $number = $result->num_rows;
                if($number==0){
                echo "Sorry there is no work orders available. Wait you are being taken to the Work Order Portal.";
                echo "<script>setTimeout(\"location.href = 'html_main.php';\",6000);</script>";
                }else{
                while($row=$result->fetch_assoc()){
                $to = $row["res_p_EMAIL"];
                $subject = 'Pending Payment';
                $message = 'Payment of rupees '.$row["PO_amt"].' is pending for the work order id number '.$row["work_id"].'. Service is going to end on '.$row["Service_to"].' . Please pay attention!!!!!!!!!';
                $headers = "From: smishra1605@gmail.com\r\n";
                    $now = time(); 
                    $your_date = strtotime($row["Service_to"]);
                    $difference = $your_date-$now;
                    if(round($difference / (60 * 60 * 24))<=15){
                if(mail($to, $subject, $message, $headers)) {
                   echo "Mail sent successfully to ".$row["Responsible_Person"]."/n";
                     
                } else {
                   echo "ERROR SENDING MAIL to ".$row["res_p_EMAIL"];
                        
                }}
                    else{continue;}
                }
                    echo "Mail sent SUCCESSFULLY to all concerned people whose work order is going to finish in 15 or lesser days.";
                   echo "<script>setTimeout(\"location.href = 'html_main.php';\",10000);</script>"; 
                }
                }
?>