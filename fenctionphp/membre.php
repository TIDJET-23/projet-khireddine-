<?php
/*fencion inscription*/
function inscription()
{
    $bdd = bdd();//connexion a la base de donnees  
    $email = $_POST['email'];
    $validation = true;
    if (existe($email)) {//on verfie si email utilise deja alors on peut pas inscrire
        $validation = false;
        
        $erreur ="exist";
    }
    if ($validation == true) {//sinon inscrir
       
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $mdps = $_POST['passwor'];
        $post = 'utilisateur';
        $inscription = $bdd->prepare("INSERT INTO membre(nom, prenom, email, mot_de_passe, post) VALUES(?, ?, ?, ?, ?)");
        $inscription->execute(array($nom, $prenom, $email, $mdps, $post));
        
        $msg = "bien";
        
        return $msg;
        
    } else {
        return $erreur;
    }
}

/*verfie si email existe deja
    alors il ne peux pas inscrire deux fois avec le meme email
 */
function existe($email)
{
    global $bdd;
    $resultat = $bdd->prepare("SELECT * FROM membre WHERE email = ?");
    $resultat->execute([$email]);
    $resultat = $resultat->fetch();
    return $resultat;
}

/*fenction  connexion*/
function connexion()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="erreur";
    $email = $_POST['email'];
    /*si email existe*/
    $connexion = $bdd->prepare("SELECT * FROM membre WHERE email = ?");
    $connexion->execute([$email]);
    $seconcte = $connexion->fetch();
    if ($seconcte == true) {
        /*si mot de passe existe*/
        if ($_POST['pass'] == $seconcte["mot_de_passe"]) {
            echo "khireddneee";
            /*alors il est conecter */
            $_SESSION["membre"] = $seconcte["id"];
            $_SESSION["membrepo"] = $seconcte["post"];
            header("Location: ../index.php");
        } else {
            /*sinon returne erreur */
            return $erreur;
        }
    }
}

/*function deconnexion*/
function deconnexion()
{
    unset($_SESSION["membre"]);
    session_destroy();
    header("Location: connexion.php");
}


/*function recupere les information d une persone selon session ouvert*/
function information()
{
    $bdd = bdd();
    $idpro = $_SESSION["membre"];
    $connexion = $bdd->prepare("SELECT * FROM membre WHERE id = ?");
    $connexion->execute([$idpro]);
    $information = $connexion->fetch();
    return $information;
}
