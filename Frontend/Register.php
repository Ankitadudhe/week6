
<!DOCTYPE html>
<html>
<head>
<title>Register Form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- <body style="background-color:#7f8c8d"> -->
<div id="container">
    <h2>Register Form<h2>
        <form class="myform" action="../Backend/Login_validate.php" method="post">
            <label><b>Username</b></label></br>
            <input  name="username"type="text" class="inputvalue" placeholder="Type user name" require/></br>
            <label><b>Password</b></label></br>
            <input name="password"type="password" class="inputvalue" placeholder="Type password"require/></br>
            <label><b>Confirm Password</b></label></br>
            <input name="confirmpassword" type="password" class="inputvalue" placeholder="confirm password"require/></br>
            <label><b>email</b></label></br>
            <input name="email" type="text" class="inputvalue" placeholder="Type email"require/></br>
            <label><b>Address</b></label></br>
            <input name="Address" type="text" class="inputvalue"/></br>
            <label><b>Phone Number</b></label>
            <input name="Phone_number" type="text"class="inputvalue"/></br>
            <input name="submit"type="submit" class="sign_up_button" value="Sign up"/></br>
            <a href="Login.php"><input type="button" id="backbutton" value="Back"/></a>
        </form>
    </div>
</body>
</html>