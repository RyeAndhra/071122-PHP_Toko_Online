<?php

    if($_GET['id_pelanggan']) {

        include "../koneksi.php";
        $id = $_GET['id_pelanggan'];
        $sql = "DELETE FROM `pelanggan` WHERE `id_pelanggan` = $id";
        $qry_hapus = mysqli_query($conn,$sql);
        
        if($qry_hapus) {
            echo "<script>alert('Sukses hapus pelanggan');location.href='tam_pelanggan.php';</script>";
        
        } else {
            echo "<script>alert('Gagal hapus pelanggan');location.href='tam_pelanggan.php';</script>";
        }

    }

?>