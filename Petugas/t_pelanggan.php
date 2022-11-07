<?php 

    include "header_petugas.php";

?>

<head>
<title>Add Customer</title>
</head>

<body id="page-top">
    <section class="page-section" id="contact">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Add Customer</h2>
        </div>
        <form action="pt_pelanggan.php" method="post" enctype="multipart/form-data" id="contactForm">
          <div class="row align-items-stretch mb-5">
            <div class="col-md-6">
              <div class="form-group">
                <h6 class="section-heading text-uppercase">Customer Name</h6>
                <input class="form-control" type="text" name="nama_pelanggan" />
              </div>
              <div class="form-group">
                <h6 class="section-heading text-uppercase">Username</h6>
                <input class="form-control" type="text" name="username" />
              </div>
              <div class="form-group">
                <h6 class="section-heading text-uppercase">Password</h6>
                <input class="form-control" type="password" name="password" />
              </div>
              <div class="form-group">
                <h6 class="section-heading text-uppercase">Phone Number</h6>
                <input class="form-control" type="number" name="telp" />
              </div>
              <div class="form-group mb-md-0">
                <h6 class="section-heading text-uppercase">Customer Photo</h6>
                <input class="form-control" type="file" name="foto_pelanggan" />
              </div>
            </div>
            <div class="col-md-6">
                <h6 class="section-heading text-uppercase">Address</h6>
                <div class="form-group form-group-textarea">
                    <textarea class="form-control" id="message" name="alamat"></textarea>
                </div>
            </div>
          </div>
          <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Add New Customer!</button></div>
        </form>
      </div>
    </section>
  </body>

<?php

    include "footer_petugas.php";
    
?>