                        
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
               
               
              
                  <h2 class="text text-center">Check selling report here</h2>
                       <center>
                       <div class="col-xl-8 col-lg-14 col-md-8 col-sm-14 col-14"style="justify-content: center">
                       
                           <div class="card">
                               
                               <div class="card-body p-0">
                                   <div class="table-responsive" style="justify-content: center">
                                  
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
                       <!-- ============================================================== -->
                       <!-- end recent orders  -->
                   <div class="row">
                      
      <?php
       include('footer.php');
      ?>