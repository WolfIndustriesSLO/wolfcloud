
<!DOCTYPE html>
<html>
<head>
  <title>Registracija v slavkino.com</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script  src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js">  </script>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" ng-model="username">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" ng-model="email">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" ng-model="password1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" ng-model="password2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" ng-click="insertData()">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="../index.php">Sign in</a>
  	</p>
  </form>
  <script>
    var app = angular.module('myApp',[]);
    app.controller('myCtrl',function($scope,$http){
        $scope.insertData=function(){
            $http.post("registerangular.php", {
                'username':$scope.username,
                'email':$scope.email,
                'password1':$scope.password1,
                'password2':$scope.paswword2
            }).then(function(response){
                    console.log("Data Inserted Successfully");
                },function(error){
                    alert("Sorry! Data Couldn't be inserted!");
                    console.error(error);

                });
            }
        });
    </script>
</body>
</html>
