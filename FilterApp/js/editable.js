var filterApp = angular.module('filterApp',[]);

filterApp.controller('filCtrl', function($scope, $http){
   $scope.callData = function(){
      $http.get("http://127.0.0.1/FilterApp/script/dataphp.php")
        .then(
          function (success){
            $scope.tasks = success.data;
          },
          function (error){
            console.log("Nag Error Man!");
          }
        );
   }

  $scope.pushData = function(){
      let url = "http://127.0.0.1/FilterApp/script/push.php";
      let data = $.param({
          fname : $scope.filfirst,
          lname : $scope.fillast,
          mname : $scope.filmid,
          pass : $scope.filpass,
          gender : $scope.filgender,
          birth	: $scope.filbirth
      });

      let config = {
        headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                  }
      }
      $http.post(url, data, config)
           .then(
               function(response){
                 console.log(response);
                 $scope.callData();
               },
               function(response){
                 console.log(response);
               }
            );
      }
});
