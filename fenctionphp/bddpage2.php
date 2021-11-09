<?php
/*sitesimple*/
function simplesite()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $nom = $_POST['nom'];
    $image = $_POST['images'];
    $lien = $_POST['lien'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO sitesimples (nom,images,lien) VALUES(?,?,?)");
    $ajout->execute(array( $nom,$image,$lien));

}
function affichesimplesite() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM sitesimples ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimersimplesite(){

    $bdd=bdd();
    $idborder =$_POST["idb"];
    
    $supprimer = $bdd->prepare("DELETE FROM borders WHERE id = ?");
    $supprimer->execute([$idborder]);

}


function complexesite()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $nom = $_POST['nom'];
    $image = $_POST['images'];
    $lien = $_POST['lien'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO sitecomplexes (nom,images,lien) VALUES(?,?,?)");
    $ajout->execute(array( $nom,$image,$lien));

}
function affichecomplexesite() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM sitecomplexes ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimercomplexesite(){

    $bdd=bdd();
    $ids =$_POST["idb"];
    
    $supprimer = $bdd->prepare("DELETE FROM sitecomplexes WHERE id = ?");
    $supprimer->execute([$ids]);

}