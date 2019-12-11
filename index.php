<html>
    <head>
        <link rel="icon" href="download.jfif">
        <link rel="stylesheet" type="text/css" href="style_index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            LogIn | JSPL
        </title>        
    </head>
    <body>
        <div id="body">
        
            <div id="heading"><p>Jindal Steel & Power Limited</p></div><br>
        
        <div id="image"><img src="image_download.png" ></div><br><div id="image-text">    Login</div><br>
        
        <hr >    
        <br>
        <br>
        <div id="form">
            <br>
            <form method="POST" action="php_login.php" >
            <label>Emoloyee Code</label><br>
                <input type="text" name="e_code" style="width:90%; height: 30px;"><br><br>
                <label>Password</label><br>
                <input type="text" name="pwd" style="width:90%; height: 30px;"><br><br>
                
                <div id="button"><input type="Submit" value="LogIn" style="width: 90%; height: 50px; border-radius: 25px; border: none; font-family:cursive; font-size: 30px; background-color: azure;"></div><br><br>
                <center>New User?<a href="html_signin.php" target="_self">SignIn Here</a></center>
            </form>
        </div>
    </div>
    </body>
</html>