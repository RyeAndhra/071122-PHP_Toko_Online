<?php 

    session_start();
    if($_POST){
        include "../koneksi.php";
        $id=$_GET['id_produk'];
        $sql="SELECT * FROM `produk` WHERE `id_produk`='$id'";
        $qry=mysqli_query($conn,$sql);
        $dt=mysqli_fetch_array($qry);

        $_SESSION['cart'][]=array(
            'id_produk'=>$dt['id_produk'],
            'nama_produk'=>$dt['nama_produk'],
            'qty'=>$_POST['jumlah'],
            'subtotal'=>$dt['harga']*$_POST['jumlah'],
        );
    }
    header('location: keranjang.php');
?>