<?php
include('conn.php');
if(isset($_POST['sell'])){
    $name=$_POST['name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $client_name = $_POST['c_name'];
    $phone = $_POST['phone'];
    $con=$conn->prepare('INSERT INTO sold_product(p_name,quantity,price,client_names,client_phone) VALUE(?,?,?,?,?)');
    $con -> bind_param('sssss',$name,$qty,$price,$client_name,$phone);
    $con ->execute();
    echo "<script>alert('saved successfull');</script>";
    echo "<script>window.location.href='selling_page.php'</script>";
    }
    else
    {
    // Message for unsuccessfull insertion
    echo "<script>alert('Something went wrong. Please try again');</script>";
    echo "<script>window.location.href='index.php'</script>";
    
}

?>
