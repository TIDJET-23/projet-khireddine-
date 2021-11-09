<?php
session_start();
/*si il est deja connecter alors il affiche voyage.php*/
if (isset($_SESSION["membre"]))
    header("Location: ../index.php");
/*cnx a la base de donnees*/
require_once "../fenctionphp/cnxbdd.php";
$bdd = bdd();
/*verfie et connecter si il apuit sur connexion*/
if (isset($_POST["btnconnexion"])) {
    if (!empty($_POST)) {
        include_once "../fenctionphp/membre.php";
        $erreurs = connexion();
        
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<title>KHIREDDINE</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Theme CSS -->
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/khireddine.css">
	
</head>

<body>

 <?php include "header.php" ?>



   
 <main style="width: 300px; margin-right: auto; margin-left: auto; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.623);
											border: solid 1px rgba(252, 252, 252, 0.096);
											border-radius: 5px;padding: 10px; background-color: black;">


  <form action="" method="POST">
    
    <h1 class="kb-h3 mb-3 fw-normal" style="color: white; margin-left: auto; margin-right: auto;">connexion</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">addres Email</label>
    </div><br>
    <div class="form-floating">
      <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">mot de passe</label>
    </div><br>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="btnconnexion">connexion</button>
   
  </form>
</main>
	




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/functions.js"></script>





</body>
</html>