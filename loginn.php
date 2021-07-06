<?php
	session_start();
	if(isset($_SESSION['url']))
	{
		$url=$_SESSION['url'];
	}
	else
	{
		$url="signupp.php";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<style>
body{
    margin: 0;
    padding: 0;
    background: url(h.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;

}

.loginbox{
    width: 320px;
    height: 420px;
    background: black;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

/* .avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px)
} */

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #fff;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}
.ns{
    background-image:url(h.jpg);
    background-size: cover;

}
.main{
    height:600px;
    background-size: cover;
    width:1200px;
}
.loginbox a:hover
{
    color:#fb2525;
}
</style>
<div class="ns">
<img  class=" main"src="images/h.jpg"></img>
  <div class="loginbox modal-content animate">
   
        <h1>Login Here</h1>
        <form  action="aboutus.php" method="post">
            <p>Username</p>
            <input type="text" name="usergmail" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password">
            <input type="submit" name="login_btn" value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="signupp.php">Don't have an account?</a>
        </form>
        </div>
   </div>

   
</body>
</html>