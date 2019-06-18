

<!DOCTYPE html>
<html>    
<head>
        <title>Mental Health</title>
        <link href="bootstrap-4.0.0-dist/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <div id="main-header">
	<div id="logo">
	<span id="ist">MENTAL</span><span id="iind">Health</span>
	</div>
             
            <div class="main-nav">
                
                <ul>
                <li><a href="#slide1">Home</a></li>
                <li><a href="#slide2">Learn</a></li>
                <li><a href="#slide3">Live</a></li>
                <li><a href="#slide4">Explore</a></li>
                <li><a href="help.html">Help</a></li>
                
                </ul>
                </div>
                
            
            
            <div class="head">
                <div class="btn-awesome">
                <a href="login.php" class="btn btn-half">Login</a>
                <a href="register.php" class="btn btn-full">Register</a>
                 <a href="login.php" class="btn btn-mid">Test Yourself..!</a>
                </div>
                </div>
            </header>

           

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
    <div id="slide1">
 <div class="content">
     <h1><i>Its Okay If The Only Thing</br>You Did Today Was Breathe..!!</i></h1>
     
</div>
</div>
<div id="slide2">
<div class="content">
<div class="learn">
    <h1 class="quotes1"><a href="learn.html">LEARN!</a></h1>
    <h3>What are mental disorders?</br> How can we diagonise it?</br> Find it out yourself and cure it..</h3>
    <h1 class="learn1"><a href="learn.html">Learn More </a></h1>
</div>
</div>
</div>
<div id="slide3">
<div class="content">
<div class="live">
    <h1 class="quotes2"><a href="live.html">LIVE</a></h1>
    <h3>"Life is an ART</br> of drawing</br> with an Eraser...!!"</h3>
<h1 class="liveli"><a href="live.html">Learn More </a></h1>
</div>
</div>
</div>
<div id="slide4">
<div class="content">
<div class="explore">
    <h1 class="quotes3"><a href="explore.html">EXPLORE </a></h1>
    <h3>"Even Your </br>Worst Days Will Pass!!"</h3>
    <h1 class="liveli"><a href="explore.html">Learn More </a></h1>
</div>
</div>
</div>

</body>
</html>