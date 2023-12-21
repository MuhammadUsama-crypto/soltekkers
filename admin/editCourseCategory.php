
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
        <?php 
        $id = $_GET['id']; 
         $sql = "SELECT * FROM `coursecategory` WHERE `id` = '$id'";
         $result = mysqli_query($conn, $sql); 
         while($row=mysqli_fetch_assoc($result)){
             
        ?>                    


                    <form action="editAction.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-4">
    <div class="col">
        <input type="text" name="id" value = "<?php echo $id ?>" class="d-none">
      <div class="form-outline">
      <label class="form-label" for="category">Category</label>
        <input type="text" name="category" id="category" value = "<?php echo $row['category'] ?>" class="form-control" />
        
      </div>
    </div>
    
  </div>
  
  
 
      <button type="submit" name="editCategory" class="btn btn-primary my-2">Add Category</button>
</form>
        <?php } ?>
</div>
</div>
</div>
    <!-- form end -->

          

            

            <!-- Footer Start -->
           <?php 
           include 'footer.php';
           ?>
            <!-- Footer End -->
        