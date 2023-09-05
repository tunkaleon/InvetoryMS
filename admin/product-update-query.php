<?php
	require 'conn.php';
if(isset($_POST['update'])){

    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    $update="UPDATE products set p_names='$name',price='$price',quantity='$qty' WHERE id=$id";
    $query=mysqli_query($conn, $update );
    if($query){
       header('location:dashboard.php');
    }
    else{
        echo"<script> alert('samething went wrong')</script>";
        echo"<script>window.location.href='product-update.php'";

    }
   
}


?>