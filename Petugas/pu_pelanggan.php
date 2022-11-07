<?php

    include "../koneksi.php";

    if($_POST) {
        $id_pelanggan=$_POST['id_pelanggan'];
        $nama=$_POST['nama_pelanggan'];
        $username=$_POST['username'];
        $alamat=$_POST['alamat'];
        $telp=$_POST['telp'];

        $foto=basename($_FILES["foto_produk"]["name"]);
        $target_dir = "../Images/Pelanggan/";
        $target_file = $target_dir . basename($_FILES["foto_produk"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if(empty($nama)) {
            echo "<script>alert('Customer Name cannot be empty');location.href='u_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
        
        } elseif(empty($username)) {
            echo "<script>alert('Customer Username cannot be empty');location.href='u_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
        
        } elseif(empty($alamat)){
            echo "<script>alert('Customer Address cannot be empty');location.href='u_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
        
        } elseif(empty($telp)) {
            echo "<script>alert('Customer Phone Number cannot be empty');location.href='u_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>"; 
        
        } else {
            if(empty($foto)) {
                $query = "UPDATE `pelanggan` SET `nama`='$nama',`username`='$username',`alamat`='$alamat',`telp`='$telp' WHERE `id_pelanggan`='$id_pelanggan'";
                $insert=mysqli_query($conn, $query);
                if($insert) {
                    echo "<script>alert('Customer data's changed!');location.href='tam_pelanggan.php';</script>";
                
                } else {
                    echo "<script>alert('Failed changing data's');location.href='tam_pelanggan.php';</script>";
                }
            }
            
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["foto_produk"]["tmp_name"]);
            if($check == false) {
                echo "<script>alert('File yang dipilih bukan foto.');location.href='u_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
                $uploadOk = 0;
            
            } else {
                $uploadOk = 1;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "<script>alert('File foto sudah ada.');location.href='u_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["foto_produk"]["size"] > 500000) {
                echo "<script>alert('File foto terlalu besar');location.href='u_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                echo "<script>alert('Hanya menerima file foto JPG, JPEG, PNG & GIF');location.href='u_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
                $uploadOk = 0;
            
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "<script>alert('File foto tidak terupload');location.href='u_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";  
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["foto_produk"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE `pelanggan` SET `nama`='$nama',`username`='$username',`alamat`='$alamat',`telp`='$telp',`foto`='$foto' WHERE `id_pelanggan`='$id_pelanggan'";
                    $insert=mysqli_query($conn, $sql);
                    if($insert) {
                        echo "<script>alert('Customer data's changed!');location.href='index.php#customer.php.php';</script>";
                    
                    } else {
                        echo "<script>alert('Failed changing data's');location.href='u_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
                    }

                } else {
                    echo "<script>alert('Error saat upload file foto');location.href='u_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
                }
            }

        }
    }

?>