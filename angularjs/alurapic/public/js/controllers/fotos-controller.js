angular.module('alurapic').controller('FotosController', function($scope, $http, recursoFoto){
    
  $scope.fotos = [];
  $scope.filtro = '';
  $scope.mensagem = '';
  
  recursoFoto.query(function(fotos) {
    $scope.fotos = fotos;
  }, function(erro) {
      console.log(erro);
  });

  $scope.remover = function(foto) {

    recursoFoto.delete({fotoId: foto._id}, function() {
      var indiceDaFoto = $scope.fotos.indexOf(foto);
      $scope.fotos.splice(indiceDaFoto, 1);
      $scope.mensagem = 'Foto ' + foto.titulo + ' removida com sucesso!';
    }, function(erro) {
        console.log(erro);
        $scope.mensagem = 'Não foi possível apagar a foto ' + foto.titulo;
    });
  };

  //HTTP $http
  // $http.get('v1/fotos')
  // .success(function(fotos) {
  //   $scope.fotos = fotos;  
  // })
  // .error(function(erro) {
  //   console.log(erro);
  // });

  // $scope.remover = function(foto) {
  //   console.log('remover foto:');
  //   console.log(foto);
  //   $http.delete('v1/fotos/' + foto._id)
  //   .success(function() {
  //     var indiceFoto = $scope.fotos.indexOf(foto); // obtem o índice da foto que está sendo removida.
  //     $scope.fotos.splice(indiceFoto, 1); // remove um elemento da lista de fotos de acordo com o índice da foto removida.
  //     $scope.mensagem = 'Foto ' + foto.titulo + ' foi removida com sucesso.';
  //   })
  //   .error(function(erro) {
  //     console.log(erro);
  //     $scope.mensagem = 'Não foi possível remover a foto ' + foto.titulo;
  //   });
  // };
});