<?php
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$e_code = $_POST['e_code'];
$pwd = $_POST['pwd'];

if(!empty($f_name)||!empty($l_name)||!empty($email)||!empty($e_code)||!empty($pwd)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword="";
    $dbname = "jdProject";
    
    //creating connection
    $conn = new mysqli($host,$dbUsername, $dbPassword, $dbname);
    if(mysqli_connect_error()){
        die('Connect_Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT e_code From register Where e_code = ? Limit 1";
        $INSERT = "INSERT Into register(f_name, l_name, email, e_code, pwd) values(?, ?, ?, ?, ?)";
        
        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("i",$e_code);
        $stmt->execute();
        $stmt->bind_result($e_code);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if($rnum==0){
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssis",$f_name, $l_name, $email, $e_code, $pwd);
            $stmt->execute();
            
            echo "New record inserted sucessfully. Wait  you are being taken to the login page.";
            echo "<script>setTimeout(\"location.href = 'index.php';\",6000);</script>";  
        }else{
            echo "Someone has already registered with this employee code. Wait you are being taken to the sigin page again. Try with a new password";
            echo "<script>setTimeout(\"location.href = 'html_signin.php';\",6000);</script>";    
        }
        $stmt->close();
        $conn->close();
    }
}else{
    echo "All field are required";
    die();
}
?>