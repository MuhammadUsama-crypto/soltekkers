
<?php
            include 'sidebar.php';
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
            
            
            <!-- data table End -->


            

            <!-- Footer Start -->
           <?php 
           include 'footer.php';
           ?>
            <!-- Footer End -->
        