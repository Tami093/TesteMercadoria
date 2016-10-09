
<?php


$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "testeonline";
$conn = mysqli_connect($servidor,$usuario,$senha,$banco);

if(!$conn) { 
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
} 

?>