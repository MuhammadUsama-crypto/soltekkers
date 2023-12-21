
<?php
             session_start();
             if(!isset($_SESSION['loggedin'])) {
                 header("location: signin.php");
             }
           
             include 'sidebar.php';
             include 'config.php';
          
        
            
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        
            <!-- Navbar Start -->
           <?php
            include 'navbar.php';
           ?>
            <!-- Navbar End -->


             <!-- Sale & Revenue Start -->
             <!-- <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Sale & Revenue End -->




    <!-- data table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Enquiries</h1>
            </div>
        </div>
                
                <div class="row">
                    <div class="col-12 col-md-12">
                    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>COURSE</th>
                <th>NAME</th>
                <th>DOB</th>
                <th>GENDER</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>GUARDIAN NAME</th>
                <th>GUARDIAN NUMBER</th>
                <th>ADDRESS</th>
                <th>IMAGE</th>
                <th>CNIC</th>
                <th>LAST DEGREE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $sr = 0;
                $sql = "SELECT * FROM `enquiries`";
                $result = mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result)){
                    $sr++;
            ?>
            <tr>
                <td><?php echo $sr; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['gname']; ?></td>
                <td><?php echo $row['gnumber']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>
                    <img src="../assets/img/uploadedImages/<?php echo $row['image']; ?>" alt="" height="100px" width="100px">
                </td>
                <td><?php echo $row['cnic']; ?></td>
                <td><?php echo $row['lastDegree']; ?></td>
                <td>
                <a href="delEnquiry.php?id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a>  
              </td>
            </tr>
            <?php  } ?>
           
            </tbody>
                    </table>
                    </div>
                </div>
            </div>
            
            
            <!-- data table End -->




  <!-- Order data table Start -->
  <div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Orders</h1>
        </div>
    </div>
                <div class="row">
                    <div class="col-12 col-md-12">
                    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>service</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Query</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sr = 0;
                $sql = "select * from `orders`";
                $result = mysqli_query($conn,$sql);
                while ($row= mysqli_fetch_assoc($result)) { 
                    $sr++;
            ?>
            <tr>
                <td><?php echo $sr; ?></td>
                <td><?php echo $row['service']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['query']; ?></td>
                <td>
    
                <a href="delOrder.php?id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a>  
              </td>
            </tr>
            <?php  }  ?>
           
            </tbody>
                    </table>
                    </div>
                </div>
            </div>
            
            
            <!--Order data table End -->

            

            <!-- Footer Start -->
           <?php 
           include 'footer.php';
           ?>
            <!-- Footer End -->
        