<?php 
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- <body style="background-color:#7f8c8d"> -->
<div id="container">
    <!-- <center> -->
        <h2>Login Page<h2>
        <form class="myform" action="Login.php" method="post">
            <p>Login Form</p>
            <label><b>Username/Email id</b></label></br>
            <input type="text" class="inputvalue" placeholder="Type user name"/></br>
            <label><b>Password</b></label></br>
            <input type="text" class="inputvalue" placeholder="Type password"/></br>
            <input type="submit" class="loginbutton" value="login"/></br>
           <a href="Register.php"><input type="button" id="registerbutton" value="Register" /></a>
        </form>
<!-- </center> -->
</div>
</body>
</html>