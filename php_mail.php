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
                echo "no work order is available on the Work Order Portal.";
                echo "<script>setTimeout(\"location.href = 'html_main.php';\",6000);</script>";
                }else{
                while($row=$result->fetch_assoc()){
                $to = $row["res_p_EMAIL"];
                $subject = 'Pending Payment';
                $message = 'You are responsible for the work order whose id is '.$row["work_id"].' . Please pay ttention to the work order and update the current status of it.';
                $headers = "From: smishra1605@gmail.com\r\n";
                if(mail($to, $subject, $message, $headers)) {
                  echo "message sent successfully to ".$row["Responsible_Person"]."/n"; 
                } else {           
                }
                }
                    echo "SUCCESS. The mail is successfully sent to all the work order responsible people.";
                    echo "<script>setTimeout(\"location.href = 'html_main.php';\",6000);</script>"; 
                }
                }
?>
