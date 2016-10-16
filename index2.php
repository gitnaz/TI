<!DOCTYPE HTML>
<?php
session_start();
?>
<html lang="eng">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	
	<title>Projekt</title>
	
	<meta name="description" content="Opis w Google" />
	<meta name="keywords" content="s³owa, kluczowe, wypisane, po, przecinku" />
	
</head>

<body>
	<div id="container">
		<div id="logo">
			<img src="logo.jpg" width="100%" height="100%" />
		</div>
		
		<div id="subpages">
			<div id="news">
			News
			</div>		

			<div id="pricings">
			Pricings
			</div>	

			<div id="schedule">
			Schedule
			</div>	

			<div id="classes">
			Classes
			</div>	

			<div id="empl">
			Employees and contact
			</div>	

			<div id="gallery">
			Gallery
			</div>	

			<div id="login">
			<?php
			if(isset($_SESSION['logged']))
			echo "<p>Hello  ".$_SESSION['login'].'!![<a href="logout.php"> Logout</a>] </p>';
			else
				echo "<p> Hello stranger</p>";
			?>
			</div>				
			<div style="clear: both;"></div>
		</div>
		
		<div id="main">
			<div id="content">
			Content
			</div>
			
			<div id="column">
				<div id="acc">
				
				
				
				<form action="login.php" method="post">
				Login </br> <input type="text" name="login" /></br>
				Password </br> <input type="password" name="password" /></br>
				<input type="submit" value="Log in"/>
				
				
				<?php
				if(isset($_SESSION['error']))
				echo $_SESSION['error'];
				?>
				
				</form>
				<?php
				if(isset($_SESSION['logged']))
				echo '<a href="logout.php">Logout</a>';
				?>
				
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