<html>
<head>
    <link rel="icon" href="download.jfif">
    <title>Work Order Portal | Search Results</title>
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
            <th>Responsible Person Email-Id</th>
            <th>Remark</th>
            <th>Category</th>
            </tr></thead>
            <tbody>
            <?php
                $work_id = $_POST['work_id'];
                $vendor_code = $_POST['vendor_code'];
                $service_provider = $_POST['service_provider'];
                $work_order = $_POST['work_order'];
                $refer_num = $_POST['refer_num'];
                $Current_Status = $_POST['Current_Status'];
                $Responsible_Person = $_POST['Responsible_Person'];
                $Category = $_POST['Category'];       
                $conn = mysqli_connect("localhost","root", "", "jdProject");
                if($conn->connect_error){
                die("Coneection failed:". $conn-> connect_error);
                                        }
                $sql = "SELECT * From work_order Where work_id like '%".$work_id."%' and vendor_code like '%".$vendor_code."%' and service_provider like '%".$service_provider."%' and work_order like '%".$work_order."%' and refer_num like '%".$refer_num."%' and Current_Status like '%".$Current_Status."%' and Responsible_Person like '%".$Responsible_Person."%' and Category like '%".$Category."%' ";
                
                $result =$conn->query($sql);
                if($result){
                $number =$result->num_rows;
                
                if($number>0){
                while($row=$result->fetch_assoc()){
                echo "<tr><td>".$row["work_id"]."</td><td>".$row["vendor_code"]."</td><td>".$row["service_provider"]."</td><td>".$row["work_order"]."</td><td>".$row["refer_num"]."</td><td>".$row["Service_from"]."</td><td>".$row["Service_to"]."</td><td>".$row["PO_amt"]."</td><td>".$row["Current_Status"]."</td><td>".$row["Responsible_Person"]."</td><td>".$row["res_p_EMAIL"]."</td><td>".$row["Remark"]."</td><td>".$row["Category"]."</td></tr>"; 
                }
                    echo "</table>"; 
                }
                else{
                echo "0 result";
                }
                }else{echo "Error occurred: ". $conn-> error;}
                
                ?>
                </tbody></table><br><br>
                <div id="footer"><br><p>Want to go back to Work Order Portal?? <a class="abcd" href="html_main.php">Click Here</a></p><br>
        
                </div>    
                </body>
                </html>