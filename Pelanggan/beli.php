<?php

    include "header.php";
    include "../koneksi.php";
    $id=$_GET['id_produk'];
    $sql="SELECT * FROM `produk` WHERE `id_produk`='$id'";
    $qry=mysqli_query($conn,$sql);
    $dt=mysqli_fetch_array($qry);
    $harga=$dt['harga']; 
    $harga2=number_format($harga, 2);

?>

<head>
<title>Beli Produk</title>
</head>

<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Add to Cart</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" >
                    <img src="../images/produk/<?=$dt['foto_produk']?>" alt="$dt['nama_produk']?>" class="card-img-top">
                </div>
            </div>
            <div class="col-md-8">

                    <form action="masuk.php?id_produk=<?=$dt['id_produk']?>" method="post" id="contactForm">
                        <div class="row align-items-stretch mb-5">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <td><h6 class="section-heading text-uppercase">Product Name</h6></td>
                                        <td><h6 class="section-heading text-uppercase"><?=$dt['nama_produk']?></h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6 class="section-heading text-uppercase">Description</h6></td>
                                        <td><h6 class="section-heading text-uppercase"><?=$dt['deskripsi']?></h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6 class="section-heading text-uppercase">Price</h6></td>
                                        <td><h6 class="section-heading text-uppercase"><?php echo("Rp. " .$harga2);?></h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6 class="section-heading text-uppercase">Amount</h6></td>
                                        <td><input class="form-control" type="number" name="jumlah" value="1" /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><button class="btn btn-primary" id="submitButton" type="submit"><i class="fas fa-credit-card-alt"></i> Payment</button></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php 
    include "footer.php";
?>