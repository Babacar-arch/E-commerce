<!DOCTYPE html>
<html>
<head>
	<title>Amar test</title>
	<script type="text/javascript" src="angular/angular.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body ng-app="myApp">
	<center ng-controller="controllerPageAccueil">
		<button ng-click="envoyer()">envoyer via angularjs</button>
	</center>
	<center>
		<button onClick="post('traitement.php','nom=amar&prenom=mouhamed')">envoyer via js</button>
	</center>
</body>
<script type="text/javascript">
function post(url,arguments)
{
    var xhr= new XMLHttpRequest();
    xhr.open("POST",url);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(arguments);
	xhr.onreadystatechange=function()
    {
     if(xhr.readyState==4)
        {
            if(xhr.status==200)
                {
                    console.log(xhr.responseText);
                    //conteneur.prepend(xhr.responseText);
                }
        }
    }
}
var app = angular.module("myApp",[]);
app.controller('controllerPageAccueil', function($scope,$http,$interval,$rootScope) {
	console.log("okkkkkkkkkkkkkk");
	$scope.envoyer=function(){
		console.log("envoyer");
		var data = {
			name: "name",
			age: "age",
			adress: "adress"
				};
		$http.post('traitement.php',"nom=amar&prenom=mouhamed",{headers:{'Content-Type': 'application/x-www-form-urlencoded'}})
		.then(function (response) {

				if (response.data)

				console.log("Post Data Submitted Successfully!",response.data);

				}, function (response) {

				console.log("Service not Exists");
				console.log(response.status);
				console.log(response.statusText);
				console.log(response.headers());

				});
	}
});
</script>
</html>