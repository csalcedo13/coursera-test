<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Carlos Eduardo Salcedo Gamero - Guessing game </title>
</head>
<body>
	<h1>Heloo everyone, welcome to my guessing game</h1>
	
	
<?php
  if ( ! isset($_GET['guess']) ) { 
    echo("You need to try a number");
  } else if ( strlen($_GET['guess']) < 1 ) {
    echo("Your guess is too short");
  } else if ( ! is_numeric($_GET['guess']) ) {
    echo("Your need to put a number");
  } else if ( $_GET['guess'] < 91 ) {
    echo("Your guess is too low");
  } else if ( $_GET['guess'] > 91 ) {
    echo("Your guess is too high");
  } else {
    echo("Congratulations - You are right");
  }
?>
	 
	
</body>
</html>