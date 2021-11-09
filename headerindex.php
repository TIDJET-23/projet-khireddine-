
<?php
session_start();
include_once "fenctionphp/membre.php";
?>


<!-- =======================       Header START -->
<header class="navbar-light navbar-sticky header-static">












   <!--navbar01 admin-->
	<div class="navbar-top d-none d-lg-block small">
		<div class="container">
			<div class="d-md-flex justify-content-between align-items-center my-2">
				<!-- lien -->
				<ul class="nav">
                    <!---->
					<li class="nav-item">
						<a class="nav-link ps-0" href="about-us.html">About</a>
					</li>
					<!---->
                    <!---->
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
                <!---->
                <!---->                   

				</ul>
				<!-- contacte -->
				<div class="d-flex align-items-center">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16"> <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/> </svg></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16"> <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/> </svg></i></a>
						</li>
                        <li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16"> <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/> </svg></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16"> <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/> </svg></a>
						</li>
                        <li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16"> <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/> </svg></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 
                            0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/> </svg></a>
						</li>
                        <li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16"> <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/> </svg></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
						</li>
						
                       
                        <?php
                        if (isset($_SESSION["membre"])) :
                        ?>

                            <li class="nav-item">
                                <a class="nav-link" href="membre/deconnexion.php">deconnexion</a>
                            </li>

                        <?php
                        else :
                        ?>
                       
                            <li class="nav-item">
                                <a class="nav-link" href="membre/connexion.php">connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="membre/inscription.php">inscription</a>
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
		<div class="container ">
			<!-- Logo -->
			<a class="navbar-brand" href="index.php">
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
                            <li class="nav-item"><a class="nav-link" href="index.php">Début</a></li>


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
                                                <a href="page/border.php">border</a><br>
                                                <a href="page/overflaw.php">overflaw</a><br>
                                                <a href="page/shadow.php">shadow & opacite</a><br>
                                                <a href="page/margi&padding.php">margin & padding</a><br>
                                                <a href="page/text&titre.php">textes & titres</a><br>
                                                <a href="page/lien&ifarm.php">lien & ifarm</a><br>
                                                <a href="page/image.php">image</a><br>
                                                <a href="page/video&audio.php">video & audio</a><br><br>
                                                
                                                display<br>
                                                <a href="page/display.php">display</a><br>
                                                <a href="page/flex.php">flex</a><br>
                                                <a href="page/float.php">float</a><br>
                                                <a href="page/position.php">position</a><br>
                                                 
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
                            <li class="nav-item"><a class="nav-link" href="page/color.php">color</a></li>












                            <!-- Nav item 5 -->
                            <li class="nav-item"><a class="nav-link" href="page/Icons.php">Icons</a></li>

                             <!-- Nav item 8 -->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">compresser</a>
                                <ul class="dropdown-menu" aria-labelledby="homeMenu">


                                   
                                    <li> <a class="dropdown-item" href="https://vectorizer.com/fr/">vectorizer</a></li>
                                    <li> <a class="dropdown-item" href="https://tinypng.com/">tinypng</a></li>
                                    <li> <a class="dropdown-item" href="https://compressjpeg.com/fr/">compressjpeg</a></li>

                                </ul>
                            </li>


                            
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
                                                    <img class="card-img rounded" src="..." alt="Card image">
                                                    <div class="card-body px-0 pt-3">
                                                        <h6 class="card-title mb-0"><a href="#" target="_blank" class="btn-link text-reset fw-bold">Exemple composant</a></h6>
                                                        <!-- Card info -->
                                                        <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                            <li class="nav-item">
                                                                <a href="#" class="text-reset btn-link">click ici</a>
                                                            </li>
                                                            <li class="nav-item">V 1.0</li>
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
                                                        <h6 class="card-title mb-0"><a href="page2/site_simple/sitesimple.php" target="_blank" class="btn-link text-reset fw-bold">sites simple</a></h6>
                                                        <!-- Card info -->
                                                        <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                            <li class="nav-item">
                                                                <a href="page2/site_simple/sitesimple.php" class="text-reset btn-link">click ici</a>
                                                            </li>
                                                            <li class="nav-item">V 1.0</li>
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
                                                        <h6 class="card-title mb-0"><a href="page2/site_complex/sitecomplexe.php" target="_blank" class="btn-link text-reset fw-bold">site complexe</a></h6>
                                                        <!-- Card info -->
                                                        <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                            <li class="nav-item">
                                                                <a href="page2/site_complex/sitecomplexe.php" class="text-reset btn-link">click ici</a>
                                                            </li>
                                                            <li class="nav-item">V 1.0</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card item END -->
                                            <!-- Card item START -->
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="bg-primary-soft p-4 text-center h-100 w-100 rounded">
                                                    <span>choisir des images</span>
                                                    <h3>pour votre site</h3>
                                                    <a href="#" target="_blank" class="btn btn-warning">allez sur le site</a>
                                                </div>
                                            </div>
                                            <!-- Card item END -->
                                        </div> <!-- Row END -->
                                        <div class="row px-3">
                                            <div class="col-12">
                                                <ul class="list-inline mt-3">
                                                    <li class="list-inline-item">autre site pour choisir des images : </li>
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


                            
                        </ul>
                    </div>
                </div>
            </nav>
</header>
<!-- =======================  Header END -->
