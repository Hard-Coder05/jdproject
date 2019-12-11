<?php
$work_id = $_POST['work_id'];

if(!empty($work_id)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword="";
    $dbname = "jdProject";
    
    $conn = new mysqli($host,$dbUsername, $dbPassword, $dbname);
    
    if(mysqli_connect_error()){
        die('Connect_Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT work_id From work_order Where work_id = ? Limit 1";
        $SQL = "DELETE FROM work_order where work_id = '$work_id';";
          
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("i",$work_id);
        $stmt->execute();
        $stmt->bind_result($work_id);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if($rnum==1){
            if ($conn->query($SQL) === TRUE) {
    echo "Record deleted successfully.You are being taken back to WORK ORDER PORTAL again.";
                echo "<script>setTimeout(\"location.href = 'html_main.php';\",6000);</script>";
} else {
                echo "Error deleting record: " . $conn->error;
                  
}  
        }else{
            echo "Sorry No record exists with this work order id. Wait you are being taken to the delete work order page again. Try with a correct work order id";
            echo "<script>setTimeout(\"location.href = 'html_delete.php';\",6000);</script>";    
        }
        $stmt->close();
        $conn->close();
    }
}
?> 