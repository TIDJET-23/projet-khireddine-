<?php
session_start();
require_once "../fenctionphp/cnxbdd.php";
$bdd = bdd();
include_once "../fenctionphp/bddpage.php";
$affichetxtttr= affichetxtttr();
/*verfie et connecter si il apuit sur connexion*/
if (isset($_POST["ajoutertxtttr"])) {
    if (!empty($_POST)) {
        $ajoute = txtttr();
		header("Location: text&titre.php");
        
    }
}
if (isset($_POST["btnsupp"])) {
    $supp=supprimertxtttr();
	header("Location: text&titre.php");

}
if (isset($_POST["btnmodifie"])) {
    $modifie=modifietxtttr();
    

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
    	<link rel="stylesheet" type="text/css" href="../css/khireddine.css">
		<link rel="stylesheet" type="text/css" href="../css/tailwind_kh.css">
    
	
    



</head>

<body>

 <?php include "header.php" ?>
 
                    <?php
                    if (isset($_SESSION["membre"])) :
                    ?>
                        <?php
                        if ($_SESSION["membrepo"] == "admin") :
                        ?>
						<div class="container px-4 py-5" id="featured-3" style="border: solid 2px white;border-radius: 5px;background-color: black;">
								<h5 style="color: white;">administration</h5>

								<form action="" method="POST">
									
									<h1 class="h3 mb-3 fw-normal" style="color: white; margin-left: auto; margin-right: auto;">ajouter un code</h1>

									<textarea name="codehtml" id="" style="width: 100%; " rows="10" ></textarea>
									<button class="w-100 btn btn-lg btn-primary" type="submit" name="ajoutertxtttr">Ajouter</button>
								
								</form>
										
						</div>
						<?php
                        endif;
                        ?>
                    <?php
                    endif;
                    ?>

<?php foreach($affichetxtttr as $aftt): ?> 
	
<div class="container mt-5">
<form action="" method="POST">
    <div class="row">
    <div class="col-lg-12 mx-auto">
	
        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
			<div class="container border-bottom">
				<div class="row justify-space-between py-2">

					<?php
                    if (isset($_SESSION["membre"])) :
                    ?>
                        <?php
                        if ($_SESSION["membrepo"] == "admin") :
                        ?>
					<div class="" style="float: right;">

						<button type="submit" name="btnsupp" style="float: right; margin-left: 10px;" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
						<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
						</svg></button>

                        <button type="button" name="btnmod" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#element<?= $aftt->id?>" style="float: right;"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  						<path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
						</svg></button>
								
											<!-- Button trigger modal -->
								


					</div>
						
						<?php
                        endif;
                        ?>
                    <?php
                    endif;
                    ?>

					<div class="col-lg-2">
						<div class="nav-wrapper position-relative end-0">
							<ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
								<li class="nav-item">
								<a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#preview<?= $aftt->id?>" role="tab" aria-selected="true">
									Preview
								</a>
								</li>
								<li class="nav-item">
								<a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code<?= $aftt->id?>" role="tab" aria-selected="false">
									 Code
								</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
            <div class="tab-content tab-space">
                <div class="tab-pane active" id="preview<?= $aftt->id?>">
						<section class="py-7 mt-3">
						<div class="container">
							<div class="row justify-space-between text-center py-2">
							<div class="col-12 mx-auto">
								<!--code-->
							<?= $aftt->txtttr?>
							<input type="password" name="idtxtttr" hidden value="<?= $aftt->id?>">
						
								
							</div>
							</div>
						</div>
						</section>
                </div>
			
            <div class="tab-pane" id="code<?= $aftt->id?>">
                <div class="position-relative p-4 pb-2">
				    <!--text-->    
                    <textarea name="" id=""  style="border: none;width: 100%; height: 300px;" disabled="disabled"><?= $aftt->txtttr?></textarea>
				</div>
			
        </div>
																			<!-- Modal -->

		
		
    </div>
	
    </div>
							<div class="modal fade" id="element<?= $aftt->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">code HTML</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<!--code-->
										<textarea name="codemodifie" id=""  style="border: none;width: 100%; height: 300px;"><?= $aftt->txtttr?></textarea>
				
										<!--code-->
												</div>
									<div class="modal-footer">

										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="submit" name="btnmodifie" class="btn btn-primary" style="float: right; "><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
 												 <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
										</svg> modifie</button>

									</div>
									</div>
								</div>
								</div>
		</form>
	
</div>
								


<?php endforeach; ?>


<footer style="margin-top: 50px;"></footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="../js/functions.js"></script>




</body>
</html>