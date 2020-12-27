<div ng-controller="controllerPageConnexion">
    <form>
      <div class="form-group">
        <label for="Email">Email address</label>
        <input type="email" class="form-control" ng-model="email" id="Email">
      </div>
      <div class="form-group">
        <label for="Pwd">Password</label>
        <input type="password" class="form-control" ng-model="pwd" id="Pwd">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="resterConnecte">
        <label class="form-check-label" for="resterConnecte">Rester connecté</label>
      </div>
      <button ng-click="verifierConnexion()" class="btn btn-primary">Valider</button>
</form>
                <?php 
                    /*if(isset($_COOKIE['userEmail'])):
                        echo '<p><input type="email" ng-model="email" id="Email" value="'.$_COOKIE['userEmail'].'" ></p>';
                    else:
                        echo '<p><input type="email" ng-model="email" id="Email" placeholder="Email"></p>';
                    endif;*/
                ?>
                <!-- <p><input type="text" ng-model="pwd" id="Pwd" placeholder="Mot de passe"/></p>

                <p><input  ng-click="verifierConnexion()" id="Submit" name="traitementConnexion" value="S'enregistrer"/></p> -->
                
            </center>

        </div>
    </div>
</div>