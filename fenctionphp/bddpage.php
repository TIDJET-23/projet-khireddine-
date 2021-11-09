<?php
/*border*/
function border()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $codehtml = $_POST['codehtml'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO borders (border) VALUES(?)");
    $ajout->execute(array( $codehtml));

}
function afficheborder() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM borders ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimerborder(){

    $bdd=bdd();
    $idborder =$_POST["idb"];
    
    $supprimer = $bdd->prepare("DELETE FROM borders WHERE id = ?");
    $supprimer->execute([$idborder]);

}


function modifieborder(){

    $bdd=bdd();
    $idborder =$_POST["idb"];
    $codehtml = $_POST['codemodifie'];

    $modifie = $bdd->prepare("UPDATE borders SET border = :border WHERE id = :idi");
           $modifie->execute([

            "border" => $codehtml,
           "idi" => $idborder
   ]);
header("Location: border.php");

}
/*over flaw*/
function overflaw()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $codehtml = $_POST['codehtml'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO overflaws (overflaw) VALUES(?)");
    $ajout->execute(array( $codehtml));

}
function afficheoverflaw() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM overflaws ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimeroverflaw(){

    $bdd=bdd();
    $idoverflaw =$_POST["idoverflaw"];
    
    $supprimer = $bdd->prepare("DELETE FROM overflaws WHERE id = ?");
    $supprimer->execute([$idoverflaw]);

}


function modifieoverflaw(){

    $bdd=bdd();
    $idoverflaw =$_POST["idoverflaw"];
    $codehtml = $_POST['codemodifie'];

    $modifie = $bdd->prepare("UPDATE overflaws SET overflaw = :overflaw WHERE id = :idi");
           $modifie->execute([

            "overflaw" => $codehtml,
           "idi" => $idoverflaw
   ]);
header("Location: overflaw.php");

}

/*shadow*/
function shadow()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $codehtml = $_POST['codehtml'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO shadows (shadow) VALUES(?)");
    $ajout->execute(array( $codehtml));

}
function afficheshadow() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM shadows ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimershadow(){

    $bdd=bdd();
    $idshadow =$_POST["idshadow"];
    
    $supprimer = $bdd->prepare("DELETE FROM shadows WHERE id = ?");
    $supprimer->execute([$idshadow]);

}


function modifieshadow(){

    $bdd=bdd();
    $idshadow =$_POST["idshadow"];
    $codehtml = $_POST['codemodifie'];

    $modifie = $bdd->prepare("UPDATE shadows SET shadow = :shadow WHERE id = :idi");
           $modifie->execute([

            "shadow" => $codehtml,
           "idi" => $idshadow
   ]);
header("Location: shadow.php");

}


/*marginepadding*/
function margpad()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $codehtml = $_POST['codehtml'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO marginspaddings (margpad) VALUES(?)");
    $ajout->execute(array( $codehtml));

}
function affichemargpad() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM marginspaddings ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimermargpad(){

    $bdd=bdd();
    $idmargpad =$_POST["idmargpad"];
    
    $supprimer = $bdd->prepare("DELETE FROM marginspaddings WHERE id = ?");
    $supprimer->execute([$idmargpad]);

}


function modifiemargpadd(){

    $bdd=bdd();
    $idmargpad =$_POST["idmargpad"];
    $codehtml = $_POST['codemodifie'];

    $modifie = $bdd->prepare("UPDATE marginspaddings SET margpad = :margpad WHERE id = :idi");
           $modifie->execute([

            "margpad" => $codehtml,
           "idi" => $idmargpad
   ]);
header("Location: margi&padding.php");

}

/*liens*/
function lien()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $codehtml = $_POST['codehtml'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO liens (lien) VALUES(?)");
    $ajout->execute(array( $codehtml));

}
function affichelien() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM liens ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimerlien(){

    $bdd=bdd();
    $idlien =$_POST["idlien"];
    
    $supprimer = $bdd->prepare("DELETE FROM liens WHERE id = ?");
    $supprimer->execute([$idlien]);

}


function modifielien(){

    $bdd=bdd();
    $idlien =$_POST["idlien"];
    $codehtml = $_POST['codemodifie'];

    $modifie = $bdd->prepare("UPDATE liens SET lien = :lien WHERE id = :idi");
           $modifie->execute([

            "lien" => $codehtml,
           "idi" => $idlien
   ]);
header("Location: lien&ifarm.php");

}

/*textstitres*/
function txtttr()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $codehtml = $_POST['codehtml'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO textstitres (txtttr) VALUES(?)");
    $ajout->execute(array( $codehtml));

}
function affichetxtttr() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM textstitres ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimertxtttr(){

    $bdd=bdd();
    $idtxtttr =$_POST["idtxtttr"];
    
    $supprimer = $bdd->prepare("DELETE FROM textstitres WHERE id = ?");
    $supprimer->execute([$idtxtttr]);

}


function modifietxtttr(){

    $bdd=bdd();
    $idtxtttr =$_POST["idtxtttr"];
    $codehtml = $_POST['codemodifie'];

    $modifie = $bdd->prepare("UPDATE textstitres SET txtttr = :txtttr WHERE id = :idi");
           $modifie->execute([

            "txtttr" => $codehtml,
           "idi" => $idtxtttr
   ]);
header("Location: text&titre.php");

}

/*image*/
function imag()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $codehtml = $_POST['codehtml'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO images (imag) VALUES(?)");
    $ajout->execute(array( $codehtml));

}
function afficheimag() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM images ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimerimag(){

    $bdd=bdd();
    $idimag=$_POST["idimag"];
    
    $supprimer = $bdd->prepare("DELETE FROM images WHERE id = ?");
    $supprimer->execute([$idimag]);

}


function modifieimag(){

    $bdd=bdd();
    $idimag =$_POST["idimag"];
    $codehtml = $_POST['codemodifie'];

    $modifie = $bdd->prepare("UPDATE images SET imag = :imag WHERE id = :idi");
           $modifie->execute([

            "imag" => $codehtml,
           "idi" => $idimag
   ]);
header("Location: image.php");

}

/*image*/
function vidaud()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $codehtml = $_POST['codehtml'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO vidauds (vidaud) VALUES(?)");
    $ajout->execute(array( $codehtml));

}
function affichevidaud() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM vidauds ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimervidaud(){

    $bdd=bdd();
    $idvidaud=$_POST["idvidaud"];
    
    $supprimer = $bdd->prepare("DELETE FROM vidauds WHERE id = ?");
    $supprimer->execute([$idvidaud]);

}


function modifievidaud(){

    $bdd=bdd();
    $idvidaud =$_POST["idvidaud"];
    $codehtml = $_POST['codemodifie'];

    $modifie = $bdd->prepare("UPDATE vidauds SET vidaud = :vidaud WHERE id = :idi");
           $modifie->execute([

            "vidaud" => $codehtml,
           "idi" => $idvidaud
   ]);
header("Location: video&audio.php");

}

/*display*/
function display()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $codehtml = $_POST['codehtml'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO displays (display) VALUES(?)");
    $ajout->execute(array( $codehtml));

}
function affichedisplay() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM displays ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimerdisplay(){

    $bdd=bdd();
    $iddisplay=$_POST["iddisplay"];
    
    $supprimer = $bdd->prepare("DELETE FROM displays WHERE id = ?");
    $supprimer->execute([$iddisplay]);

}


function modifiedisplay(){

    $bdd=bdd();
    $iddisplay =$_POST["iddisplay"];
    $codehtml = $_POST['codemodifie'];

    $modifie = $bdd->prepare("UPDATE displays SET display = :display WHERE id = :idi");
           $modifie->execute([

            "display" => $codehtml,
           "idi" => $iddisplay
   ]);
header("Location: display.php");

}


/*flex*/
function flex()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $codehtml = $_POST['codehtml'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO flexs (flex) VALUES(?)");
    $ajout->execute(array( $codehtml));

}
function afficheflex() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM flexs ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimerflex(){

    $bdd=bdd();
    $idflex=$_POST["idflex"];
    
    $supprimer = $bdd->prepare("DELETE FROM flexs WHERE id = ?");
    $supprimer->execute([$idflex]);

}


function modifieflex(){

    $bdd=bdd();
    $idflex =$_POST["idflex"];
    $codehtml = $_POST['codemodifie'];

    $modifie = $bdd->prepare("UPDATE flexs SET flex = :flex WHERE id = :idi");
           $modifie->execute([

            "flex" => $codehtml,
           "idi" => $idflex
   ]);
header("Location: flex.php");

}



/*flex*/
function floa()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $codehtml = $_POST['codehtml'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO floats (floa) VALUES(?)");
    $ajout->execute(array( $codehtml));

}
function affichefloa() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM floats ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimerfloa(){

    $bdd=bdd();
    $idfloa=$_POST["idfloa"];
    
    $supprimer = $bdd->prepare("DELETE FROM floats WHERE id = ?");
    $supprimer->execute([$idfloa]);

}


function modifiefloa(){

    $bdd=bdd();
    $idfloa =$_POST["idfloa"];
    $codehtml = $_POST['codemodifie'];

    $modifie = $bdd->prepare("UPDATE floats SET floa = :floa WHERE id = :idi");
           $modifie->execute([

            "floa" => $codehtml,
           "idi" => $idfloa
   ]);
header("Location: float.php");

}

/*position*/
function position()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $codehtml = $_POST['codehtml'];
    /*si email existe*/
    $ajout = $bdd->prepare("INSERT INTO positions (position) VALUES(?)");
    $ajout->execute(array( $codehtml));

}
function afficheposition() {
    $bdd=bdd();
    
    $affiche = $bdd->prepare("SELECT * FROM positions ORDER BY id ASC");
    $affiche->execute();
    $affi = $affiche->fetchAll(PDO::FETCH_OBJ);
    return $affi;

}

/*fenction permet de supprimer une border*/
function supprimerposition(){

    $bdd=bdd();
    $idposition=$_POST["idposition"];
    
    $supprimer = $bdd->prepare("DELETE FROM positions WHERE id = ?");
    $supprimer->execute([$idposition]);

}


function modifieposition(){

    $bdd=bdd();
    $idposition =$_POST["idposition"];
    $codehtml = $_POST['codemodifie'];

    $modifie = $bdd->prepare("UPDATE positions SET position = :position WHERE id = :idi");
           $modifie->execute([

            "position" => $codehtml,
           "idi" => $idposition
   ]);
header("Location: position.php");

}