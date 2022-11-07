<?php 

    session_start();
    if($_SESSION['status_login']!=true){
        header('location: login_petugas.php');
    }
    include "../koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home - Online Store Web</title>
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="../assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="produk.php">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="keranjang.php">Cart</a></li>
                        <li class="nav-item"><a class="nav-link" href="histori.php">History</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Online Store</div>
                <div class="masthead-heading text-uppercase">
                    It's Nice To Meet You
                    <br>
                    <h4 class="mt-5"><?=$_SESSION['nama_pelanggan']?>!</h4>
                </div> 
                
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Go</a>
            </div>
        </header>

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">The best online store website so far.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Easiest online store website to use, we really care about our customer experience here. We made the UI/UX as simple as possible.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">This website is created with HTML, CSS, PHP, and JavaScript. Created by Start Bootstrap and Re-made by Raiandhra Cyostra.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">We use PHPMyAdmin for our database, and we can state that our customer data in this website is 100% safe.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Progress of this Online Store Website.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>September 2022</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Its the beginning of our story doing this project, first of all we made the database and also made a simple back-end of this Online Store, before we finally did the front-end.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>October 2022</h4>
                                <h4 class="subheading">We're Overwhelmed</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">At this point we're nearly didn't made any progress because we got Level Up Exam in our school, before we finally finished it and continue our project on 21 October 2022!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>November 2022</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">The Online Store Website is 80% finished, we already made a big progress at this point. But theres a few errors or bug that we have to fix before its gonna be full servicing!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>7 November 2022</h4>
                                <h4 class="subheading">Its Finally Finished</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">This website can work properly with a UI/UX that we made as simple as possible, so that our customer can easily operate it!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../assets/img/team/profile-img-rei.jpeg" alt="..." />
                            <h4>Raiandhra Cyostra</h4>
                            <p class="text-muted">Admin</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/itscystra_/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://youtu.be/dQw4w9WgXcQ" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../assets/img/team/profile-img-jerry.png" alt="..." />
                            <h4>Jerry the Fox</h4>
                            <p class="text-muted">Manager</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/kobokanaeru/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://youtu.be/Fl_A7qnAS3w" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../assets/img/team/profile-img-jamal.jpg" alt="..." />
                            <h4>Jamal the Monkey</h4>
                            <p class="text-muted">Petugas</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/_abedaactor/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://youtu.be/dQw4w9WgXcQ" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Every person that develop this project (Online Store Website).</p></div>
                </div>
            </div>
        </section>

        <?php
            
            include "footer.php";

        ?>

    </body>
</html>