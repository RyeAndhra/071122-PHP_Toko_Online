<?php

    include "header.php";
    include "../koneksi.php";

?>

<head>
<title>Product</title>
</head>

<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Product List</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="row text-center">
            <?php 

            $sql="SELECT * FROM `produk`";
            $qry=mysqli_query($conn,$sql);
            while($dt=mysqli_fetch_array($qry)){
                
            ?>
            <div class="col-md-4">
                <div class="card" >
                    <img src="../images/produk/<?=$dt['foto_produk']?>" alt="$dt['nama_produk']?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?=$dt['nama_produk']?></h5>
                        <p class="text-muted"><?=$dt['deskripsi']?></p>
                        <a href="beli.php?id_produk=<?=$dt['id_produk']?>" class="btn btn-primary" ><i class="fas fa-cart-plus"></i> Add to Cart</a>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
</section>

<?php

    include "footer.php";

?>