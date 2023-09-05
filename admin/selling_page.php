<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    



<!-- <?php
//include('includes/footer.php');

?> -->
</body>
</html>




<?php
    session_start();
        include('header.php');
       
       ?>
                    <div class="py-4">
                        <div class="container-fluid">
                            <div class="row">
                            <div class="col-md-5">
                                
                                    <div class="card shadow">
                                        <div class="card-header">
                                            <div class="h5">Selling Form</div>
                                        </div>
                                        <div class="card-body">

                                            <form action="selling_query.php" method="POST">
                                                <div class="form-group mb-3">
                                                    <label for="">Product Name</label>
                                                    <input type="text" name="name" class="form-control" placeholder="enter product name">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Quantity</label>
                                                    <input type="text" name="qty" class="form-control" placeholder="enter Quantity">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Price</label>
                                                    <input type="text" name="price" class="form-control" placeholder="enter price">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Client name</label>
                                                    <input type="text" name="c_name" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Client phone</label>
                                                    <input type="text" name="phone" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                <button type="submit" class="btn btn-primary" name="sell"> Comfrim sell</button>
                                                <button type="submit" class="btn btn-danger" name="register"> <a href="selling_page.php"class="text text-light">Cancel</a></button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card shadow">
                                        <div class="card-header">
                                            <div class="h5">Sold Products</div>
                                        </div>
                                        <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <b><th class="border-0">#</th>
                                                        <th class="border-0">Product Name</th>
                                                        <th class="border-0">Price</th>
                                                        <th class="border-0">quanity</th>
                                                        <th class="border-0">Client name</th>
                                                        <th class="border-0">Client phone Number</th>
                                                        <th class="border-0">Sold Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    
                                                    include('conn.php');
                                                    $query=$conn->prepare('SELECT * FROM sold_product');
                                                    $query->execute();
                                                    $result=$query->get_result();
                                                    $i=1;
                                                    while($row = $result->fetch_assoc()):

                                                    ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?=$i++;?></td>
                                                            <td><?=$row['p_name'];?> </td>
                                                            <td><?=$row['price'];?></td>
                                                            <td><?=$row['quantity']?></td>
                                                            <td><?=$row['client_names']?></td>
                                                            <td><?=$row['client_phone']?></td>
                                                            <td><?=$row['date']?></td> 
                                                            
                                                        </tr>
                                                    <?php
                                                            endwhile;
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <?php
        include('footer.php');
    ?>