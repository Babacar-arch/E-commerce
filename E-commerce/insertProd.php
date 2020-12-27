<!DOCTYPE html>
<?php 
    session_start();

    $db = new PDO("mysql:host=localhost;dbname=boutique","root","");

    if(isset($_POST['traitementInsertProd'])) {

        if(isset($_POST['libelle'])) {

            $libelle = $_POST['libelle'];
        }
        
        if(isset($_POST['prix'])) {

            $prix = $_POST['prix'];
        }
        
        if(isset($_POST['quantite'])) {

            $quantite = $_POST['quantite'];
        }
        
        if(isset($_POST['categ'])) {

            $categ = $_POST['categ'];
        }
        if(isset($_POST['boutique'])) {

            $boutique = $_POST['boutique'];
        }
        if(isset($_POST['descript'])) {

            $descript = $_POST['descript'];
        }

        if(!(empty($_FILES['imgProd']))) {

            $img_name = $_FILES['imgProd']['name'];
            $img_tmp = $_FILES['imgProd']['tmp_name'];
            $img_extension = strrchr($img_name, ".");
            $path = "./imagesProduit/$img_name";
            $extentions_autorisees = array('.png', '.PNG', '.JPEG', '.jpeg', '.JPG', '.jpg', '.gif', '.GIF');

            if(in_array($img_extension, $extentions_autorisees)) {

                move_uploaded_file($img_tmp, $path);
                $insertProd = "insert into produit value('', '$libelle', '$path', '$descript', $quantite, $prix, $boutique, $categ)";
                echo $db->exec($insertProd);
            } else {

                echo "Seules les formats images sont autorisés";
            }

        } else {

            echo "Choisissez une image svp!";
        }

    }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajouter produit</title>

    <style>
    
        input {

            padding: 1%;
            width: 100%;
        }

        ._content_0{
        
            border: 1px solid red;
            width: 50%;
            margin: auto;
        }

        ._content_1{
        
            border: 1px solid green;
            width: 50%;
            margin: auto;
        }
    
    </style>

    </head>
    <body>
        <div class="_content_0">

            <div class="_content_1">

                <form action=<?php echo $_SERVER['PHP_SELF']?> method="POST" enctype="multipart/form-data">
                
                    <!-- Libelle -->
                    <p><input type="text" name="libelle" id="Libelle" placeholder="Libelle"/></p>

                    <!-- Image -->
                    <p><input type="file" name="imgProd" id="ImgProd" accept="image/*"/></p>

                    <!-- Prix -->
                    <p><input type="number" name="prix" id="Prix" placeholder="Prix"/></p>

                    <!-- Quantité -->
                    <p><input type="number" name="quantite" id="Quantite" placeholder="Quantité"/></p>

                    <!-- Catégorie -->
                    <p>
                        <select name="categ" id="Categ">

                            <option value="1">Téléphone</option>
                            <option value="2">Accessoire</option>
                            <option value="3">Bijoux</option>
                            <option value="4">Meuble</option>
                            <option value="5">Automobile</option>
                            <option value="6">Autre</option>

                        </select>                    
                    </p>

                    <!-- récupération des boutiques ajouter par le boutiquier courrent -->
                    <!-- <p>
                        <select name="boutique" id="Boutique">

                            <option value="1">Apple shop</option>
                            <option value="2">Taarue shoes</option>

                        </select>
                    </p> -->
                    <?php
                    
                        $db = new PDO("mysql:host=localhost;dbname=boutique","root","");
                        $boutiques = "select * from boutique where idboutiquier = ?";
                
                        $stat = $db->prepare($boutiques);
                        //$idBoutiquier = $_SESSION['idPers']; // Ligne à prendre après connexion du boutiquier.
                        $idBoutiquier = 12; // Ligne à supprimer après connexion du boutiquier.
                        $stat->bindParam(1, $idBoutiquier);
                        $stat->execute();
                        echo '<p>
                                <select name="boutique" id="Boutique">';
                        while($btq = $stat->fetch()) {
                                
                            echo "<option value='".$btq['idboutique']."'>".$btq['nom']."</option>";
                        }
                        echo '</select>';
                    
                    ?>

                    <!-- Description -->
                    <p><input type="text" name="descript" id="Descript" placeholder="Description"/></p>

                    <!-- Bouton -->
                    <p><input type="submit" name="traitementInsertProd" id="Submit" value="Publier"/></p>
                
                </form>

            </div>
        
        </div>
    </body>
</html>