<?php

    include "header_petugas.php";

    $id = $_GET['id_petugas'];
    $sql = "SELECT * FROM `petugas` WHERE `id_petugas` = $id";
    $qry_get_petugas=mysqli_query($conn, $sql);
    $dt_petugas=mysqli_fetch_array($qry_get_petugas);
    $level = $dt_petugas['level'];

?>

<head>
<title>Change Employee Data's</title>
</head>

<body id="page-top">
    <section class="page-section" id="contact">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Change Employee Data's</h2>
        </div>
        <form action="pu_petugas.php" method="post" id="contactForm">
          <div class="row align-items-stretch mb-5">
            <div class="col mb-md-0">
              <div class="form-group">
                <input type="hidden" name="id_petugas" value="<?=$dt_petugas['id_petugas']?>">
                <h6 class="section-heading text-uppercase">Name</h6>
                <input class="form-control" type="text" name="nama_petugas" value="<?=$dt_petugas['nama_petugas']?>" />
              </div>
              <div class="form-group">
                <h6 class="section-heading text-uppercase">Level</h6>
                <?php 

                    $arr_level=array('Admin'=>'Admin','Manager'=>'Manager','Petugas'=>'Petugas');

                ?>
                <select name="level" class="form-control">
                    <option></option>

                    <?php foreach ($arr_level as $key_level => $val_level):

                    if($key_level==$dt_petugas['level']) {
                        $selek="selected";

                    } else {
                        $selek = "";
                    }
                                
                    ?>

                    <option value="<?=$key_level?>" <?=$selek?>><?=$val_level?></option>
                                
                    <?php endforeach ?>

                </select>
              </div>
            </div>
            <div class="col mb-md-0">
                <div class="form-group">
                  <h6 class="section-heading text-uppercase">Username</h6>
                  <input class="form-control" type="text" name="username" value="<?=$dt_petugas['username']?>" />
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