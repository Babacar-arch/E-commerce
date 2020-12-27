<?php 
session_start();
include("connexionBaseDeDonnees.php");
//VALEUR DE RETOUR (retourné en bas de la page)
$retour=array();
// DEBUT TRAITEMENT DE LA CONNEXION
if (isset($_POST["traitementConnexion"])) {
	$email = addslashes($_POST['email']);
	$pwd = addslashes($_POST['pwd']);
    $stat = $db->query("select * from personne where email='$email' and mdp='$pwd'");
    if($user=$stat->fetch()){
    	// CONNEXION REUSSIE   
	    $_SESSION['user'] = $user;
        setcookie('userEmail',$user["email"],time()+365*24*3600);
        setcookie('userPwd',$user["mdp"],time()+365*24*3600);

	    // ON UPDAPTE AVEC LA VALEUR A RETOURNER
	    $retour["status"]="succes";
	    $retour["utilisateur"]=$user;
    }else{
    	// EMAIL OU MOT DE PASS INCORRECT

	    // ON ADAPTE AVEC LA VALEUR A RETOURNER
	    $retour["status"]="echec";
    }  
    
    $stat = null;
    $db = null;
}
// FIN TRAITEMENT DE LA CONNEXION
elseif(isset($_POST["verifierSession"])){
    if (isset($_SESSION["user"])) {
        $email = addslashes($_SESSION["user"]['email']);
        $pwd = addslashes($_SESSION["user"]['mdp']);
        $stat = $db->query("select * from personne where email='$email' and mdp='$pwd'");
        if($user=$stat->fetch()){
            // CONNEXION REUSSIE   
            $_SESSION['user'] = $user;
            setcookie('userEmail',$user["email"],time()+365*24*3600);
            setcookie('userPwd',$user["mdp"],time()+365*24*3600);

            // ON UPDAPTE AVEC LA VALEUR A RETOURNER
            $retour["status"]="1";
            $retour["utilisateur"]=$user;
        }else{
            // EMAIL OU MOT DE PASS INCORRECT

            // ON ADAPTE AVEC LA VALEUR A RETOURNER
            $retour["status"]="-1";
        }  
    } else if (isset($_COOKIES["userEmail"]) && isset($_COOKIES["userPwd"])) {
            $email = addslashes($_COOKIES["userEmail"]);
            $pwd = addslashes($_COOKIES["userPwd"]);
            $stat = $db->query("select * from personne where email='$email' and mdp='$pwd'");
            if($user=$stat->fetch()){
                // CONNEXION REUSSIE   
                $_SESSION['user'] = $user;
                setcookie('userEmail',$user["email"],time()+365*24*3600);
                setcookie('userPwd',$user["mdp"],time()+365*24*3600);

                // ON UPDAPTE AVEC LA VALEUR A RETOURNER
                $retour["status"]="2";
                $retour["utilisateur"]=$user;
            }else{
                // EMAIL OU MOT DE PASS INCORRECT

                // ON ADAPTE AVEC LA VALEUR A RETOURNER
                $retour["status"]="-2";
            }
    } else {
             $retour["status"]="-3";    
    }
    
}
// DEBUT TRAITEMENT DE LA INSCRIPTION
elseif (isset($_POST["traitementInsciption"])) {
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$sexe = $_POST['sexe'];
	$age = $_POST['age'];
	$pwd = $_POST['pwd'];
	$tel = $_POST['tel'];

    $insertUser = "insert into personne values('',?,?,?,?,?,?,?,?,?)";
    $stat = $db->prepare($insertUser);

    $stat->bindParam(1, $email);
    $stat->bindParam(2, $prenom);
    $stat->bindParam(3, $nom);
    $stat->bindParam(4, $sexe);
    $stat->bindParam(5, $age);
    $stat->bindParam(6, $pwd);

    // non traité coordonnées suivant X
    $coordX = 14;
    $stat->bindParam(7, $coordX);
    // non traité coordonnées suivant Y
    $coordY = 17;
    $stat->bindParam(8, $coordY);
    
    $stat->bindParam(9, $tel);
    $stat->execute();

    // ----------------
    $connexUser = "select * from personne where email=? and mdp=?";
    $stat = $db->prepare($connexUser);

    $stat->bindParam(1, $email);
    $stat->bindParam(2, $pwd);
    $stat->execute();

    while ($users = $stat->fetch()) {

        $idPers = intval($users['idPers']);
        //var_dump($idPers);
        gettype($idPers);

    }

    // Type de compte
    if(isset($_POST['compte'])):
        $_insert = 'insert into '. $_POST["compte"] .' values('.$idPers.')'; 
        var_dump($_insert);
        $db->exec($_insert);
    endif;

    $stat = null;
    $db = null;
}
// FIN TRAITEMENT DE L'INSCRIPTION

// DEBUT TRAITEMENT DE L'INSERT PRODUIT
elseif (isset($_POST["traitementInsertProd"])) {
	$libelle = $_POST['libelle'];
	$prix = $_POST['prix'];
	$qt = $_POST['quantite'];
	$categ = $_POST['categ'];
	$boutique = $_POST['boutique'];
	$descript = $_POST['descript'];
	
    $insert = "insert into produit values('',?,?,?,?,?,?)";
    $stat = $db->prepare($insert);

    $stat->bindParam(1, $libelle);
    //$stat->bindParam(2, $image);
    $stat->bindParam(2, $descript);
    $stat->bindParam(3, $qt);
    $stat->bindParam(4, $prix);
    $stat->bindParam(5, $boutique);
    $stat->bindParam(6, $categ);
    if ($stat->execute()) {
    	echo "insert  reussie";
    } else {
    	echo "erreur d'insert";
    }
    
}
// FIN TRAITEMENT DE LA INSCRIPTION

// Début traitement ajouter boutique
elseif (isset($_POST['addBtq'])){
    if (!empty($_POST['addBtq'])){

        var_dump($_SESSION);
        var_dump($_FILES);
        var_dump($_POST);


        if(isset($_POST['nomBtq'])){

            $nom = $_POST['nomBtq'];
        } 
        if (isset($_POST['descriptBtq'])){

            $descript = $_POST['descriptBtq'];
        }
        if(isset($_FILES['imageBtq'])){

            $img_name = $_FILES['imageBtq']['name'];
            $img_tmp = $_FILES['imageBtq']['tmp_name'];
            $img_extension = strrchr($img_name, ".");
            $extension_autorisee = array('.JPEG', '.jpeg', '.jpg','.JPG', '.PNG', '.png', '.gif', '.GIF');
            
            if (in_array($img_extension, $extension_autorisee)) {

                move_uploaded_file($img_tmp, "./imagesBoutique/$img_name");
                $addBtq = "insert into boutique value('', ?,?,?,'14','17',?)";
                $stat = $db->prepare($addBtq);
        
                //echo "IdUser: $_SESSION['idPers']";
        
                $img = './imagesBoutique/'.$_FILES["imageBtq"]["name"];
                $stat->bindParam(1, $nom);
                $stat->bindParam(2, $img);
                $stat->bindParam(3, $descript);
                //$idBoutiquier = $_SESSION['idBoutiquier']; // Ligne à choisir après connexion du boutiquier.
                $btquier = 12; // Ligne à supprimer après connexion du boutiquier.
                $stat->bindParam(4,$btquier);
                $stat->execute();
            } else {

                echo 'Extension non autorisée';
            }
        } else {

            echo "Veuillez ajoutez une image svp!";
        }

    } else {

        echo 'VIDE';
    }

}
// RECEVOIR LES PRODUITS DANS LA PAGE D'ACCUEIL
elseif(isset($_POST["recevoirProduits"])){
    $resultat=$db->query("select *from produit");
    while($ligne=$resultat->fetch()){
        array_push($retour,$ligne);
    }
}
// RECEVOIR LES DETAILS D'UN PRODUIT
elseif(isset($_POST["recevoirDetailsProduit"])){
    $idproduit=$_POST["idProduit"];
    $resultat=$db->query("select p.*,c.nom as categorie,b.nom as proprietaire,pers.tel from produit p,boutique b , categorie c,personne pers where p.idboutique=b.idboutique and p.idcategorie=c.idcategorie and b.idboutiquier=pers.idPers and p.idproduit=$idproduit");
    $ligne=$resultat->fetch();
    array_push($retour,$ligne);
}
// AU CAS OU AUCUN TRAITEMENT N'EST APPELE
else{
	echo "Pas de traitement correspondante<br>";
	//$_POST = json_decode(file_get_contents('php://input'), true);
	var_dump($_POST);
}
// ON RETOURNE LE TABLEAU DANS TOUS LES CAS
echo json_encode($retour);
?>


