var app = angular.module("multimediaApp", []);
app.controller("authController", function ($scope, $http) {
    $scope.closeMsg = function () {
        $scope.alertMsg = fasle;
    };

    $scope.loginForm = true;

    $scope.showRegister = function () {
        $scope.loginForm = false;
        $scope.registerForm = true;
        $scope.alertMsg = false;
    };

    $scope.showLogin = function () {
        $scope.registerForm = false;
        $scope.loginForm = true;
        $scope.alertMsg = false;
    };

    $scope.submitRegister = function () {
        $hhtp({
            method: "POST",
            url: "app/api/register.php",
            data: $scope.registerData
        }).then(function (data) {
            $scope.alertMsg = true;
            if (data.error != '') {
                $scope.alertClass = 'alert-danger';
                $scope.alertMessage = data.error;
            } else {
                $scope.alertClass = 'alert-success';
                $scoope.alertMessage = data.message;
                $scope.registerData = {};
            }
        });
    };

    $scope.submitLogin = function () {
        $http({
            method: "POST",
            url: "app/api/login.php",
            data: $scope.loginData
        }).then(function (data) {
            if (data.error != '') {
                $scope.alertMsg = true;
                $scope.alertClass = 'alert-danger';
                $scope.alertMessage = data.error;
            } else {
                location.reload();
            }
        });
    };

});