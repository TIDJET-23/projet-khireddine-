
<?php
include_once "../fenctionphp/membre.php";
?>


<!-- =======================       Header START -->
<header class="navbar-light navbar-sticky header-static">












   <!--navbar01 admin-->
	<div class="navbar-top d-none d-lg-block small">
		<div class="container">
			<div class="d-md-flex justify-content-between align-items-center my-2">
				<!-- lien -->
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link ps-0" href="about-us.html">About</a>
					</li>


                    <?php
                    if (isset($_SESSION["membre"])) :
                    ?>
                        <?php
                        if ($_SESSION["membrepo"] == "admin") :
                        ?>


					<li class="nav-item">
						<a class="nav-link" href="#">Forum</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Buy now!</a>
					</li>

                    <?php
                        endif;
                        ?>
                    <?php
                    endif;
                    ?>


				</ul>
				<!-- contacte -->
				<div class="d-flex align-items-center">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
						</li>
                       
                        <?php
                    if (isset($_SESSION["membre"])) :
                    ?>

                        <li class="nav-item">
						    <a class="nav-link" href="../membre/deconnexion.php">deconnexion</a>
					    </li>

                     <?php
                    else :
                    ?>
                       
                        <li class="nav-item">
						    <a class="nav-link" href="../membre/connexion.php">connexion</a>
					    </li>
						<li class="nav-item">
						    <a class="nav-link" href="../membre/inscription.php">inscription</a>
					    </li>

                        <?php
                    endif;
                    ?>
                       <li class="nav-item" style="margin-top: 4px;">
							<span>V 1.0</span>
						</li>


					</ul>
				</div>
			</div>
			<!-- Divider -->
			<div class="border-bottom border-2 border-primary opacity-1"></div>
		</div>
	</div>











	<!-- navbar2 & logo -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo -->
			<a class="navbar-brand" href="../index.php">
				<h3>KHIREDDINE</h3>			
			</a>
			<!-- navbar2 & icon pour responsive -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
			    <span class="navbar-toggler-icon"></span>
		    </button>

                    <!-- start navbar2 -->
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav navbar-nav-scroll mx-auto">
                            <!-- Nav item 1 -->
                            <li class="nav-item"><a class="nav-link" href="../index.php">Début</a></li>


                            <!-- Nav item 1 -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">javaScript</a>
                                <ul class="dropdown-menu" aria-labelledby="homeMenu">
                                    <li> <a class="dropdown-item" href="#">1.1</a></li>
                                    <li> <a class="dropdown-item" href="#">1.2</a></li>
                                    <li> <a class="dropdown-item" href="#">1.3</a></li>
                                    <li> <a class="dropdown-item" href="#">1.4</a></li>
                                    <li> <a class="dropdown-item" href="#">1.5</a></li>
                                </ul>
                            </li>




                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PHP</a>
                                <ul class="dropdown-menu" aria-labelledby="homeMenu">
                                    <li> <a class="dropdown-item" href="#">1.1 </a></li>
                                    <li> <a class="dropdown-item" href="#">1.2</a></li>
                                    <li> <a class="dropdown-item" href="#">1.3</a></li>
                                    <li> <a class="dropdown-item" href="#">1.4</a></li>
                                    <li> <a class="dropdown-item" href="#">1.5</a></li>
                                </ul>
                            </li>



                            <!-- Nav item 2  -->
                            <li class="nav-item dropdown dropdown-fullwidth">
                                <a class="nav-link" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">composant</a>
                                <div class="dropdown-menu" aria-labelledby="megaMenu">
                                    <div class="container">
                                        <div class="row g-4 p-3 flex-fill">
                                            <!-- Card item START -->
                                            <div class="col-sm-6 col-lg-3">
                                                base html<br>
                                                <a href="border.php">border</a><br>
                                                <a href="overflaw.php">overflaw</a><br>
                                                <a href="shadow.php">shadow & opacite</a><br>
                                                <a href="margi&padding.php">margin & padding</a><br>
                                                <a href="text&titre.php">textes & titres</a><br>
                                                <a href="lien&ifarm.php">lien & ifarm</a><br>
                                                <a href="image.php">image</a><br>
                                                <a href="video&audio.php">video & audio</a><br><br>
                                                
                                                display<br>
                                                <a href="display.php">display</a><br>
                                                <a href="flex.php">flex</a><br>
                                                <a href="float.php">float</a><br>
                                                <a href="position.php">position</a><br>
                                                 
                                            </div>
                                            <!-- Card item END -->
                                            <!-- Card item START -->
                                            <div class="col-sm-6 col-lg-3">
                                               component
                                            </div>
                                            <!-- Card item END -->
                                            <!-- Card item START -->
                                            <div class="col-sm-6 col-lg-3">
                                                form
                                            </div>
                                            <!-- Card item END -->
                                            <!-- Card item START -->
                                            <div class="col-sm-6 col-lg-3">
                                                layot et costimisation
                                            </div>
                                            <!-- Card item END -->
                                    </div>
                                </div>
                            </li>



    
                            <!-- Nav item 3 Post -->
                            <li class="nav-item"><a class="nav-link" href="color.php">color</a></li>







                            <!-- Nav item 4 Mega menu -->
                            <li class="nav-item dropdown dropdown-fullwidth">
                                <a class="nav-link" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Themes & exemples</a>
                                <div class="dropdown-menu" aria-labelledby="megaMenu">
                                    <div class="container">
                                        <div class="row g-4 p-3 flex-fill">
                                            <!-- Card item START -->
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card bg-transparent">
                                                    <!-- Card img -->
                                                    <img class="card-img rounded" src="assets/images/blog/16by9/small/01.jpg" alt="Card image">
                                                    <div class="card-body px-0 pt-3">
                                                        <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">lien C</a></h6>
                                                        <!-- Card info -->
                                                        <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                            <li class="nav-item">
                                                                <a href="#" class="text-reset btn-link">Joan Wallace</a>
                                                            </li>
                                                            <li class="nav-item">Feb 18, 2021</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card item END -->
                                            <!-- Card item START -->
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card bg-transparent">
                                                    <!-- Card img -->
                                                    <img class="card-img rounded" src="" alt="Card image">
                                                    <div class="card-body px-0 pt-3">
                                                        <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">lien B</a></h6>
                                                        <!-- Card info -->
                                                        <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                            <li class="nav-item">
                                                                <a href="#" class="text-reset btn-link">Lori Stevens</a>
                                                            </li>
                                                            <li class="nav-item">Jun 03, 2021</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card item END -->
                                            <!-- Card item START -->
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card bg-transparent">
                                                    <!-- Card img -->
                                                    <img class="card-img rounded" src="" alt="Card image">
                                                    <div class="card-body px-0 pt-3">
                                                        <h6 class="card-title mb-0"><a href="#" class="btn-link fw-bold">lien A</a></h6>
                                                        <!-- Card info -->
                                                        <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                            <li class="nav-item">
                                                                <a href="#" class="text-reset btn-link">Judy Nguyen</a>
                                                            </li>
                                                            <li class="nav-item">Sep 07, 2021</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card item END -->
                                            <!-- Card item START -->
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="bg-primary-soft p-4 text-center h-100 w-100 rounded">
                                                    <span>khireddine </span>
                                                    <h3>tidjet</h3>
                                                    <p>exempl</p>
                                                    <a href="#" class="btn btn-warning">allez sur le site</a>
                                                </div>
                                            </div>
                                            <!-- Card item END -->
                                        </div> <!-- Row END -->
                                        <div class="row px-3">
                                            <div class="col-12">
                                                <ul class="list-inline mt-3">
                                                    <li class="list-inline-item">liens</li>
                                                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">lien 01</a></li>
                                                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">lien 02</a></li>
                                                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">lien 03</a></li>
                                                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">lien 03</a></li>
                                                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">lien 04</a></li>
                                                </ul>
                                            </div>
                                        </div> <!-- Row END -->
                                    </div>
                                </div>
                            </li>






                            <!-- Nav item 5 -->
                            <li class="nav-item"><a class="nav-link" href="../page/Icons.php">Icons</a></li>

                            <!-- Nav item 8 -->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">compresser</a>
                                <ul class="dropdown-menu" aria-labelledby="homeMenu">

                                   
                                    <li> <a class="dropdown-item" href="https://vectorizer.com/fr/">vectorizer</a></li>
                                    <li> <a class="dropdown-item" href="https://tinypng.com/">tinypng</a></li>
                                    <li> <a class="dropdown-item" href="https://compressjpeg.com/fr/">compressjpeg</a></li>

                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
</header>
<!-- =======================  Header END -->
