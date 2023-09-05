
        <?php 
       
            include('header.php');
            include('sidebar.php');
        ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper"><br>
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    
                    
                   
                       <h2 class="text text-center">Check your Store here</h2>
                            <center>
                            <div class="col-xl-8 col-lg-14 col-md-8 col-sm-14 col-14"style="justify-content: center">
                            
                                <div class="card">
                                    
                                    <div class="card-body p-0">
                                        <div class="table-responsive" style="justify-content: center">
                                       
                                            <table class="table"  >
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">no</th>
                                                        <th class="border-0">Product Name</th>
                                                        <th class="border-0">Quantity</th>
                                                        <th class="border-0">Total Price</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    require 'conn.php';
                                                   
                                                    $stmt = $conn->prepare('SELECT id, p_names,SUM(quantity),price FROM products GROUP BY p_names');
                                            
                                                    $stmt->execute();
                                                    $result = $stmt->get_result();
                                                    $i=1;
                                                    while ($row = $result->fetch_assoc()):
                                                        $pnm=$row['p_names'];
                                                        $sql="SELECT id,SUM(quantity),p_name FROM sold_product where p_name='$pnm' GROUP BY p_name";
                                                        $stmt1 = mysqli_query($conn,$sql);
                                                                                                                
                                                        if($result1 = mysqli_fetch_array($stmt1)){
                                                            $qty1=$row['p_names'];
                                                            $qty2=$result1['p_name'];
                                                        if($qty1==$qty2){                  
                                                            ?>
                                                        <tr>
                                                        <td><?=$i++;?></td>
                                                        <td><?=$row['p_names']?></td>
                                                        
                                                        <td><?=$row['SUM(quantity)']-$result1['SUM(quantity)']?></td>
                                                        <td><?php $qty=$row['SUM(quantity)'];echo $qty*$row['price'];?></td>
                                                        <td>
                                                        <i class="zmdi zmdi-edit"></i>
                                                        
                                                        
                                                    </tr>
                                                            <?php

                                                       } }else{

                                                        
                                                ?>
                                                    <tr>
                                                        <td><?=$i++;?></td>
                                                        <td><?=$row['p_names']?></td>
                                                        <td><?=$row['SUM(quantity)']?></td>
                                                        <!-- <td>0</td> -->
                                                        <td><?php $qty=$row['SUM(quantity)'];echo $qty*$row['price'];?></td>
                                                        <td>
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </tr>
                                                    <?php }  endwhile; ?>
                                                </tbody>
                                            </table>
                                                   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->
                        <div class="row">
                           
           <?php
            include('footer.php');
           ?>