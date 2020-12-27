<!DOCTYPE html>
<?php session_start();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- l'utilisateur qui veut ajouter une boutique doit au préalable disposer d'un compte utilisateur et se connecter avec. -->
        <?php 
            // if (isset($_SESSION)):
            //      header("Location:connexion.php");
            // endif;
        ?> 

        <form action="./traitement.php" method="POST" enctype="multipart/form-data">
        
            <div>
                <!-- Nom -->
                <!-- <p><input type="text" ng-model="nomBtq" id="NomBtq" placeholder="Nom"/></p> -->
                <p><input type="text" name="nomBtq" id="NomBtq" placeholder="Nom"/></p>

                <!-- Image -->
                <!-- <p><input type="file" ng-model="imageBtq" id="ImageBtq"/></p> -->
                <p><input type="file" name="imageBtq" id="ImageBtq" accept="image/*" /></p>

                <!-- Description -->
                <!-- <p><input type="text" ng-model="descriptBtq" id="DescriptBtq" placeholder="Description"/></p> -->
                <p><input type="text" name="descriptBtq" id="DescriptBtq" placeholder="Description"/></p>

                <!-- Coordonnées 
                    --
                    --
                -->

                <!-- Bouton -->
                <!-- <button ng-click="btnInsertBtq()">Publier</button> -->
                <p><input type="submit" id="Submit" name="addBtq" value="Envoyer"/></p>
            </div>
        </form>
    </body>
</html>