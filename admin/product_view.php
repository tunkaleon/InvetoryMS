<?php
    session_start();
        include('header.php');
        include('sidebar.php');
       
       ?>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title text-center">Historical All products in stock </h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active text-center" aria-current="page">Historical All products in shop</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h3 class="card-header text-center"><b>Recent Orders</h3>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <b><th class="border-0">#</th>
                                                        <th class="border-0">Product Name</th>
                                                        <th class="border-0">Price</th>
                                                        <th class="border-0">quanity</th>
                                                        <th class="border-0">Registration Date</th>
                                                        <th class="border-0">Edit</th></b>
                                                        <th class="border-0">Delete</th></b>
                                                    </tr>
                                                </thead>
                                                <?php
                                                
                                                include('conn.php');
                                                $query=$conn->prepare('SELECT id,p_names,price,quantity,date FROM products');
                                                $query->execute();
                                                $result=$query->get_result();
                                                while($row = $result->fetch_assoc()):

                                                ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?=$row['id'];?></td>
                                                        <td><?=$row['p_names'];?> </td>
                                                        <td><?=$row['price'];?></td>
                                                        <td><?=$row['quantity']?></td>
                                                        <td><?=$row['date']?></td>
                                                        <td><a href="product-update.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure want to update this item?');"> <img src="assets/images/edit2.jpg" width="60px"></a></td>
                                                    
                                                        <td><a href="delete-product.php?id= <?=$row['id'] ?>"  onclick="return confirm('Are you sure want to delete this item?');"><img src="assets/images/delete.png" width="40px"></a></td>
                                                        
                                                        
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
                            <!-- ============================================================== -->
                        </div>
                        
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <?php
        include('footer.php');
    ?>