<?php 

    session_start();
    if($_SESSION['status_login']!=true){
        header('location: ../index.php');
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
                        <li class="nav-item"><a class="nav-link" href="#product">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="#customer">Customer</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="t_petugas.php">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout_petugas.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To <?=$_SESSION['level']?> Online Store</div>
                <div class="masthead-heading text-uppercase">
                    It's Nice To Meet You
                    <br>
                    <h4 class="mt-5"><?=$_SESSION['nama_petugas']?>!</h4>
                </div> 
                
                <a class="btn btn-primary btn-xl text-uppercase" href="#product">Go</a>
            </div>
        </header>

        <!-- Portfolio Grid Product-->
        <section class="page-section bg-light" id="product">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Product List</h2>
                    <h3 class="section-subheading text-muted">Create, Read, Update, and Delete Product.</h3>
                </div>
                <div class="row">
                <?php 

                    $qry=mysqli_query($conn,"SELECT * FROM `produk`");
                    $no = 0;
                    while($data = mysqli_fetch_array($qry)) {
                        $no++;

                ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $data['id_produk']; ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus-square fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../Images/Produk/<?=$data['foto_produk']?>" alt="<?=$data['nama_produk']?>" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?=$data['nama_produk']?></div>
                                <div class="portfolio-caption-subheading text-muted"><?=$data['harga']?></div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
                
                    <div class="col-lg-4 col-sm-6 mb-4" id="portfolio">
                        <!-- Portfolio item Add Product-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="t_produk.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><img class="img-fluid" src="../assets/img/portfolio/add-removed-white.png" alt="..." /></div>
                                </div>
                                <img class="img-fluid" src="../assets/img/portfolio/add.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Add Product</div>
                                <div class="portfolio-caption-subheading text-muted">Create New Product</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Grid Customer / Portfolio-->
        <section class="page-section bg-light" id="customer">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Customer List</h2>
                    <h3 class="section-subheading text-muted">Create, Read, Update, and Delete Customer.</h3>
                </div>
                <div class="row">
                <?php 

                    $qry=mysqli_query($conn,"SELECT * FROM `pelanggan`");
                    $no = 0;
                    while($data = mysqli_fetch_array($qry)) {

                ?>
                    <div class="col-lg-4 col-sm-6 mb-4" id="portfolio">
                        <!-- Portfolio item-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModalP<?php echo $data['id_pelanggan']; ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../Images/Pelanggan/<?=$data['foto_pelanggan']?>" alt="<?=$data['nama_pelanggan']?>" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?=$data['username']?></div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

                    <div class="col-lg-4 col-sm-6 mb-4" id="portfolio">
                        <!-- Portfolio item Add Customer-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="t_pelanggan.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><img class="img-fluid" src="../assets/img/portfolio/add-removed-white.png" alt="..." /></div>
                                </div>
                                <img class="img-fluid" src="../assets/img/portfolio/add.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Add Customer</div>
                                <div class="portfolio-caption-subheading text-muted">Create New Customer</div>
                            </div>
                        </div>
                    </div>
                </div>
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
            
            include "footer_petugas.php";

        ?>

        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <?php

            $qry=mysqli_query($conn,"SELECT * FROM `produk`");
            while($data = mysqli_fetch_array($qry)) {

        ?>
        
        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $data['id_produk']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?=$data['nama_produk']?></h2>
                                    <img class="img-fluid d-block mx-auto" src="../Images/Produk/<?=$data['foto_produk']?>" alt="..." />
                                    <p><?=$data['deskripsi']?></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Product ID:</strong>
                                            <?=$data['id_produk']?>
                                        </li>
                                        <li>
                                            <strong>Price:</strong>
                                            <?=$data['harga']?>
                                        </li>
                                    </ul>
                                    <a href="u_produk.php?id_produk=<?=$data['id_produk']?>" class="btn btn-primary btn-xl text-uppercase" ><i class="fas fa-pencil"></i> Edit Product</a>
                                    <a href="h_produk.php?id_produk=<?=$data['id_produk']?>" onclick="return confirm('Are you sure want to delete this data?')" class="btn btn-danger btn-xl text-uppercase" ><i class="fas fa-trash"></i> Delete Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>

        <!-- Portfolio Modals-->
        <!-- Portfolio item 2 modal popup-->
        <?php

            $qry=mysqli_query($conn,"SELECT * FROM `pelanggan`");
            while($data = mysqli_fetch_array($qry)) {

        ?>
        
        <div class="portfolio-modal modal fade" id="portfolioModalP<?php echo $data['id_pelanggan']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?=$data['nama_pelanggan']?></h2>
                                    <img class="img-fluid d-block mx-auto"  src="../Images/Pelanggan/<?=$data['foto_pelanggan']?>" alt="..." />
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Username:</strong>
                                            <?=$data['username']?>
                                        </li>
                                        <li>
                                            <strong>Customer ID:</strong>
                                            <?=$data['id_pelanggan']?>
                                        </li>
                                        <li>
                                            <strong>Address:</strong>
                                            <?=$data['alamat']?>
                                        </li>
                                        <li>
                                            <strong>Phone Number:</strong>
                                            <?=$data['telp']?>
                                        </li>
                                    </ul>
                                    <a href="u_pelanggan.php?id_pelanggan=<?=$data['id_pelanggan']?>" class="btn btn-primary btn-xl text-uppercase" ><i class="fas fa-pencil"></i> Edit Customer</a>
                                    <a href="h_pelanggan.php?id_pelanggan=<?=$data['id_pelanggan']?>" onclick="return confirm('Are you sure want to delete this data?')" class="btn btn-danger btn-xl text-uppercase" ><i class="fas fa-trash"></i> Delete Customer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>

    </body>
</html>