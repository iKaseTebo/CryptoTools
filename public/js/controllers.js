myApp.controller('indexController', ['$scope', '$http', '$filter', function ($scope, $http, $filter) {
    $scope.index = 'Welcome to the Crypto Index';
    $scope.btcExchange = '';
    $scope.percent = 0;
    $http.get("/btc/").then(successCallback, errorCallback);
    setInterval(function(){
        $http.get("/btc/").then(successCallback, errorCallback)
    },5000);

    $scope.convert = function($i){
        var usd = $scope.usdExchange;
        var btc = $scope.btcExchange;
        if($i === 1){
            $scope.usdExchange = $filter('currency')($scope.market*btc, '$', 2);
            if(!btc && btc !== 0){
                $scope.btcExchange = '';
                $scope.usdExchange = '';
            }
        }else if($i === 2){
            var total = usd;
            total = total.replace('$', '');
            total = total.replace(',', '');
            $scope.btcExchange = round(total/$scope.market, 8);
            if(!usd){
                $scope.btcExchange = '';
                $scope.usdExchange = '';
            }
        }

    };

    $scope.percentDiff = function($i){
      var buy = $scope.buyValue;
      var sell = $scope.sellValue;
      if(round((sell - buy ) / buy * 100, 2)) {
          $scope.percent = round((sell - buy ) / buy * 100, 2);
      }
    };


    function successCallback(result){
        $scope.market = result.data;
    }
    function errorCallback(data, status){
        console.log(data);
    }

    function round(value, decimals) {
        return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
    }
}]);
//# sourceMappingURL=controllers.js.map
