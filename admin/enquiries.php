
<?php
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



            <!-- data table Start -->
            <div class="container-fluid pt-4 px-4">
                
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


            

            <!-- Footer Start -->
           <?php 
           include 'footer.php';
           ?>
            <!-- Footer End -->
        