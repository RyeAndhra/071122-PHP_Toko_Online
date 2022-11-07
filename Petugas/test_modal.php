<?php 

include "../koneksi.php";
$query = "SELECT * FROM produk ORDER BY id_produk DESC";  
$result = mysqli_query($conn, $query); 
 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
 
  </style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Cara Menampilkan detail di sebuah modal</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Event</th>
          </tr>
        </thead>
        <tbody>
          <?php  
            $no = 1;
            while($row = mysqli_fetch_array($result)){
          ?>
          <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $row["nama_produk"]; ?></td>
            <td><input type="button" name="view" value="View" data-id="<?=$row["id_produk"];?>" class="btn btn-info btn-xs view_data"></td>
          </tr>
          <?php $no++;  } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div id="dataModal" class="modal fade">  
    <div class="modal-dialog">  
         <div class="modal-content">  
              <div class="modal-header">  
                <h4 class="modal-title">Detail Product</h4>  
              </div>  
              <div class="modal-body" id="detail_product">  
              </div>
              <div class="modal-footer">  
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
              </div>  
         </div>  
    </div>  
</div> 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$('.view_data').click(function(){
		var data_id = $(this).data("id_produk")
		$.ajax({
			url: "proses.php",
			method: "POST",
			data: {data_id: data_id},
			success: function(data){
				$("#detail_product").html(data)
				$("#dataModal").modal('show')
			}
		})
	})
})
</script>
</body>
</html>