
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
      <label class="form-label" for="instructorName">Instructor Name</label>
        <input type="text" name="name" id="instructorName" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="expertise">Expertise</label>
        <input type="text" name="expertise" id="expertise" class="form-control" />
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="InstructorImg">Instructor Image</label>
        <input type="file" name="InstructorImg" multiple id="InstructorImg" class="form-control" />
        
      </div>
    </div>
  </div>
  
  
  
      <button type="submit" name="addInstructor" class="btn btn-primary my-2">Add Instructor</button>
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
                <th>Name</th>
                <th>Expertise</th>
                <th>Instructor Image</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $counter= 0;
                 $sql = "SELECT * FROM `instructor`";
                 $result = mysqli_query($conn, $sql);
                 while($row = mysqli_fetch_assoc($result)) {
                    $counter ++;
            ?>
            <tr>
                <td><?php echo $counter; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['expertise']; ?></td>
                <td>
                    <img src="../assets/img/uploadedImages/<?php echo $row['img']; ?>" class="img-fluid" alt="no img" height="100px" width="100px" >
                </td>
          
                <td>
                <a href="editInstructor.php?id=<?php echo $row['id']?>" type="button" class="btn mb-2 btn-warning">Edit</a>  | 
                <a href="delInstructor.php?id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a>  
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
        