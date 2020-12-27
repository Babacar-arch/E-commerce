<div ng-controller="controllerPageDetailsProduit" class="row card justify-content-center">
     <img   src="imagesProduit/{{details.image}}" class="card col-xs-12 col-sm-6" alt="image du produit"/>
     <div class="col-xs-12 col-sm-6">
         <ul class="list-group">
            <h1>Détails</h1>
            <li class="card-title list-group-item" style="font-weight: bold;"> <span >Nom du produit : </span>
            <span style ="font-size:130%;color:lightseagreen;"> {{details.nom}} </span></li>

            <li class="card-title list-group-item" style="font-weight: bold;"> <span >Description  :</span>
            <span style ="font-size:130%;color:lightseagreen;"> {{details.description}}</span></li>

            <li class="card-title list-group-item" style="font-weight: bold;"> <span >Quantité Disponible      : </span>
            <span style ="font-size:130%;color:lightseagreen;"> {{details.quantite}}</span></li>

            <li class="card-title list-group-item" style="font-weight: bold;"> <span >Prix du produit      : </span>
            <span style ="font-size:130%;color:lightseagreen;"> {{details.prix}}</span></li>

            <li class="card-title list-group-item" style="font-weight: bold;"> <span >Catégorie du produit      : </span>
            <span style ="font-size:130%;color:lightseagreen;"> {{details.nom}}</span></li>

            <li class="card-title list-group-item" style="font-weight: bold;"> <span >Propriétaire de la boutique      : </span> 
            <span style ="font-size:130%;color:lightseagreen;">{{details.prenom+" "+details.nom}}</span></li>

            <li class="card-title list-group-item" style="font-weight: bold;"> <span >Numéro du proriétaire      : </span> 
            <span style ="font-size:130%;color:lightseagreen;">{{details.tel}}</span></li>
            
            <li class="card-title list-group-item" style="font-weight: bold;"> <span >Nom de la boutique      : </span>
                <span style ="font-size:130%;color:lightseagreen;">{{details.proprietaire}}</span></li>
            <center>
                <a href='.$lien.' class="btn btn-block btn-lg btn-primary" style="background-color:lightseagreen;border-color:lightseagreen">Commander</a>
            </center>
            
        </ul>
     </div>
</div>