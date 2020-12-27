<div ng-controller="controllerPageInscription">
    <form>
        <select class="form-control form-control-lg">
            <option  ng-model="compte" selected value="default">-- Selectionnez le type de compte --</option>
              <option  ng-model="compte" value="v">Visiteur</option>
              <option ng-model="compte" value="b">Boutiquier</option>
        </select>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" id="prenom">
        </div>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom">
        </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
             <small id="emailHelp" class="form-text text-muted">Vous pouvez nous faire confiance. Vos données seront sécurisées</small>
          </div>
          <select class="form-control form-control-lg">
            <option  ng-model="sexe" selected value="default">-- Selectionnez votre sexe --</option>
              <option  ng-model="sexe" value="m">Masculin</option>
              <option ng-model="sexe" value="f">Feminin</option>
        </select>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age">
        </div>
        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="text" class="form-control" id="telephone">
        </div>
          <div class="form-group">
            <label for="pwd">Mot de pass</label>
            <input type="password" class="form-control" id="pwd">
          </div>
          <div class="form-group">
            <label for="confirmation">Confirmation</label>
            <input type="password" class="form-control" id="confirmation">
          </div>
          <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
               <!--  <p>
                    <input type="radio" name="compte" id="CompteV" value="visiteur" checked="checked"/>Visiteur
                    <input type="radio" name="compte" id="CompteB" value="boutiquier"/>Boutiquier
                </p>

                <p><input type="text" name="prenom" id="Prenom" placeholder="Prenom"/></p>

                <p><input type="text" name="nom" id="Nom" placeholder="Nom"/></p>

                <p><input type="email" name="email" id="Email" placeholder="Email"/></p>
                
                <p>
                    <input type="radio" name="sexe" id="SexeM" value="H"/>M
                    <input type="radio" name="sexe" id="SexeF" value="F"/>F
                </p>

                <p><input type="number" name="age" id="Age" placeholder="Age"/></p>

                <p><input type="text" name="pwd" id="Pwd" placeholder="Mot de passe"/></p>

                <p><input type="tel" name="tel" id="Tel" placeholder="Téléphone"/></p>

                <p><input type="submit" name="traitementInsciption" id="Submit" value="S'enregistrer"/></p> -->
</div>