<html>
<head>
    <link rel="icon" href="download.jfif">
    <title>Work Order Portal | JSPL</title>
    <link href="style_main.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet">
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
    <div class="navbar">
            <a class="active" href="html_main.php">Home</a>
            <a  href="html_add.php"> Add </a>
            <a href="html_edit.php"> Edit </a>
            <a  href="html_delete.php"> Delete </a>
            <a  href="index.php"> LogOut </a>
        </div>
    <div class="navbar1"><p><center><b>Want to SEARCH a Work Order?? </b><a class="abcd" href="html_search.php">Click Here</a></center></p></div>
    <div id="full">
    <div id="header">Jindal Steel & Power Limited</div>
    <div id="image1"><a href="https://www.jindalsteelpower.com/"><body onload = "startTimer()">
       <img id="img" src="image_download.png"/></a></div>
        <hr class="style-eight" />
        <div id="header2"><p>Welcome to the Work Order Status Portal</p></div>
        <br>
        <div id="footer">
        <p>Send mail to ALL concerned people to pay attention to their Work Orders<a class="abcd" href="php_mail.php">Click Here</a><br><br>
       Send mail OF INTIMATION<a class="abcd" href="php_mail15.php">Click Here</a></p>
            <br><br><br><br></div> 
        
        
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
                <th>Responsible Person Email-Id</th>
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
    $now = time(); 
                    $your_date = strtotime($row["Service_to"]);
                    $difference = $your_date-$now;
   if(round($difference / (60 * 60 * 24))<=15){
    echo "<tr><td bgcolor=";
        echo "yellow";
        echo ">".$row["work_id"]."</td><td>".$row["vendor_code"]."</td><td>".$row["service_provider"]."</td><td>".$row["work_order"]."</td><td>".$row["refer_num"]."</td><td>".$row["Service_from"]."</td><td>".$row["Service_to"]."</td><td>".$row["PO_amt"]."</td><td>".$row["Current_Status"]."</td><td>".$row["Responsible_Person"]."</td><td>".$row["res_p_EMAIL"]."</td><td>".$row["Remark"]."</td><td>".$row["Category"]."</td></tr>"; }
    if(round($difference / (60 * 60 * 24))>15){
    echo "<tr><td bgcolor=";
        echo "green";
        echo ">".$row["work_id"]."</td><td>".$row["vendor_code"]."</td><td>".$row["service_provider"]."</td><td>".$row["work_order"]."</td><td>".$row["refer_num"]."</td><td>".$row["Service_from"]."</td><td>".$row["Service_to"]."</td><td>".$row["PO_amt"]."</td><td>".$row["Current_Status"]."</td><td>".$row["Responsible_Person"]."</td><td>".$row["res_p_EMAIL"]."</td><td>".$row["Remark"]."</td><td>".$row["Category"]."</td></tr>"; }
    if(round($difference / (60 * 60 * 24))<0){
    echo "<tr><td bgcolor=";
        echo "red";
        echo ">".$row["work_id"]."</td><td>".$row["vendor_code"]."</td><td>".$row["service_provider"]."</td><td>".$row["work_order"]."</td><td>".$row["refer_num"]."</td><td>".$row["Service_from"]."</td><td>".$row["Service_to"]."</td><td>".$row["PO_amt"]."</td><td>".$row["Current_Status"]."</td><td>".$row["Responsible_Person"]."</td><td>".$row["res_p_EMAIL"]."</td><td>".$row["Remark"]."</td><td>".$row["Category"]."</td></tr>"; }
}
echo "</table>"; 
}
else{
echo "0 result";
}
        ?>
            </tbody></table><br>  
</body>
</html>
