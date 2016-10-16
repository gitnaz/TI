<!DOCTYPE HTML>
<?php
session_start();
?>
<html lang="eng">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	
	
	<title>Sports and recreation center's webpage!</title>
	<meta name="description" content="A webpage dedicated to customers of our sports and recreation center." />
	<meta name="keywords" content="sport, recreation, center" />
</head>


<body>
	<div id="container">
	
	
		<div id="logo">
			<img src="pictures\logo.jpg" width="1000px" height="150px" />
		</div>
		
		
		<div id="subpages">
			<a href="news.html">
			<div id="news">
			News
			</div>	
			</a>
			
			
			<a href="pricings.html">
			<div id="pricings">
			Pricings
			</div>
			</a>
			
			
			<a href="schedule.html">
			<div id="schedule">
			Schedule
			</div>	
			</a>
			
			
			<a href="courses.html">
			<div id="courses">
			Courses
			</div>	
			</a>

			
			<a href="contact.html">
			<div id="contact">
			Contact
			</div>	
			</a>

			
			<a href="gallery.html">
			<div id="gallery">
			Gallery
			</div>	
			</a>


		
			<div id="panel">
			<?php
			if(isset($_SESSION['logged']))
			echo '<form action="logout.php" method="post"><input type="submit" id="logout" value="Logout"></form>';
			else{
				
			echo '
			<form action="login.php" method="post">
				<input type="textbox" id="login" name="login" placeholder="Login">
				
				<input type="password" id="pass" name="password" placeholder="Password">
				
				<input type="submit" id="send" value="Log in">
				
			</form>';
			}
			?>
			</div>
		</div>				
		<div style="clear: both;"></div>

		
		<div id="main">
			<div id="content">
			<?php
			if(isset($_SESSION['logged']))
			echo "<p>Hello  ".$_SESSION['login'].'!![<a href="logout.php"> Logout</a>] </p>';
			else
				echo "<p> Hello stranger</p>";
			?>
			
			</div>
			
			
			<div id="column">
				<div id="acc">
				Account
				</div>
				
				
				<div id="space">
				Space
				</div>
			</div>
		</div>
		<div style="clear: both;"></div>
		
		
		<div id="footer">
		Footer
		</div>
	</div>
	
</body>
</html>