<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Jumbo
		</title>
		<link rel='stylesheet' type='text/css' href='./css/style.css' />
	</head>
	<body>
		<div id='container'>
			<div id='banner'>
			</div>
			<div id='content'>
			<div id='link'>
				<?php include("./link.php"); ?>
			</div>
			<?php include ("./navigation.php"); ?>
			
		</div>
		<div id='footer'>
		<?php include("./footer.php"); ?>
		</div>	
	<body>
</html>	