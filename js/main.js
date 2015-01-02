var samhita = angular.module("samhita", []);

samhita.controller("EventsController", ["$scope", "$http", function($scope, $http){
    $scope.title = "Events";

    //$scope.events = [];

    $http.get("data-service/event-details.json").success(function(data){
        $scope.events = data;
    });

    setTimeout(function(){
        $('#Container').mixItUp();
    }, 500);

}]);

samhita.controller("UpdatesController", ["$scope", "$http", function($scope, $http){
    $http.get("data-service/updates.json").success(function(data){
        $scope.updates = data;
    });
}]);

samhita.controller("SponsorsController", ["$scope", "$http", function($scope, $http){
    $http.get("data-service/sponsors.json").success(function(data){
        $scope.sponsors = data;
    });
}]);