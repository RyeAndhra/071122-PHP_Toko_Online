<?php

    include "../koneksi.php";

    if(isset($_POST["submit"])) {
        $id_produk = $_POST['id_produk'];
        $nama = $_POST['nama_produk'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        
        $foto=basename($_FILES["foto_produk"]["name"]);
        $target_dir = "../Images/Produk/";
        $target_file = $target_dir . basename($_FILES["foto_produk"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if(empty($nama)) {
            echo "<script>alert('Product Name cannot be empty');location.href='u_produk.php?id_produk=".$id_produk."';</script>";
        
        } elseif(empty($deskripsi)) {
            echo "<script>alert('Description cannot be empty');location.href='u_produk.php?id_produk=".$id_produk."';</script>";
        
        } elseif(empty($harga)) {
            echo "<script>alert('Product Price cannot be empty');location.href='u_produk.php?id_produk=".$id_produk."';</script>"; 
        
        } else {
            if(empty($foto)) {
                $query = "UPDATE `produk` SET `nama_produk`='$nama',`deskripsi`='$deskripsi',`harga`='$harga' WHERE `id_produk`= '$id_produk'";
                $insert = mysqli_query($conn, $query);
                if($insert) {
                    echo "<script>alert('Product data's changed!');location.href='tam_produk.php';</script>";
                
                } else {
                    echo "<script>alert('Failed changing data's');location.href='tam_produk.php';</script>";
                }
            }
            
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["foto_produk"]["tmp_name"]);
            if($check == false) {
                echo "<script>alert('File yang dipilih bukan foto.');location.href='u_produk.php?id_produk=".$id_produk."';</script>";
                $uploadOk = 0;
            
            } else {
                $uploadOk = 1;
            }

            // Check if file already exists
            if(file_exists($target_file)) {
                echo "<script>alert('File foto sudah ada.');location.href='u_produk.php?id_produk=".$id_produk."';</script>";
                $uploadOk = 0;
            
            }

            // Check file size
            if($_FILES["foto_produk"]["size"] > 500000) {
                echo "<script>alert('File foto terlalu besar');location.href='u_produk.php?id_produk=".$id_produk."';</script>";
                $uploadOk = 0;
            
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                echo "<script>alert('Hanya menerima file foto JPG, JPEG, PNG & GIF');location.href='u_produk.php?id_produk=".$id_produk."';</script>";
                $uploadOk = 0;
            
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "<script>alert('File foto tidak terupload');location.href='u_produk.php?id_produk=".$id_produk."';</script>";  
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["foto_produk"]["tmp_name"], $target_file)) {
                    
                    $query = "UPDATE `produk` SET `nama_produk`='$nama',`deskripsi`='$deskripsi',`harga`='$harga',`foto_produk`='$foto' WHERE `id_produk`= '$id_produk'";
                    
                    $insert = mysqli_query($conn, $query);

                    if($insert) {
                        echo "<script>alert('Product data's changed!');location.href='index.php#product.php';</script>";
                    
                    } else {
                        echo "<script>alert('Failed changing data's');location.href='u_produk.php?id_produk=".$id_produk."';</script>";
                    }
                
                } else {
                    echo "<script>alert('Error saat upload file foto');location.href='u_produk.php?id_produk=".$id_produk."';</script>";
                }
            }
        }
    }

?>