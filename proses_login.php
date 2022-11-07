<?php 

    if($_POST){
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='index.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='index.php';</script>";
        } else {
            include "koneksi.php";

            $sql = "SELECT * FROM `petugas` WHERE `username` = '$username' and `password` = '$password'";

            $qry_login=mysqli_query($conn,$sql);

            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();

                $_SESSION['id_petugas']=$dt_login['id_petugas'];
                $_SESSION['nama_petugas']=$dt_login['nama_petugas'];
                $_SESSION['level']=$dt_login['level'];
                $_SESSION['status_login']=true;

                header("location: Petugas/index.php");

            } else {
                $sql = "SELECT * FROM `pelanggan` WHERE `username` = '$username' and `password` = '$password'";

                $qry_login=mysqli_query($conn,$sql);

                if(mysqli_num_rows($qry_login)>0){
                    $dt_login=mysqli_fetch_array($qry_login);
                    session_start();

                    $_SESSION['id_pelanggan']=$dt_login['id_pelanggan'];
                    $_SESSION['nama_pelanggan']=$dt_login['nama_pelanggan'];
                    $_SESSION['status_login']=true;

                    header("location: Pelanggan/index.php");
                }
                else {
                    echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
                }
            }
        }
    }
?>