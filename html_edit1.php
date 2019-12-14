<html>
<head>
    <link rel="icon" href="download.jfif">
    <title>Work Order: Edit | JSPL</title>
    <link href="style_edit.css" type="text/css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("img").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 3000);
          }

          var images = [], x = -1;
          images[0] = "image1.jpg";
          images[1] = "image2.jpg";
          images[2] = "image3.jpg";
          images[3] = "image4.jpg";
          images[4] = "image5.jpg";
          images[5] = "image_download.png";
      </script>
    
   
</head>
<body>
        <div id="full">
        <div id="header"><p>Jindal Steel & Power Limited</p></div>
        <div id="image1"><a href="https://www.jindalsteelpower.com/"><body onload = "startTimer()">
        <img id="img" src="image_download.png"/></a></div>
        <hr class="style-eight" />
        <div id="header2"><p>You can edit the Work Order here</p></div>
        

        
        <?php
        $work_id = $_POST['work_id'];
            
        $conn = mysqli_connect("localhost","root", "", "jdProject");
        if($conn->connect_error){
        die("Coneection failed:". $conn-> connect_error);
        }

        $sql = "SELECT * from work_order WHERE work_id = '$work_id';";
        $result =$conn->query($sql);
        $number = $result->num_rows;
        if($number>0){
        while($row=$result->fetch_assoc()){

        ?>
        
        
        <div id="form">
                <br>
                <form action="php_save.php" method="POST" >
                    <label><center><b>WORK ORDER DETAILS</b></center></label><br><br>
                    <hr height="2 px">
                <label>Work id</label><br>
                <input type="text" name="work_id" style="width:90%; height: 30px; " value="<?php echo $row ["work_id"]; ?> "><br><br>
                <label>Vendor Code</label><br>
                <input type="text" name="vendor_code" style="width:90%; height: 30px;" value="<?php echo $row ["vendor_code"]; ?> "><br><br>
                <label>Service Provider</label><br>
                <input type="text" name="service_provider" style="width:90%; height: 30px;" value="<?php echo $row ["service_provider"]; ?> "><br><br>
                <label>Work Order</label><br>
                <input type="text" name="work_order" style="width:90%; height: 30px;" value="<?php echo $row ["work_order"]; ?> "><br><br>
                <label>Reference Number</label><br>
                <input type="text" name="refer_num" style="width:90%; height: 30px;" value="<?php echo $row ["refer_num"]; ?> "><br><br>
                <label>Service from</label><br>
                <input type="text" name="Service_from" style="width:90%; height: 30px;" value="<?php echo $row ["Service_from"]; ?> "><br><br>
                <label>Service to</label><br>
                <input type="text" name="Service_to" style="width:90%; height: 30px;" value="<?php echo $row ["Service_to"]; ?> "><br><br>
                <label>PO Amount</label><br>
                <input type="text" name="PO_amt" style="width:90%; height: 30px;" value="<?php echo $row ["PO_amt"]; ?> "><br><br>
                <label>Current Status</label><br>
                <input type="text" name="Current_Status" style="width:90%; height: 30px;" value="<?php echo $row ["Current_Status"]; ?> "><br><br>
                <label>Responsible Person</label><br>
                <input type="text" name="Responsible_Person" style="width:90%; height: 30px;" value="<?php echo $row ["Responsible_Person"]; ?> "><br><br>
                    <label>Responsible Person Email Id</label><br>
                <input type="text" name="res_p_EMAIL" style="width:90%; height: 30px;" value="<?php echo $row ["res_p_EMAIL"]; ?> "><br><br>
                <label>Remark</label><br>
                <input type="text" name="Remark" style="width:90%; height: 30px;" value="<?php echo $row ["Remark"]; ?> "><br><br>
                <label>Category</label><br>
                <input type="text" name="Category" style="width:90%; height: 30px;" value="<?php echo $row ["Category"]; ?> "><br><br>
                <br><div id="button"><input type="Submit" value="SAVE" style="width: 90%; height: 50px; border-radius: 25px; border: none; font-family:cursive; font-size: 30px; background-color: azure;"></div>
            </form>
        </div>
        <?php
        }
echo "</table>"; 
}
else{
echo "No work order available with this work id. Wait you are being taken to the Work Order Portal so TRY AGAIN";
            echo "<script>setTimeout(\"location.href = 'html_main.php';\",6000);</script>"; 
}
        ?>
        
        
          
            
        
            

        <br><br>
        
        
        
<div id="footer"><br><p>To go back to the Work Order Portal   <a class="abcd" href="html_main.php">Click Here</a></p><br></div>
    </div>    
</body>
</html>
