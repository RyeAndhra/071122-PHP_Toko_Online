<?php

    include "../koneksi.php";

    if($_POST) {
        $nama=$_POST['nama_petugas'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $level=$_POST['level'];

        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password);

        if(empty($nama)) {
            echo "<script>alert('Name cannot be empty');location.href='t_petugas.php';</script>";
        
        } elseif(empty($username)) {
            echo "<script>alert('Username cannot be empty');location.href='t_petugas.php';</script>";
        
        } elseif(empty($password)) {
            echo "<script>alert('Password cannot be empty');location.href='t_petugas.php';</script>"; 
        
        } elseif(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
            echo "<script>alert('Password harus setidaknya 8 karakter dan harus mencakup satu huruf besar, satu angka, dan satu karakter khusus.');location.href='t_petugas.php';</script>";   
        
        } elseif(empty($level)) {
            echo "<script>alert('Level cannot be empty');location.href='t_petugas.php';</script>"; 
        
        } else {
            
            $p = md5($password);      
            $sql = "INSERT INTO `petugas` (`nama_petugas`, `username`, `password`, `level`) VALUES ('$nama', '$username', '$p', '$level')";
            $insert=mysqli_query($conn, $sql);
            if($insert) {
                echo "<script>alert('Employee added!');location.href='index.php';</script>";
            
            } else {
                echo "<script>alert('Failed adding employee');location.href='t_petugas.php';</script>";
            }
        }
    }

?>