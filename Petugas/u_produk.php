<?php

    include "header_petugas.php";

    $id = $_GET['id_produk'];
    $sql = "SELECT * FROM `produk` WHERE `id_produk` = $id";
    $qry_get_produk=mysqli_query($conn, $sql);
    $dt_produk=mysqli_fetch_array($qry_get_produk);

?>

<head>
<title>Change Product Data's</title>
</head>

<body id="page-top">
    <section class="page-section" id="contact">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Change Product Data's</h2>
        </div>
        <form action="pu_produk.php" method="post" enctype="multipart/form-data" id="contactForm">
          <div class="row align-items-stretch mb-5">
            <div class="col-md-6">
              <div class="form-group">
                <input type="hidden" name="id_produk" value="<?=$dt_produk['id_produk']?>">
                <h6 class="section-heading text-uppercase">Product Name</h6>
                <input class="form-control" type="text" name="nama_produk" value="<?=$dt_produk['nama_produk']?>" />
              </div>
              <div class="form-group">
                <h6 class="section-heading text-uppercase">Price</h6>
                <input class="form-control" type="number" name="harga" value="<?=$dt_produk['harga']?>" />
              </div>
              <div class="form-group mb-md-0">
                <h6 class="section-heading text-uppercase">Product Photo</h6>
                <input class="form-control" type="file" name="foto_produk" value="<?=$dt_produk['foto_produk']?>" />
              </div>
            </div>
            <div class="col-md-6">
                <h6 class="section-heading text-uppercase">Description</h6>
                <div class="form-group form-group-textarea mb-md-0">
                    <textarea class="form-control" id="message" name="deskripsi"><?=$dt_produk['deskripsi']?></textarea>
                </div>
            </div>
          </div>
          <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Change Data</button></div>
        </form>
      </div>
    </section>
  </body>

<?php 

    include "footer_petugas.php";
    
?>