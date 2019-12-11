<?php
$work_id = $_POST['work_id'];
$vendor_code = $_POST['vendor_code'];
$service_provider = $_POST['service_provider'];
$work_order = $_POST['work_order'];
$refer_num = $_POST['refer_num'];
$d='-';
$Service_from = $_POST['year'].$d.$_POST['month'].$d.$_POST['day'];
$Service_to =$_POST['year1'].$d.$_POST['month1'].$d.$_POST['day1'];
$PO_amt = $_POST['PO_amt'];
$Current_Status = $_POST['Current_Status'];
$Responsible_Person = $_POST['Responsible_Person'];
$Remark = $_POST['Remark'];
$Category = $_POST['Category'];

if(!empty($work_id)||!empty($vendor_code)||!empty($service_provider)||!empty($work_order)||!empty($refer_num)||!empty($Service_form)||!empty($Service_to)||!empty($PO_amt)||!empty($Current_Status)||!empty($Responsible_Person)||!empty($Remark)||!empty($Category)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword="";
    $dbname = "jdProject";
    
    $conn = new mysqli($host,$dbUsername, $dbPassword, $dbname);
    
    if(mysqli_connect_error()){
        die('Connect_Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }else{
    
        
        $SELECT = "SELECT work_id From work_order Where work_id = ? Limit 1";
        $INSERT = "INSERT Into work_order(work_id, vendor_code, service_provider, work_order, refer_num, Service_from, Service_to, PO_amt, Current_Status, Responsible_Person, Remark, Category) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("i",$work_id);
        $stmt->execute();
        $stmt->bind_result($work_id);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if($rnum==0){
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("isssississss", $work_id, $vendor_code, $service_provider, $work_order, $refer_num, $Service_from, $Service_to, $PO_amt, $Current_Status, $Responsible_Person, $Remark, $Category);
            $stmt->execute();
            
            echo "New Work Order inserted sucessfully. Wait  you are being taken to the Work Order Portal.";
            echo "<script>setTimeout(\"location.href = 'html_main.php';\",6000);</script>";  
        }else{
            echo "Another work order has already been registered with this work order id. Wait you are being taken to the Add Work Order Page again. Try with a new Work Order id";
            echo "<script>setTimeout(\"location.href = 'html_add.php';\",6000);</script>";    
        }
        $stmt->close();
        $conn->close();
    }
}else{
    echo "All field are required";
    die();
}
?>
}