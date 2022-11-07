<?php
    include "../koneksi.php";

    if($_POST) {
        $id_petugas=$_POST['id_petugas'];
        $nama=$_POST['nama_petugas'];
        $username=$_POST['username'];
        $level=$_POST['level'];

        if(empty($nama)){
            echo "<script>alert('Name cannot be empty');location.href='u_petugas.php?id_petugas=".$id_petugas."';</script>";
        
        } elseif(empty($username)){
            echo "<script>alert('Username cannot be empty');location.href='u_petugas.php?id_petugas=".$id_petugas."';</script>";
        
        } elseif(empty($level)){
            echo "<script>alert('Password cannot be empty');location.href='u_petugas.php?id_petugas=".$id_petugas."';</script>"; 
        
        } else {
            $sql = "UPDATE `petugas` SET `nama_petugas`='$nama',`username`='$username',`level`='$level' WHERE `id_petugas`= '$id_petugas'";
            $insert=mysqli_query($conn, $sql);
            if($insert) {
                echo "<script>alert('Employee data's changed!');location.href='index.php';</script>";
            } else {
                echo "<script>alert('Failed changing data's');location.href='t_petugas.php';</script>";
            }
        }
    }
?>