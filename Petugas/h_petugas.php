<?php

    if($_GET['id_petugas']) {
        include "../koneksi.php";
        $id = $_GET['id_petugas'];
        $sql = "DELETE FROM `petugas` WHERE `id_petugas` = $id";
        $qry_hapus = mysqli_query($conn,$sql);

        if($qry_hapus) {
            echo "<script>alert('Sukses hapus petugas');location.href='tam_petugas.php';</script>";
        
        } else {
            echo "<script>alert('Gagal hapus petugas');location.href='tam_petugas.php';</script>";
        }
    }

?>