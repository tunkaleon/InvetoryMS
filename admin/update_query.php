<?php
	require 'conn.php';
    if(isset($_POST['update'])){
    
        $id=$_POST['id'];
        $name=$_POST['name'];
        $update="UPDATE category set names='$name' WHERE id=$id";
        $query=mysqli_query($conn, $update );
        if($query){
           header('location:index.php');
        }
        else{
            echo"<script> alert('samething went wrong')</script>";
            echo"<script>window.location.href='view_category.php'";
    
        }
       
    }
    
?>