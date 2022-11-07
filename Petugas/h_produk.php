<?php

    if($_GET['id_produk']) {
        include "../koneksi.php";
        $id = $_GET['id_produk'];
        $sql = "DELETE FROM `produk` WHERE `id_produk` = $id";
        $qry_hapus = mysqli_query($conn,$sql);

        if($qry_hapus) {
            echo "<script>alert('Sukses hapus produk');location.href='tam_produk.php';</script>";
        
        } else {
            echo "<script>alert('Gagal hapus produk');location.href='tam_produk.php';</script>";
        }
    }

?>