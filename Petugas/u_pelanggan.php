<?php

    include "header_petugas.php";

    $id = $_GET['id_pelanggan'];
    $sql = "SELECT * FROM `pelanggan` WHERE `id_pelanggan` = $id";
    $qry_get_pelanggan=mysqli_query($conn, $sql);
    $dt_pelanggan=mysqli_fetch_array($qry_get_pelanggan);

?>

<head>
<title>Change Customer Data's</title>
</head>

<body id="page-top">
    <section class="page-section" id="contact">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Change Customer Data's</h2>
        </div>
        <form action="pu_pelanggan.php" method="post" enctype="multipart/form-data" id="contactForm">
          <div class="row align-items-stretch mb-5">
            <div class="col mb-md-0">
              <div class="form-group">
                <input type="hidden" name="id_pelanggan" value="<?=$dt_pelanggan['id_pelanggan']?>">
                <h6 class="section-heading text-uppercase">Customer Name</h6>
                <input class="form-control" type="text" name="nama_pelanggan" value="<?=$dt_pelanggan['nama_pelanggan']?>" />
              </div>
              <div class="form-group">
                <h6 class="section-heading text-uppercase">Username</h6>
                <input class="form-control" type="text" name="username" value="<?=$dt_pelanggan['username']?>" />
              </div>
              <div class="form-group">
                <h6 class="section-heading text-uppercase">Phone Number</h6>
                <input class="form-control" type="number" name="telp" value="<?=$dt_pelanggan['telp']?>" />
              </div>
              <div class="form-group mb-md-0">
                <h6 class="section-heading text-uppercase">Customer Photo</h6>
                <input class="form-control" type="file" name="foto_pelanggan" value="<?=$dt_pelanggan['foto_pelanggan']?>" />
              </div>
            </div>
            <div class="col mb-md-0">
                <h6 class="section-heading text-uppercase">Address</h6>
                <div class="form-group form-group-textarea">
                    <textarea class="form-control" id="message" name="alamat"><?=$dt_pelanggan['alamat']?></textarea>
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