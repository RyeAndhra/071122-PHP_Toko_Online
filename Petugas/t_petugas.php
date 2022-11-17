<?php

    include "header_petugas.php";

?>

<head>
<title>Add Employee</title>
</head>

<body id="page-top">
    <section class="page-section" id="contact">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Add Employee</h2>
        </div>
        <form action="pt_petugas.php" method="post" id="contactForm">
          <div class="row align-items-stretch mb-5">
            <div class="col mb-md-0">
              <div class="form-group">
                <h6 class="section-heading text-uppercase">Name</h6>
                <input class="form-control" type="text" name="nama_petugas" />
              </div>
              <div class="form-group">
                <h6 class="section-heading text-uppercase">Level</h6>
                <select name="level" class="form-control">
                  <option value=""></option>
                  <option value="Admin">Admin</option>
                  <option value="Manajer">Manajer</option>
                  <option value="Petugas">Petugas</option>
                </select>
              </div>
            </div>
            <div class="col mb-md-0">
                <div class="form-group">
                  <h6 class="section-heading text-uppercase">Username</h6>
                  <input class="form-control" type="text" name="username" />
                </div>
                <div class="form-group">
                  <h6 class="section-heading text-uppercase">Password</h6>
                  <input class="form-control" type="password" name="password" />
                </div>
            </div>
          </div>
          <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Add New Employee!</button></div>
        </form>
      </div>
    </section>
  </body>

<?php

    include "footer_petugas.php";
    
?>