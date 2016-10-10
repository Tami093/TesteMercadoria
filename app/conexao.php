
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "testeonline";

// string de conexão com bd
$conn = mysqli_connect($servidor,$usuario,$senha,$banco);

// verifica se a conexão com banco de dados 
if(!$conn) { 
	echo "Error: Não possível conecta-se ao MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
} 

?>