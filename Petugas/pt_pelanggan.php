<?php

    include "../koneksi.php";

    if($_POST){

        $nama = $_POST['nama_pelanggan'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $foto = basename($_FILES["foto_pelanggan"]["name"]);
        $target_dir = "../Images/Pelanggan/";
        $target_file = $target_dir . basename($_FILES["foto_pelanggan"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password);

        if(empty($nama)){
            echo "<script>alert('Customer Name cannot be empty');location.href='t_pelanggan.php';</script>";
        
        } elseif(empty($username)){
            echo "<script>alert('Customer Username cannot be empty');location.href='t_pelanggan.php';</script>";
        
        } elseif(empty($password)){
            echo "<script>alert('Customer Password cannot be empty');location.href='t_pelanggan.php';</script>";
        
        } elseif(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
            echo "<script>alert('Password harus setidaknya 8 karakter dan harus mencakup satu huruf besar, satu angka, dan satu karakter khusus.');location.href='t_pelanggan.php';</script>";  
        
        } elseif(empty($alamat)){
            echo "<script>alert('Customer Address cannot be empty');location.href='t_pelanggan.php';</script>";
        
        } elseif(empty($telp)){
            echo "<script>alert('Customer Phone Number cannot be empty');location.href='t_pelanggan.php';</script>";
        
        } elseif(empty($foto)){
            echo "<script>alert('Customer Photo cannot be empty');location.href='t_pelanggan.php';</script>"; 
        
        } else {
            $check = getimagesize($_FILES["foto_pelanggan"]["tmp_name"]);
            if($check == false){
                echo "<script>alert('File yang dipilih bukan foto');location.href='t_pelanggan.php';</script>";
                $uploadOk = 0;
            
            } else {
                $uploadOk = 1;
            }
        
            if (file_exists($target_file)){
                echo "<script>alert('File foto sudah ada');location.href='t_pelanggan.php';</script>";
                $uploadOk = 0;
            }
        
            if ($_FILES["foto_pelanggan"]["size"] > 500000){
                echo "<script>alert('File foto terlalu besar');location.href='t_pelanggan.php';</script>";
                $uploadOk = 0;
            }
        
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
                echo "<script>alert('Hanya menerima file foto JPG, JPEG, PNG & GIF');location.href='t_pelanggan.php';</script>";
                $uploadOk = 0;
            }

            if($uploadOk == 0){
                echo "<script>alert('File foto tidak terupload');location.href='t_pelanggan.php';</script>";  
            
            } else {
                if(move_uploaded_file($_FILES["foto_pelanggan"]["tmp_name"], $target_file)){ 
                    $p = md5($password);
                    $sql = "INSERT INTO `pelanggan` (`nama_pelanggan`, `username`, `password`, `alamat`, `telp`, `foto_pelanggan`) VALUES ('$nama', '$username', '$p', '$alamat', '$telp', '$foto')";
                    $insert=mysqli_query($conn, $sql);

                    if($insert) {
                        echo "<script>alert('Customer added!');location.href='index.php#customer.php';</script>";
                    
                    } else {
                        echo "<script>alert('Failed adding customer');location.href='t_pelanggan.php';</script>";
                    }

                } else {
                    echo "<script>alert('Error saat upload file foto');location.href='t_pelanggan.php';</script>";
                }
            }
        }
    }

?>