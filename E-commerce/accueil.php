<div ng-controller="controllerPageAccueil" class="row">
		<div ng-repeat="unProduit in lesProduits" class="col-sm-6  col-md-4 col-lg-3" style="margin-bottom: 10px">
			<div class="card shadow"  style="box-shadow : 0px 0px 5px black">
				<div class="inner">
					<img  style=" width : 100%;height : 190px;box-shadow : 0px 0px 1px black" src="imagesProduit/{{unProduit.image}}" class="card-img-top " alt="Erreur de chargement de l'image">
				</div>
				<div class="card-body text-center" style="height : 15rem;text-align:center" box-shadow : 10px 2px 3px black>
					<h5 class="card-title" style="height : 4rem;font-weight: bold;font-size:130%;color:lightseagreen"> {{unProduit.nom}} </h5>
					<h4 class="card-title" style="height : 4rem;font-weight: bold;font-size:130%;color:lightseagreen"> {{unProduit.description}} </h4>
					
					<a ng-click="detailsProduit(unProduit)" class="btn btn-primary" style="background-color:lightseagreen;border-color:lightseagreen">Plus de details</a>
				</div>
			</div>
		</div>
</div>