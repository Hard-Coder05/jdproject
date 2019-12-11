<html>
<head>
    <link rel="icon" href="download.jfif">
    <title>Work Order Portal | JSPL</title>
    <link href="style_main.css" type="text/css" rel="stylesheet">
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
        
        <div id="header2"><p>Welcome to the Work Order Status Portal</p></div>
        
        <table class="table1">
            <thead>
            <tr>
            <th>Work id</th>
            <th>Vendor Code</th>
            <th>Service Provider</th>
            <th>Work Order</th>
            <th>Reference Number</th>
            <th>Service from</th>
            <th>Service to</th>
            <th>PO Amount</th>
            <th>Current Status</th>
            <th>Responsible Person</th>
            <th>Remark</th>
            <th>Category</th>
            </tr></thead>
            <tbody>
            <?php
        $conn = mysqli_connect("localhost","root", "", "jdProject");
        if($conn->connect_error){
        die("Coneection failed:". $conn-> connect_error);
}

$sql = "SELECT * from work_order; ";
$result =$conn->query($sql);
$number = $result->num_rows;
if($number>0){
while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["work_id"]."</td><td>".$row["vendor_code"]."</td><td>".$row["service_provider"]."</td><td>".$row["work_order"]."</td><td>".$row["refer_num"]."</td><td>".$row["Service_from"]."</td><td>".$row["Service_to"]."</td><td>".$row["PO_amt"]."</td><td>".$row["Current_Status"]."</td><td>".$row["Responsible_Person"]."</td><td>".$row["Remark"]."</td><td>".$row["Category"]."</td></tr>"; 
}
echo "</table>"; 
}
else{
echo "0 result";
}
        ?>
            </tbody></table><br><br>
        <div id="footer"><br><p>Want to ADD New Work Orders?? <a class="abcd" href="html_add.php">Click Here</a></p><br>
        <p>Want to DELETE a Work Order??<u>Copy the work id</u> for the further process...<a class="abcd" href="html_delete.php">Click Here</a></p><br>
        <p>Want to EDIT a Work Order??<u>Copy the work id</u> for the further process...<a class="abcd" href="html_edit.php">Click Here</a></p><br>
        <p>Send mail to the concerned people regarding the pending payments<a class="abcd" href="php_mail.php">Click Here</a></p><br>
        <p>Want to Log Out?<a class="abcd" href="index.php">Click Here</a></p><br></div>
    </div>    
</body>
</html>