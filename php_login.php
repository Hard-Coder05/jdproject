<?php
$e_code=$_POST['e_code'];
$pwd=$_POST['pwd'];

if(!empty($e_code)||!empty($pwd)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword="";
    $dbname = "jdProject";
    
    $conn = new mysqli($host,$dbUsername, $dbPassword, $dbname);
    if(mysqli_connect_error()){
        die('Connect_Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT * From register Where e_code = ? AND pwd = ? Limit 1";
    
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("is", $e_code , $pwd);
        $stmt->execute();
        $stmt->bind_result($f_name, $l_name, $email, $e_code, $pwd);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if($rnum==1){
            
            echo "You have sucessfully Logged in. Wait the portal is being loaded.";
            echo "<script>setTimeout(\"location.href = 'html_main.php';\",6000);</script>";

        }else{
            echo "You have entered wrong password. Wait you are being taken to the login page again.";
            echo "<script>setTimeout(\"location.href = 'index.php';\",6000);</script>";
        }
        $stmt->close();
        $conn->close();
    
    }
}else{
    echo "All field are required";
    die();
}



?>