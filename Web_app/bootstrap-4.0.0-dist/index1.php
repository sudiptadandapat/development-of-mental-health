<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
    
        .home{
            font-family: cursive;
            text-align: center;
            color: darkblue;
            font-size: 55px;
            margin-top: 50px;
            
        }    
        a{
            text-decoration: none;
        }
        .welcome{
            color:mediumvioletred;
            font-size: 40px;
            font-family: cursive;
            margin-left: 330px;
            text-align: center;
            margin-top: -250px;
        }
        .logout{
              font-size: 30px;
            font-family: serif;
            margin-left: 330px;
            text-align: center;
            margin-top: -20px;
            margin-left: 350px;
          
        }
        
        body{
            background-image: url("https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/YEsrgod/colorful-powder-particles-fly-after-being-exploded-against-white-background-slow-motion-unedited-version-is-included-at-the-end-of-clip_4ygq7rl4l__F0001.png");
            background-repeat:no-repeat;
            background-size: cover;
            
        }
        .img{
            float: right;
            margin-right: 20px;
        }
        ,img1{
            float: left;
            margin-left: 45px;
        }
    </style>
</head>
<body>

<div class="header">
    <h2 class="home"><a href="index.php">Home Page</a></h2>
</div>
    <div class="img">
    <img src="https://uploads.disquscdn.com/images/980474a298ec4bfab3caed0681825d43944960adf96fcfa2a57a732619d3df34.gif" width="300" height="400"/>
    </div>
    <div class="img1">
    <img src="https://uploads.disquscdn.com/images/980474a298ec4bfab3caed0681825d43944960adf96fcfa2a57a732619d3df34.gif" width="300" height="400"/>
    
    </div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p class="welcome">Welcome  <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p class="logout"> <a href="index.php?logout='1'" style="color: darkgreen;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>