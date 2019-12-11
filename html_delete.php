<html>
<head>
    <link rel="icon" href="download.jfif">
    <title>Work Order: Delete | JSPL</title>
    <link href="style_delete.css" type="text/css" rel="stylesheet">
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
        
        <div id="header2"><p>You can delete the Work Order here</p></div>
        
        <div id="form">
                <br>
                <form action="php_delete.php" method="POST" >
                    <label><center><b>ENTER WORK ORDER ID</b></center></label><br><br>
                    <hr height="2 px">
                <label>Work id</label><br>
                <input type="text" name="work_id" style="width:90%; height: 30px;" required><br>
                <hr height="2 px">
                    <label><center><b>PRESS "DELETE" ONLY IF YOU ARE SURE.</b></center></label><br><br>
                <br><div id="button"><input type="Submit" value="Delete Work Order" style="width: 90%; height: 50px; border-radius: 25px; border: none; font-family:cursive; font-size: 30px; background-color: azure;"></div>
            </form>
        </div>
        
        
        <br><br>
        
        
        
<div id="footer"><br><p>To Go back to the Work Order Portal  <a class="abcd" href="html_main.php">Click Here</a></p><br></div>
    </div>    
</body>
</html>