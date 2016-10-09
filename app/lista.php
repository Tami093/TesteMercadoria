<?php
  include_once("conexao.php");
// consulta elemetos inseridos
  $consulta = "SELECT * FROM mercadorias";
  $resultado = mysqli_query($conn, $consulta) or die (mysqli_error());
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de mercadorias</title>
    <link rel="stylesheet" type="text/css" href="../css/cssIndex.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<h1>Lista de mercadorias</h1>
<br>
<div id='tabela' class="table table-striped table-responsive">
  <fieldset>
    <table  class="table table-striped">
        <tr>
            <th>Código</th>
            <th>Tipo</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Tipo negócio</th>
        </tr>
        <?php while($registro = mysqli_fetch_object($resultado)) : ?>
        <tr>
          <td><?php echo $registro->codigo; ?></td>
          <td><?php echo $registro->tipo; ?></td>
          <td><?php echo $registro->nome; ?></td>
          <td><?php echo $registro->qtd; ?></td>
          <td>R$ <?php echo $registro->preco; ?></td>
          <td><?php echo $registro->tipoNegocio; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    </fieldset>
    <br>
    <div id="botao">
    <a href="index.php"><input type="submit" class="btn btn-success" value="Voltar"/></a>
    </div>
 <footer><small>Tamires Oliveira</small></footer>
</body>
</html>
