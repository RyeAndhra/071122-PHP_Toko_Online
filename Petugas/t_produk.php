<?php 

    include "header_petugas.php";

?>

<head>
<title>Add Product</title>
</head>

<body id="page-top">
    <section class="page-section" id="contact">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Add Product</h2>
        </div>
        <form action="pt_produk.php" method="post" enctype="multipart/form-data" id="contactForm">
          <div class="row align-items-stretch mb-5">
            <div class="col mb-md-0">
              <div class="form-group">
                <h6 class="section-heading text-uppercase">Product Name</h6>
                <input class="form-control" type="text" name="nama_produk" />
              </div>
              <div class="form-group">
                <h6 class="section-heading text-uppercase">Price</h6>
                <input class="form-control" type="number" name="harga" />
              </div>
              <div class="form-group mb-md-0">
                <h6 class="section-heading text-uppercase">Product Photo</h6>
                <input class="form-control" type="file" name="foto_produk" />
              </div>
            </div>
            <div class="col mb-md-0">
                <h6 class="section-heading text-uppercase">Description</h6>
                <div class="form-group form-group-textarea mb-md-0">
                    <textarea class="form-control" id="message" name="deskripsi"></textarea>
                </div>
            </div>
          </div>
          <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Add New Product!</button></div>
        </form>
      </div>
    </section>
  </body>

<?php

    include "footer_petugas.php";
    
?>