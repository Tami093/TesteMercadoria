<?php


$codigo = $_POST['codMerc'];
$tipo = $_POST['tipoMerc'];
$nome = $_POST['nomeMerc'];
$qtd = $_POST['qtdMerc'];
$preco = $_POST['precoMerc'];
$tipoNegocio = $_POST['tipoNegocio'];

include_once("conexao.php");
$inserir = "INSERT INTO mercadorias(codigo,tipo,nome,qtd,preco,tipoNegocio) VALUES($codigo,'$tipo','$nome',$qtd,$preco,'$tipoNegocio')";
$resultado = mysqli_query($conn, $inserir);

if (!$resultado) {

	 die("Não possível inserir os dados verifique a conexão com banco!" . mysqli_error($conn));
	 exit;
}
header("Location: lista.php");

?>
