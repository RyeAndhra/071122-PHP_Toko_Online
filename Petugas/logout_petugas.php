<?php
    session_start();
    unset($_SESSION['id_petugas']);
    unset($_SESSION['nama_petugas']);
    $_SESSION['status_login']=false;
    session_destroy();
    header("location: ../index.php");
?>