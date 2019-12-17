<html>
<head>
    
    <link rel="icon" href="download.jfif">
    <title>Work Order: Search | JSPL</title>
    <link href="style_search.css" type="text/css" rel="stylesheet">
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
        
        <div id="header2"><p>You can Search the Work Order here</p></div>
        <div id="form">
                <br>
                <form action="html_search1.php" method="POST" >
                    <label><center><b>GIVE THE HINT AND PRESS THE FIND BUTTON</b></center></label><br><br>
                    <hr height="2 px">
                <label>Work id</label><br>
                <input type="text" name="work_id" style="width:90%; height: 30px; " ><br><br>
                <label>Vendor Code</label><br>
                <input type="text" name="vendor_code" style="width:90%; height: 30px;" ><br><br>
                <label>Service Provider</label><br>
                <input type="text" name="service_provider" style="width:90%; height: 30px;" ><br><br>
                <label>Work Order</label><br>
                <input type="text" name="work_order" style="width:90%; height: 30px;" ><br><br>
                <label>Reference Number</label><br>
                <input type="text" name="refer_num" style="width:90%; height: 30px;" ><br><br>
                
                <label>Current Status</label><br>
                <input type="text" name="Current_Status" style="width:90%; height: 30px;" ><br><br>
                <label>Responsible Person</label><br>
                <input type="text" name="Responsible_Person" style="width:90%; height: 30px;" ><br><br>
                <label>Category</label><br>
                <input type="text" name="Category" style="width:90%; height: 30px;" ><br><br>
                <br><div id="button"><input type="Submit" value="Find" style="width: 90%; height: 50px; border-radius: 25px; border: none; font-family:cursive; font-size: 30px; background-color: azure;"></div>
            </form>
        </div>
        
        <br><br>
<div id="footer"><br><p>To Go back to the Work Order Portal  <a class="abcd" href="html_main.php">Click Here</a></p><br></div>
    </div>    
</body>
</html>
    
    
    
    
    
    
    
    
    
                    