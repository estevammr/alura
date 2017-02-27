angular.module('alurapic').controller('FotoController', function($scope, $http, $routeParams, recursoFoto, cadastroDeFotos) {

    $scope.foto = {};
    $scope.mensagem = '';

    if($routeParams.fotoId) {
      recursoFoto.get({fotoId: $routeParams.fotoId}, function(foto) {
        $scope.foto = foto; 
      }, function(erro) {
          console.log(erro);
          $scope.mensagem = 'Não foi possível obter a foto'
      });
    }
  
    $scope.submeter = function() {

      if ($scope.formulario.$valid) {
        cadastroDeFotos.cadastrar($scope.foto)
        .then(function(dados) {
            $scope.mensagem = dados.mensagem;
            if (dados.inclusao) $scope.foto = {};
        })
        .catch(function(erro) {
            $scope.mensagem = erro.mensagem;
        });
      }
    };
    //HTTP $http
    // if($routeParams.fotoId) {
    //   $http.get('/v1/fotos/' + $routeParams.fotoId)
    //   .success(function(foto) {
    //       $scope.foto = foto;
    //   })
    //   .error(function(erro) {
    //       console.log(erro);
    //       $scope.mensagem = 'Não foi possível obter a foto'
    //   });
    // }

    // $scope.submeter = function() {

    //   if ($scope.formulario.$valid) {

    //     if($routeParams.fotoId) {

    //       $http.put('/v1/fotos/' + $scope.foto._id, $scope.foto)
    //       .success(function() {
    //           $scope.mensagem = 'Foto alterada com sucesso';

    //       })
    //       .error(function(erro) {
    //           console.log(erro);
    //           $scope.mensagem = 'Não foi possível alterar';
    //       });

    //     } else {                
    //       $http.post('/v1/fotos', $scope.foto)
    //       .success(function() {
    //           $scope.foto = {};
    //           $scope.formulario.$setPristine();
    //           $scope.mensagem = 'Foto cadastrada com sucesso';
    //       })
    //       .error(function(erro) {
    //           console.log(erro);
    //           $scope.mensagem = 'Não foi possível cadastrar a foto';
    //       })
    //     }
    //   }
    // };

  });