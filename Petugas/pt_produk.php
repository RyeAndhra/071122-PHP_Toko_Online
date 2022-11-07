<?php

    include "../koneksi.php";

    if($_POST){

        $nama = $_POST['nama_produk'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $foto = basename($_FILES["foto_produk"]["name"]);
        $target_dir = "../Images/Produk/";
        $target_file = $target_dir . basename($_FILES["foto_produk"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


        if(empty($nama)){
            echo "<script>alert('Product Name cannot be empty');location.href='t_produk.php';</script>";
        
        } elseif(empty($deskripsi)){
            echo "<script>alert('Description cannot be empty');location.href='t_produk.php';</script>";
        
        } elseif(empty($harga)){
            echo "<script>alert('Product Price cannot be empty');location.href='t_produk.php';</script>";
        
        } elseif(empty($foto)){
            echo "<script>alert('Product Photo cannot be empty!');location.href='t_produk.php';</script>";
        
        } else {
            $check = getimagesize($_FILES["foto_produk"]["tmp_name"]);
            if($check == false) {
                echo "<script>alert('File yang dipilih bukan foto');location.href='t_produk.php';</script>";
                $uploadOk = 0;
            
            } else {
                $uploadOk = 1;
            }
        
            if (file_exists($target_file)) {
                echo "<script>alert('File foto sudah ada');location.href='t_produk.php';</script>";
                $uploadOk = 0;
            }
        
            if ($_FILES["foto_produk"]["size"] > 500000) {
                echo "<script>alert('File foto terlalu besar');location.href='t_produk.php';</script>";
                $uploadOk = 0;
            }
        
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                echo "<script>alert('Hanya menerima file foto JPG, JPEG, PNG & GIF');location.href='t_produk.php';</script>";
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                echo "<script>alert('File foto tidak terupload');location.href='t_produk.php';</script>";  
            
            } else {
                if (move_uploaded_file($_FILES["foto_produk"]["tmp_name"], $target_file)) {
                        
                    $sql = "INSERT INTO `produk` (`nama_produk`, `deskripsi`, `harga`, `foto_produk`) VALUES ('$nama', '$deskripsi', '$harga', '$foto')";
                    $insert=mysqli_query($conn, $sql);

                    if($insert) {
                        echo "<script>alert('Product added!');location.href='index.php#product.php';</script>";
                    
                    } else {
                        echo "<script>alert('Failed adding product');location.href='t_produk.php';</script>";
                    }

                    } else {
                        echo "<script>alert('Error saat upload file foto');location.href='t_produk.php';</script>";
                }
            }
        }
    }

?>