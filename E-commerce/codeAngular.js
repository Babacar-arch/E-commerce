// LA VARIBLE QUI REPRESENTE TOUT CE QUI EST DANS BODY car (<body ng-app="myApp"></body>)
var app = angular.module("myApp",["ngRoute"]);
// GESTION DES REDIRECTIONS

app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "accueil.php"
    })
    .when("/accueil", {
        templateUrl : "accueil.php"
    })
    .when("/detailsProduit", {
        templateUrl : "detailsProduit.php"
    })
    .when("/connexion", {
        templateUrl : "connexion.php"
    })
    .when("/inscription", {
        templateUrl : "inscription.php"
    })
    .when("/insertProd", {
        templateUrl : "insertProd.php"
    })
    .when("/creerBoutique", {
        templateUrl : "creerBoutique.php"
    })
    .otherwise({
        templateUrl : "accueil.php"
    });
});
// CETTE FONCTION EST EXECUTEE A CHAQUE RECHARGEMENT DU SITE
app.run(function($http,$rootScope) {
    $http.defaults.headers.post={'Content-Type': 'application/x-www-form-urlencoded'};
    console.log("Fonction executée a chaque rechargement du site");
    // ON VERIFIE LA CONNEXION D UN UTILISATEUR
    $http.post('traitement.php',"verifierSession=oui")
    .then(function (response) {
        var donnees=response.data;
        console.log(donnees);
        if (donnees.status=="1") {
            console.log("Vous etes toujours connecté");
            // ON MET A JOUR LE NOM DE L'UTILISATEUR
            $rootScope.Utilisateur=donnees.utilisateur;
        } else if (donnees.status=="-1") {
            console.log("Email ou mot de pass incorrect");
        }else if (donnees.status=="2") {
            console.log("Connexion reussie avec des cookies");
        }else if (donnees.status=="-2") {
            console.log("Echec de connexion avec des cookies");
        }else if (donnees.status=="-3") {
            console.log("Pas de session en cours ni de cookies stockés");
        }  else {
            //console.log(donnees.status);
            alert("erreur inconnue");
        }
    });
});
// CONTROLE DE LA PAGE D'ACCUEIL
app.controller('controllerPageAccueil', function($scope,$http,$interval,$rootScope,$location) {
   
    $http.defaults.headers.post={'Content-Type': 'application/x-www-form-urlencoded'};
    $http.post('traitement.php',"recevoirProduits=oui")
    .then(function (response) {
        var donnees=response.data;
        console.log(donnees);
        $scope.lesProduits=donnees;
    });
    $scope.detailsProduit=function(leProduit){
        $rootScope.leProduitClique=leProduit;
        //$location.path('detailsProduit&idProduit='+leProduit.idproduit);
        window.location.href='#!detailsProduit?idProduit='+leProduit.idproduit;
    }
});
// CONTROLE DE LA PAGE DETAILS PRODUIT
app.controller('controllerPageDetailsProduit', function($scope,$http,$interval,$rootScope,$location) {
    $http.defaults.headers.post={'Content-Type': 'application/x-www-form-urlencoded'};
    var chemin=window.location.href;
    console.log(chemin);
    if (chemin.search("idProduit=")!=-1) {
      var idProduit=chemin.substring(chemin.search("idProduit=")+10);
      console.log("idProduit="+idProduit);
      if ($.trim(idProduit)!="") {
        console.log("l'url contient un idProduit");
        $http.post('traitement.php',"recevoirDetailsProduit=oui&idProduit="+idProduit)
        .then(function (response) {
            var donnees=response.data;
            console.log(donnees);
            $scope.details=donnees[0];
        });
      }else{
        console.log("idProduit vide");
      }
    } else {
      console.log("l'url ne contient pas d'idProduit");
      $location.path("accueil");
    }
});

// CONTROLE DE LA PAGE DE CONNEXION
app.controller('controllerPageConnexion', function($scope,$http,$interval,$rootScope) {
	//alert("Page connexion chargé sans redirection");
	// UNE FONCTION QUI PERMET D'ENVOYER LES INFORMATION PAR AJAX AU SERVEUR POUR VERIFIER LA CONNEXION
	$scope.verifierConnexion=function(){
		$http.post('traitement.php',"traitementConnexion=oui&email="+$scope.email+"&pwd="+$scope.pwd,{headers:{'Content-Type': 'application/x-www-form-urlencoded'}})
		.then(function (response) {
			var donnees=response.data;
			console.log(donnees);
			if (donnees.status=="succes") {
				alert("connexion reussie");
                window.document.location.href="#!accueil";
                // ON MET A JOUR L'UTILISATEUR
                $rootScope.Utilisateur=donnees.utilisateur;
			} else if (donnees.status=="echec") {
				alert("Email ou mot de pass incorrect");
			} else {
                //console.log(donnees.status);
				alert("erreur inconnue");
			}
		});
	}
});
// CONTROLE DE LA PAGE DE INSCRIPTION
app.controller('controllerPageInscription', function($scope,$http,$interval,$rootScope) {
	//alert("Page inscription chargé sans redirection");
});

// Controleur de la page d'ajout de boutique
// app.controller('controllerAddBtq', function($scope,$http){
    
//     $scope.btnInsertBtq = function() {

//         alert("Nom: "+$scope.nomBtq+" Description: "+$scope.descriptBtq);
//         //$http.post();
//     }
// });