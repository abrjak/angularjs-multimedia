<?php
    session_start();
?>

<!DOCTYPE html>
<html ng-app="multimediaApp">

<head>
    <meta charset="utf-8">
    <title>AngularJS Mulimedia App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular-route.js"></script>

    <script src="app/app.js"></script>

    <style>
        .form_style {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <br />
    <h3 align="center">AngularJS Multimedia App Login</h3>
    <br />

    <div ng-controller="authController" class="container form_style">
        <?php
                if(!isset($_SESSION['name'])){
            ?>
        <div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg">
            <a href="#" class="close" ng-click="closeMsg" aria-label="close">&times;</a>
            {{alertMessage}}
        </div>

        <div class="panel panel-default" ng-show="loginForm">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
                <form method="post" ng-submit="submitLogin()">
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input type="text" name="email" ng-model="loginData.email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="passsword" ng-model="loginData.password" class="form-control" />
                    </div>
                    <div class="form-group" align="center">
                        <input type="submit" name="login" class="btn btn-primary" value="Login" />
                        <br />
                        <input type="button" name="registerLink" class="btn btn-primary btn-link"
                            ng-click="showRegister()" value="Register" />
                    </div>
                </form>
            </div>
        </div>

        <div class="panel panel-default" ng-show="registerForm">
            <div class="panel-heading">
                <h3 class="panel-title">Register</h3>
            </div>
            <div class="panel-body">
                <form method="post" ng-submit="submitRegister()">
                    <div class="form-group">
                        <label>Enter Your Name</label>
                        <input type="text" name="name" ng-model="registerData.name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Email</label>
                        <input type="text" name="email" ng-model="registerData.email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Password</label>
                        <input type="password" name="password" ng-model="registerData.password" class="form-control" />
                    </div>
                    <div class="form-group" align="center">
                        <input type="submit" name="register" class="btn btn-primary" value="Register" />
                        <br />
                        <input type="button" name="loginLink" class="btn btn-primary btn-link" ng-click="showLogin()"
                            value="Login" />
                    </div>
                </form>
            </div>
        </div>
        <?php
            }
                else
            {
        ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Welcome to system</h3>
            </div>
            <div class="panel-body">
                <h1>Welcome - <?php echo $_SESSION["name"];?></h1>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <?php
            }
        ?>

    </div>
</body>

</html>