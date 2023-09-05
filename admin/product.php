    <?php
        include('header.php');
        include('sidebar.php');
       
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
                            <h2 class="pageheader-title text-center">Product Page </h2>
                            <div class="page-breadcrumb text-center">
                                <nav aria-label="breadcrumb" class="text text-center">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">product Registration page</li>
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
                      
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
                           
                            <div class="card">
                                <h3 class="card-header">Insert products form</h3>
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate="" enctype="multipart/form-data" action="product-query.php" method="post">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">product name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Type product name" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">purchaasing price</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" required="" data-parsley-maxlength="6" placeholder="product price" class="form-control"name="price">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">selling price</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" required="" data-parsley-maxlength="6" placeholder="product price" class="form-control"name="sprice">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">quantity</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-length="[5,10]" placeholder="quantity" class="form-control" name="qty">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row text-center">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary" name="submit">Submit</button>
                                                <button type="submit" class="btn btn-space btn-danger"><a href="dashboard.php" class="text text-light">Cancel</a></button>
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