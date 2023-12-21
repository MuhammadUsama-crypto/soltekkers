
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
                 $sql = "SELECT * FROM `instructor` WHERE `id` = $id";
                 $result = mysqli_query($conn, $sql);
                 while($row = mysqli_fetch_assoc($result)) {
            
            ?>


                    <form action="editAction.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="id" value="<?php echo $row['id']; ?>" class="d-none">
      <label class="form-label" for="instructorName">Instructor Name</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" id="instructorName" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="expertise">Expertise</label>
        <input type="text" name="expertise" value="<?php echo $row['expertise']; ?>" id="expertise" class="form-control" />
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="InstructorImg">Instructor Image</label> <br>
      <img src="../assets/img/uploadedImages/<?php echo $row['img']; ?>" class="img-fluid mb-2" alt="" height="100px" width="100px">
        <input type="file" name="InstructorImg"   id="InstructorImg" class="" />
        
      </div>
    </div>
    
  </div>
  
  
  
      <button type="submit" name="editInstructor" class="btn btn-primary my-2">Submit</button>
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
        