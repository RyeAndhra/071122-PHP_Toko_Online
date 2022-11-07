<?php

    include "header.php";

?>

<head>
<title>Histori</title>
</head>

<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">History</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="row">
            <div class="row align-items-stretch mb-5">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <td><h6 class="section-heading text-uppercase">No</h6></td>
                        <td><h6 class="section-heading text-uppercase">Transaction Date</h6></td>
                        <td><h6 class="section-heading text-uppercase">Product Name</h6></td>
                        <td><h6 class="section-heading text-uppercase">Amount</h6></td>
                        <td><h6 class="section-heading text-uppercase">Subtotal</h6></td>
                        <td><h6 class="section-heading text-uppercase">Total</h6></td>
                        <td><h6 class="section-heading text-uppercase"></h6></td>
                    </tr>
                    </thead>
                    <tbody>

                        <?php 

                        $qry_histori=mysqli_query($conn,"select * from transaksi where id_pelanggan='".$_SESSION['id_pelanggan']."' order by id_transaksi desc");
                        $no=0;
                        while($dt_histori=mysqli_fetch_array($qry_histori)){
                            $no++;
                            $produk_dibeli="<ul>";
                            $jumlah="<ul>";
                            $subtotal="<ul>";
                            $total=0;
                            $qry_produk=mysqli_query($conn,"select * from  detail_transaksi join produk on produk.id_produk=detail_transaksi.id_produk where id_transaksi = '".$dt_histori['id_transaksi']."'");
                            while($dt_produk=mysqli_fetch_array($qry_produk)){
                                $produk_dibeli.="<li>".$dt_produk['nama_produk']."</li>";
                                $jumlah.="<li>".$dt_produk['qty']."</li>";
                                $sub=number_format($dt_produk['subtotal'], 2);
                                $subtotal.="<li>Rp. ".$sub."</li>";
                                $total += $dt_produk['subtotal'];
                            }
                            $produk_dibeli.="</ol>";
                            $jumlah.="</ol>";
                            $subtotal.="<ul>";
                            $total2 = number_format($total, 2);

                        ?>

                        <tr>
                            <td><h6 class="section-heading text-uppercase"><?=$no?></h6></td>
                            <td><h6 class="section-heading text-uppercase"><?=$dt_histori['tgl_transaksi']?></h6></td>
                            <td><h6 class="section-heading text-uppercase"><?=$produk_dibeli?></h6></td>
                            <td><h6 class="section-heading text-uppercase"><?=$jumlah?></h6></td>
                            <td><h6 class="section-heading text-uppercase"><?=$subtotal?></h6></td>
                            <td><h6 class="section-heading text-uppercase"><?php echo("Rp. ".$total2); ?></h6></td>
                            <td colspan="2"><a href="laporan.php" class="btn btn-primary" ><i class="fas fa-print"></i> Print</a></td>
                        </tr>

                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php

    include "footer.php";

?>