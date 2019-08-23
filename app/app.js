var app = angular.module("multimediaApp", []);
app.controller("authController", function ($scope, $http) {

    $scope.loginForm = true;

    $scope.showLogin = function () {
        $scope.loginForm = true;
    };

    $scope.submitLogin = function () {
        $http({
            method: "POST",
            url: "app/api/login.php",
            data: $scope.loginData
        }).then(function (data) {
            console.log("Login successfully sent to Server");
            console.log($scope.loginData);
        })
    }
});