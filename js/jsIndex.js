angular.module("Projeto" , []);

angular.module("Projeto").controller("Controller",function ($scope) {
    $scope.teste = function () {
        if(!$scope.myform.$invalid){
        	
           alert("Enviado com sucesso!");
        }
        else{
        	alert("Preencher os campos corretamente !");
        }
    };
});


