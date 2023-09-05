<?php 
include('conn.php');
$result = mysqli_query($conn,"SELECT * FROM category WHERE id='" . $_GET['id'] . "'");
$product= mysqli_fetch_array($result);
?>


<?php
        include('header.php');
        include('sidebar.php');
       
       ?>
   
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Product category Form </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">product Registration form</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                        <center><div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center">
                            <div class="card" >
                                <h5 class="card-header">Products Registration</h5>
                                <div class="card-body">
                                    <form id="form" method="post" action="update_query.php" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">product Name</label>
                                            <div class="col-9 col-lg-10">
                                                <input type=hidden name="id" value="<?=$row['id']?>">
                                                <input id="inputEmail2" type="text"  value="<?=$product['names']?>" class="form-control" name="name">
                                            </div>
                                        </div>
                            
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary" name="update">update</button>
                                                    </form>
                                                </p>
                                            </div>
                                        </div>
                                   
                                </div>
                            </div>
                        </div></center>
                        <!-- ============================================================== -->
                        <!-- end horizontal form -->
                        <!-- ============================================================== -->
                    </div>
           
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           <?php
           
                include('footer.php');
           
           ?>