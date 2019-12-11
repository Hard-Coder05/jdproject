<html>
<head>
    <title>
        SignIn | JSPL
    </title>
    <link rel="icon" href="download.jfif">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style_signin.css">
</head>
<body>
    <div id="body">
        
            <div id="heading"><p>Jindal Steel & Power Limited</p></div><br>
        
        <div id="image"><img src="image_download.png" ></div><div id="image-text">    Registration Form</div><br>
        
        <hr width="80%" color="darkorange" noshade >    
        <br>
        <br>
        <div id="form">
            <br>
            <form action="php_signin.php" method="POST" >
            <label>First Name</label><br>
                <input type="text" name="f_name" style="width:90%; height: 30px; " required><br><br>
                <label>Last Name</label><br>
                <input type="text" name="l_name" style="width:90%; height: 30px;" required><br><br>
                <label>Email</label><br>
                <input type="text" name="email" style="width:90%; height: 30px;" required><br><br>
                <label>Employee Code</label><br>
                <input type="text" name="e_code" style="width:90%; height: 30px;" required><br><br>
                <label>Password</label><br>
                <input type="text" name="pwd" style="width:90%; height: 30px;" required><br><br><br>
                <div id="button"><input type="Submit" value="SignIn" style="width: 90%; height: 50px; border-radius: 25px; border: none; font-family:cursive; font-size: 30px; background-color: azure;"></div><br><br>
                <center>Already Registered?<a href="index.php" target="_self">LogIn Here</a></center>
            </form>
        </div>
    </div>
</body>

</html>