<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="temp.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Temprature</title>

</head>
<body>
	<header  class="text-center m-4">
				<h1>Temperature Conversion</h1>
	</header>
	<div class="main">
			<div class="img">
				<img src="reading.svg">
			</div>
		<div class="form">
			<form method="POST">
				<input  type="text" name="text" placeholder="Enter Number" class="input-box"><br><br>
			<div class="selection">
				celc-<input type="radio" name="units" value="celc">
				faren-<input type="radio" name="units" value="faren"><br><br>
			</div>
				<button type="submit" name="submit" class="button">Convert Now</button>
				<p>
		<?php

if (isset($_POST['submit'])) {
	$text = $_POST['text'];
	$temp = $_POST['units'];

	if ($temp == "celc") {
		$celc = ($text * 9 / 5) + 32;
		echo "{$text} in celcius is {$celc}";
	} else {
		$faren = ($text - 32) * 5 / 9;
		echo "{$text} in celcius is {$faren}";
	}

}

?><p>
</form>
		</div>

	</div>
	<footer class="text-center ">
		<h3>Made with <span style="color:red">❤︎</span> | Av$hek</h3>
	</footer>
</body>
</html>