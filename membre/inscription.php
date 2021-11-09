<?php

/*si il est deja connecter ouvrir voyage.php*/
if (isset($_SESSION["membre"]))
    header("Location: ../index.php");
/*connexion a la base de donnees*/
require_once "../fenctionphp/cnxbdd.php";
$bdd = bdd();

/*apele a la fenction inscription*/
if (isset($_POST["inscription"])) {

    if ($_POST['passwor'] == $_POST['cpassw']) {

        include_once "../fenctionphp/membre.php";
        $inscrir = inscription();
        
    } else {
        $inscrir ="erreur";
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
    
   
    <link rel="stylesheet" type="text/css" href="../css/khireddine_Bootstrap.css">
  
    
	
    



</head>

<body>

 <?php include "header.php" ?>



   
 <main style="width: 300px; margin-right: auto; margin-left: auto; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.623);
											border: solid 1px rgba(252, 252, 252, 0.096);
											border-radius: 5px;padding: 10px; background-color: black;">


  <form action="" method="POST">
    
    <h1 class="kb-h3 mb-3 fw-normal" style="color: white;justify-content: center;">inscription</h1>

	<div class="form-floating">
      <input type="text" name="nom" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">nom</label>
    </div><br>
	<div class="form-floating">
      <input type="text" name="prenom" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">prenom</label>
    </div><br>
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">address Email</label>
    </div><br>
    <div class="form-floating">
      <input type="password" name="passwor" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">mot de passe</label>
    </div><br>
	<div class="form-floating">
      <input type="password" name="cpassw" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">confirme mot de passe</label>
    </div><br>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="inscription">inscription</button>
   
  </form>
</main>
	




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/functions.js"></script>





</body>
</html>