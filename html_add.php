<html>
<head>
    <link rel="icon" href="download.jfif">
    <title>Work Order:Add | JSPL</title>
    <link href="style_add.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet">
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
    
    
            <script type="text/javascript">
                var monthtext=[01,02,03,04,05,06,07,08,09,10,11,12];
                var monthtext1=[01,02,03,04,05,06,07,08,09,10,11,12];
                function populatedropdown(dayfield, dayfield1, monthfield, monthfield1, yearfield, yearfield1){
                var today=new Date()
                var dayfield=document.getElementById(dayfield)
                var dayfield1=document.getElementById(dayfield1)
                var monthfield=document.getElementById(monthfield)
                var monthfield1=document.getElementById(monthfield1)
                var yearfield=document.getElementById(yearfield)
                var yearfield1=document.getElementById(yearfield1)
                for (var i=0; i<31; i++)
                dayfield.options[i]=new Option(i, i+1)
                dayfield.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
                    for (var i=0; i<31; i++)
                dayfield1.options[i]=new Option(i, i+1)
                dayfield1.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
                for (var m=0; m<12; m++)
                monthfield.options[m]=new Option(monthtext[m], monthtext[m])
                monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthtext[today.getMonth()], true, true) //select today's month
                    for (var m=0; m<12; m++)
                monthfield1.options[m]=new Option(monthtext1[m], monthtext1[m])
                monthfield1.options[today.getMonth()]=new Option(monthtext1[today.getMonth()], monthtext1[today.getMonth()], true, true) //select today's month
                var thisyear=today.getFullYear()
                for (var y=0; y<20; y++){
                yearfield.options[y]=new Option(thisyear, thisyear)
                thisyear+=1
                }
                yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
                    var thisyear=today.getFullYear()
                for (var y=0; y<20; y++){
                yearfield1.options[y]=new Option(thisyear, thisyear)
                thisyear+=1
                }
                yearfield1.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
                }
            </script>
    
    
   
</head>
<body>
    <div id="full">
    <div id="header"><p>Jindal Steel & Power Limited</p></div>
    <div id="image1"><a href="https://www.jindalsteelpower.com/"><body onload = "startTimer()">
       <img id="img" src="image_download.png"/></a></div>
        <hr class="style-eight" />
        <div id="header2"><p>You can add the Work Order here</p></div>
        
        
        
                <div id="form"><form action="php_add.php" method="POST" >
                    <label><center><b>WORK ORDER DETAILS</b></center></label><br><br>
                    <hr height="2 px">
                    <table class="unstyledTable">
<tbody>
<tr>
<td><label>Work id</label></td><td><label>Vendor Code</label></td></tr>
<tr>
<td><input type="text" name="work_id" style="width:90%; height: 30px; " required></td><td><input type="text" name="vendor_code" style="width:90%; height: 30px;" required></td></tr>
<tr>
<td><label>Service Provider</label></td><td><label>Work Order</label></td></tr>
<tr>
<td><input type="text" name="service_provider" style="width:90%; height: 30px;" required></td><td><input type="text" name="work_order" style="width:90%; height: 30px;" required></td></tr>
<tr>
<td><label>Reference Number</label></td><td><label>PO Amount</label></td></tr>
<tr>
<td><input type="text" name="refer_num" style="width:90%; height: 30px;" required></td><td><input type="text" name="PO_amt" style="width:90%; height: 30px;" required></td></tr>
<tr>
<td><label>Service from</label></td><td><label>Service to</label></td></tr>
<tr>
<td><select id="daydropdown" name="day">
                </select> 
                <select id="monthdropdown" name="month">
                </select> 
                <select id="yeardropdown" name="year">
                </select></td><td><select id="daydropdown1" name="day1">
                </select> 
                <select id="monthdropdown1" name="month1">
                </select> 
                <select id="yeardropdown1" name="year1">
                </select></td></tr>
<tr>
<td><label>Current Status</label></td><td> <label>Responsible Person</label></td></tr>
<tr>
<td><input type="text" name="Current_Status" style="width:90%; height: 30px;" required></td><td><input type="text" name="Responsible_Person" style="width:90%; height: 30px;" required></td></tr>
<tr>
<td><label>Responsible Person Email-Id</label></td><td><label>Remark</label></td></tr>
<tr>
<td><input type="text" name="res_p_EMAIL" style="width:90%; height: 30px;" required></td><td><input type="text" name="Remark" style="width:90%; height: 30px;" required></td></tr>
    <tr>
<td><label>Category</label></td></tr>
    <tr>
<td><input type="text" name="Category" style="width:90%; height: 30px;" required></td></tr>
</tbody>
</tr>
                    </table>
                <br><div id="button"><input type="Submit" value="Add Work Order" style="width: 90%; height: 50px; border-radius: 25px; border: none; font-family:cursive; font-size: 30px; background-color: azure;"></div>
            </form>
        </div>
        
        
        
            <script type="text/javascript">
            //populatedropdown(id_of_day_select, id_of_month_select, id_of_year_select)
            window.onload=function(){
            populatedropdown("daydropdown","daydropdown1", "monthdropdown","monthdropdown1", "yeardropdown","yeardropdown1")
            }
            </script>
            
        
            
        <br><br>
        
        
        
<div id="footer"><br><p>To go back to the Work Order Portal   <a class="abcd" href="html_main.php">Click Here</a></p></div>
    </div>    
</body>
</html>
