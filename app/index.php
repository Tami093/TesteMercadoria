<!DOCTYPE html>
<html lang="pt-br" ng-app = "Projeto">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/cssIndex.css" />
  <script type="text/javascript" src = "../js/jsIndex.js" ></script>
</head>
<body>
 <div id="responsivo">
<h1>Cadastro de mercadorias</h1>
  <div class="jumbotron" ng-controller="Controller">
    <div class="container">
      <form name="myform" method="POST" action="inserir.php" class="col-mod-6">
        <div>
          Codigo de Mercadoria :  
          <input type="text" name="codMerc"
          ng-model="codMerc"
          ng-required="true"
          ng-pattern="/^[0-9]{1,100}$/"
          class="form-control" placeholder="Digite o codigo da mercadoria"/>
          <br/>
          <span  class="alert alert-danger" ng-show="myform.codMerc.$error.pattern">Digitar apenas numeros!</span>
        </div>
        <br/>
        <div>
          Tipo da Mercadoria :
          <input type="text" name="tipoMerc"
          ng-model="tipoMerc"
          ng-required="true"
          ng-pattern="/^[a-zA-Z]{1,100}$/"
          class="form-control" placeholder="Digite o tipo da mercadoria"/>
          <br/>
          <span  class="alert alert-danger" ng-show="myform.tipoMerc.$error.pattern">Digitar apenas letras!</span>
        </div>
        <br/>
        <div>
         Nome da Mercadoria :
         <input type="text" name="nomeMerc"
         ng-model="nomeMerc"
         ng-required="true"
         ng-pattern="/^[\a-zA-Z]{1,100}$/"
         class="form-control" placeholder="Digite o nome da mercadoria"/>
         <br/>
         <span  class="alert alert-danger" ng-show="myform.nomeMerc.$error.pattern">Digitar apenas letras!</span>
       </div>
       <br/>
       <div>
         Quantidade da Mercadoria :
         <input type="text" name="qtdMerc"
         ng-model="qtdMerc"
         ng-required="true"
         ng-pattern="/^[0-9]{1,10}$/"
         class="form-control"
         placeholder="Digite a quantidade da mercadoria"/>
         <br/>
         <span  class="alert alert-danger" ng-show="myform.qtdMerc.$error.pattern">Digitar apenas números!</span>
       </div>
       <br/>
       <div>
        Preço da Mercadoria :
        <input type="text" name="precoMerc"
        ng-model="precoMerc"
        ng-required="true"
        ng-pattern="/^[0-9]{1,8}[.-][0-9]{1,2}$/" 
        class="form-control" placeholder="Digite o preco da mercadoria"/>
        <br/>
        <span  class="alert alert-danger" ng-show="myform.precoMerc.$error.pattern" required>
        Modelo de preenchimento : 99.99.
        </span>
      </div>
      <br/>
      <div>
        Tipo do Negócio : <select id="selectTipo" name="tipoNegocio">
        <option>Compra</option>
        <option>Venda</option>
      </select>
    </div>
    <br/>
    <div id="botao">
    <input type="submit" class="btn btn-success" value="Enviar" ng-click="teste()" />
    </div>
  </form>
</div>
</div>
</body>
  <br/>
  <footer><small>Tamires Oliveira</small></footer>
</html>
