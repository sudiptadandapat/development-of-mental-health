<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
<style>
    .input-group{
        
        text-align:center;
        float:inherit;
        box-sizing: border-box;
    }    
    .login{
        font-family: monospace;
        font-size: 50px;
        text-align: center;
    }
    .img{
        margin-left: 630px;
    }
    
</style>
</head>
<body>
  <div class="header">
  	<h2 class="login">Login</h2>
  </div>
	 <div class="img">
         <img src="http://www.aristocrattraining.com/upload/online.gif" width="250" height="250" />
    </div>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label style="font-size: 30px">Username</label>
  		<input type="text" name="username" required/>
      </div></br>
  	<div class="input-group">
  		<label style="font-size: 30px">Password</label>
  		<input type="password" name="password" required/>
  	</div></br>
  	<div class="input-group">
  		<button type="submit" name="login_user" style="background-color: lightblue; font-size: 25px;">Login</button>
  	</div>
  	<p style="text-align: center">
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
      
       <footer style="padding: 10px 0;background-color: #101010;color:#9d9d9d;bottom: 0;width: 100%;">
            <div class="container">
                <center>
                    Copyright © Check Your Mental Health. All Rights Reserved and Contact Us: +91 90000 00000Ɖ a
                </center>
            </div>
        </footer>
</body>
</html>