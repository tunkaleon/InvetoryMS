
            <?php
        include('header.php');
        include('conn.php');
        $result = mysqli_query($conn,"SELECT * FROM products WHERE id='" . $_GET['id'] . "'");
        $row= mysqli_fetch_array($result);
       ?>
   
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Product Page </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">product update page</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ==-->
                <!--============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                   
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Update products form</h5>
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate=""   enctype="multipart/form-data" action="product-update-query.php" method="post">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">product name</label>
                                            
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="hidden" name="id"value="<?=$row['id'];?>" class="form-control">
                                                <input type="text" required="" placeholder="Type product name" class="form-control" name="name" value="<?=$row['p_names'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">price</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" required="" data-parsley-maxlength="6" placeholder="product price" class="form-control"name="price" value="<?=$row['price'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">quantity</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-length="[5,10]" placeholder="quantity" class="form-control" name="qty" value="<?=$row['quantity'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary" name="update">update</button>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div></center>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                        <!-- ============================================================== -->
                    </div>
           
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
           <?php
           
                include('footer.php');
           ?>