<?php
    session_start();
        include('header.php');
        include('sidebar.php');
       
       ?>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header text-center"style="padding:0px 30px">
                                <h2 class="pageheader-title ">Admin Dashboard  </h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h3 class="card-header text-center" style="padding: 20px 20px"><b>List of all product</h3>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <b><th class="border-0">n<sup>o</sup></th>
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
                                                $query=$conn->prepare('SELECT id,p_names,price,SUM(quantity),date FROM products GROUP BY p_names');
                                                $query->execute();
                                                
                                                $result=$query->get_result();
                                                $i=1;
                                                while($row = $result->fetch_assoc()):

                                                ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $i++;?></td>
                                                        <td><?=$row['p_names'];?> </td>
                                                        <td><?=$row['price'];?></td>
                                                        <td><?=$row['SUM(quantity)']?></td>
                                                        <td><?=$row['date']?></td>
                                                        <td><a href="product-update.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure want to update this item?');"> <img src="assets/images/edit2.jpg" width="60px"></a></td>

                                                    
                                                        <td><a href="delete-product.php?id= <?=$row['id'] ?>"  onclick="return confirm('Are you sure want to delete this item?');"><img src="assets/images/delete.png" width="40px"></a>
                                                         </td>
                                                        
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
        </div>
    </div>
    <!-- ============================================================== -->
    <?php
        include('footer.php');
    ?>