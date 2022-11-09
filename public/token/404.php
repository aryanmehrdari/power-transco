<?php
session_start();
$_SESSION['error'] = "my404";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Page Not Found</title>

	<link type="text/css" rel="stylesheet" href="/token/css/404style.php" />
</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>404</h1>
				<h2>F*ck You</h2>
			</div>
			<a href="/token/">HomePage</a>
		</div>
	</div>

</body>

</html>
