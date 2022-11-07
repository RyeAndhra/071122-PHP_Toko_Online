<?php

    include "header.php";

?>

<head>
<title>Keranjang</title>
</head>

<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Cart</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="row">
            <div class="row align-items-stretch mb-5">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th><h6 class="section-heading text-uppercase">No</h6></th>
                            <th><h6 class="section-heading text-uppercase">Product Name</h6></th>
                            <th><h6 class="section-heading text-uppercase">Amount</h6></th>
                            <th><h6 class="section-heading text-uppercase">Subtotal</h6></th>
                            <th><h6 class="section-heading text-uppercase"></h6></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach (@$_SESSION['cart'] as $key_produk => $val_produk): 
                            $harga=$val_produk['subtotal'];
                            $harga2=number_format($harga, 2);
                        ?>

                        <tr>
                            <td><h6 class="section-heading text-uppercase"><?=($key_produk+1)?></h6></td>
                            <td><h6 class="section-heading text-uppercase"><?=$val_produk['nama_produk']?></h6></td>
                            <td><h6 class="section-heading text-uppercase"><?=$val_produk['qty']?></h6></td>
                            <td><h6 class="section-heading text-uppercase"><?php echo("Rp. " .$harga2);?></h6></td>
                            <td colspan="2"><a href="hapus.php?id=<?=$key_produk?>" class="btn btn-danger">X</a></td>
                        </tr>

                        <?php endforeach ?>
                        
                    </tbody>
                </table>
                <div class="col-md-8">
                    <a href="checkout.php" class="btn btn-primary" ><i class="fas fa-check-circle"></i> Checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

    include "footer.php";

?>