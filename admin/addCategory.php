
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

<!-- form -->
<div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-12 col-md-12">
                    <form action="addAction.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="category">Category</label>
        <input type="text" name="category" id="category" class="form-control" />
        
      </div>
    </div>
    
  </div>
  
  
 
      <button type="submit" name="addCategory" class="btn btn-primary my-2">Add Category</button>
</form>

</div>
</div>
</div>
    <!-- form end -->

            <!-- data table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-12 col-md-12">
                    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Category</th>
                <th>action</th>
                
            </tr>
        </thead>
        <tbody>

        <?php 
            $counter = 0;
            $sql = "SELECT * FROM `coursecategory`";
            $result = mysqli_query($conn, $sql); 
            while($row=mysqli_fetch_assoc($result)){
                $counter++;
        ?>


            <tr>
                <td><?php echo $counter; ?></td>
                <td><?php echo $row['category'] ?></td>
                <td>
                <a href="editCourseCategory.php?id=<?php echo $row['id']?>" type="button" class="btn btn-warning">Edit</a>  | 
                <a href="delCategory.php?id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a>  
              </td>
                
            </tr>
                <?php } ?>
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
        