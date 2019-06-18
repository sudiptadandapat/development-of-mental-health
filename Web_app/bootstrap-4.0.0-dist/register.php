<?php include('server.php') ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
        <link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<style>
    form{
        align-items: center;
    }
</style>
</head>
 
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                    </button>
                    <a href="login.php" class="navbar-brand">CHECK YOUR MENTAL HEALTH</a>
                </div>
                <div class="collapse navbar-collapse id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="register.php"><span class="glyphicon glyphicon-user">
                                    SIGNUP</span>
                            </a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in">
                                        LOGIN</span>
                            </a></li>
                    </ul>
                </div>
            </div> 
        </nav>
<div class="container">
	<form class="form-horizontal" id="registration" method="post" action="register.php">
        <?php include('errors.php'); ?>                                                                               
            <h1></h1>
            <br>
		<fieldset>
			<legend><strong>Signup</strong></legend>
			<div class="control-group">
				<label class="control-label">Username:</label>
				<div class="controls">
                                    <input type="text" id="username" name="username" placeholder="username" value="<?php echo $username; ?>">
				</div>
			</div>
            <div class="control-group">
				<label class="control-label">Gender:</label>
				<div class="controls">
                                    <input type="radio" id="username" name="sex" value="M"/><strong>Male </strong>
                                    <input type="radio" id="username" name="sex" value="F"/><strong>Female </strong>                                                  
				</div>
			</div>                                                                                                
			<div class="control-group">
				<label class="control-label">Email:</label>
				<div class="controls">
                                    <input type="text" id="email" name="email" placeholder="email" value="<?php echo $email; ?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password:</label>
				<div class="controls">
                                    <input type="password" id="password" name="password" placeholder="password">
				</div>
                        </div>
                                                                                                           <div class="control-group">
				<label class="control-label">Confirm Password:</label>
				<div class="controls">
                                    <input type="password" id="cpassword" name="cpassword" placeholder="password">
				</div>
                        </div>
			<div class="control-group">
				<label class="control-label">Contact:</label>
				<div class="controls">
                                    <input type="numbers" id="contact" name="contact" placeholder="contact" value="<?php echo $contact; ?>">
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label">City:</label>
				<div class="controls">
                                    <input type="text" id="city" name="city" placeholder="city" value="<?php echo $city; ?>">
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label">Address:</label>
				<div class="controls">
                                    <input type="text" id="address" name="address" placeholder="address" value="<?php echo $address; ?>">
				</div>
			</div>
                                                                                                     
        <div class="control-group">
				<label class="control-label">Institute Name</label>
				<div class="controls">
                                    <input type="text" id="institute" name="institute" placeholder="institute name/place of work" value="<?php echo $institute; ?>"required/>
				</div>
			</div>
            <div class="control-group">
				<label class="control-label">Department</label>
				<div class="controls">
                                    <input type="text" id="department" name="department" placeholder="department name" value="<?php echo $department; ?>"required/>
				</div>
			</div>
               
          <div class="control-group">
				<label class="control-label">Friends Details:</label>
				<div class="controls">
                                    <input type="text" id="f1name" name="f1name" placeholder="Friends1 name" value="<?php echo $f1name; ?> ">
                                     <input type="text" id="f1email" name="f1email" placeholder="email id" value="<?php echo $f1email; ?> ">
                                     <input type="text" id="f1contact" name="f1contact" placeholder="contact no." value="<?php echo $f1contact; ?>"></br>
                                     <input type="text" id="f2name" name="f2name" placeholder="Friends2 name" value="<?php echo $f2name; ?>">
                                     <input type="text" id="f2email" name="f2email" placeholder="email id" value="<?php echo $f2email; ?>">
                                     <input type="text" id="f2contact" name="f2contact" placeholder="contact no." value="<?php echo $f2contact; ?>"></br>
                                    <input type="text" id="f3name" name="f3name" placeholder="Friends3 name" value="<?php echo $f3name; ?>">
                                     <input type="text" id="f3email" name="f3email" placeholder="email id" value="<?php echo $f3email; ?>">
                                     <input type="text" id="f3contact" name="f3contact" placeholder="contact no." value="<?php echo $f3contact; ?>">                                                              
                                                                                                  
				</div>
			</div>                                                                                                                
			<div class="control-group">
				<label class="control-label"></label>
				<div class="controls">
					<button type="submit" class="btn btn-success" name="reg_user" >Submit</button>
				</div>
			</div>
		</fieldset>
	</form>
                                                                 
                                                                                             
</div>
    <footer style="padding: 10px 0;background-color: #101010;color:#9d9d9d;bottom: 0;width: 100%;">
            <div class="container">
                <center>
                    Copyright © Check Your Mental Health. All Rights Reserved and Contact Us: +91 90000 00000Ɖ a
                </center>
            </div>
        </footer>
    </body>
</html>
