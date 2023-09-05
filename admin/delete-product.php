<?php
    include_once 'conn.php';
    $sql = "DELETE FROM products WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($conn, $sql)) {
       echo"<script> alert('data deleted successfull')</script>";
       header('location:dashboard.php');
    } else {
        echo"<script> alert('data not deleted ')</script>";
        header('location:dashboard.php');
    }
?>