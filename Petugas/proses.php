<?php  
if(isset($_POST["data_id"])){
	$id_produk = $_POST["id_produk"];
	$output = "";
	include "../koneksi.php";
	$query = "SELECT * FROM produk WHERE id_produk = '$id_produk' ";  
	$result = mysqli_query($connect, $query); 
	$output .= '
     <div class="table-responsive">  
          <table class="table table-bordered">'; 
          $row = mysqli_fetch_array($result);
          $output .= ' 
               <tr>  
                    <td width="30%"><label>Name</label></td>  
                    <td width="70%">'.$row["nama_produk"].'</td>  
               </tr>
               <tr>  
                    <td width="30%"><label>Desc</label></td>  
                    <td width="70%">'.$row["deskripsi"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label>Price</label></td>  
                    <td width="70%">'.$row["harga"].'</td>  
               </tr>
               ';    
     $output .= "
          </table>
     </div>";

     echo $output;
}
 
?>