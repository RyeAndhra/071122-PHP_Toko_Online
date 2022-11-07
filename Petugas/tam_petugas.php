<?php 
    include "header_petugas.php";
?>

<head>

    <title>Data Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>

<body>
<div class="container">
    <h3>Daftar Petugas</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama Petugas</th>
            <th>Username</th>
            <th>Level</th>
            <th>Aksi</th>
            </tr>
        </thead>
        
        <tbody>

            <?php 

            $qry=mysqli_query($conn,"SELECT * FROM `petugas`");
            $no = 0;
            while($data = mysqli_fetch_array($qry)) {
                $no++;

            ?>

            <tr>              
            <td><?=$no?></td>
            <td><?=$data['nama_petugas']?></td> 
            <td><?=$data['username']?></td> 
            <td><?=$data['level']?></td>
            <td><a href="u_petugas.php?id_petugas=<?=$data['id_petugas']?>" class="btn btn-success">Ubah</a> | 
            <a href="h_petugas.php?id_petugas=<?=$data['id_petugas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>

            <?php 

            }

            ?>
            
        </tbody>

    </table>
</div>
    
</body>

<?php

    include "footer_petugas.php";

?>