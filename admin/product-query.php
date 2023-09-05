<?php
	session_start();
	require 'conn.php';

	// Add products into the cart table
	if (isset($_POST['submit'])) {
	  $pname = $_POST['name'];
	  $price = $_POST['price'];
    $sprice = $_POST['sprice'];
	  $qty = $_POST['qty'];
      
          $query = $conn->prepare('INSERT INTO products (p_names,price,sprice,quantity) VALUES (?,?,?,?)');
          $query->bind_param('ssss',$pname,$price,$sprice,$qty);
          $query->execute();
                // Message for successfull insertion
                echo "<script>alert('saved successfull');</script>";
                echo "<script>window.location.href='dashboard.php'</script>";
                }
                else
                {
                // Message for unsuccessfull insertion
                echo "<script>alert('Something went wrong. Please try again');</script>";
                echo "<script>window.location.href='index.php'</script>";
                
                }

?>