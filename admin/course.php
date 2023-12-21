
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
      <label class="form-label" for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">

      <label class="form-label" for="category">Category</label>
      
        <select class="form-select" name="category" aria-label="Default select example">
    <option selected>Choose Category..</option>
    <?php
                $sql = "SELECT * FROM `coursecategory`";
                $result = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result)){
                ?>
  <option value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>
 <?php } ?>
</select>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">

      <label class="form-label" for="category">Instructor</label>
      
        <select class="form-select" name="instructor" aria-label="Default select example">
    <option selected>Choose Instructor..</option>
    <?php
                $sql = "SELECT * FROM `instructor`";
                $result = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result)){
                ?>
  <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
 <?php } ?>
</select>
      </div>
    </div>

    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="image">Image</label>
        <input type="file"  name="image" id="image" class="form-control" />
        
      </div>
    </div>
  </div>
  <div class="row mb-4">
   
    
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="price">price</label>
        <input type="text"  name="price" id="price" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="discount">Discount</label>
        <input type="text"  name="discount" id="discount" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="duration">Duration</label>
        <input type="text" name="duration" id="duration" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="lectures">Lectures</label>
        <input type="text" name="lectures" id="lectures" class="form-control" />
        
      </div>
    </div>
    <div class="col">
    <div class="form-outline">
    <label class="form-label" for="form6Example1">Advantages</label>
    <ul id="todo-list">
</ul>
<button type="button" id="addButton" onclick="addTaskField()">+ Add</button>

    </div>
    </div>
  </div>
  
  <div class="row mb-4">
  <div class="col">
      <div class="form-outline">
      <!-- <label  for="detial">Detail</label> -->
        <!-- <input type="text"  name="detial" id="detial"  /> -->
        <label class="form-label" for="wordTextarea">Detail:</label>
        <textarea id="wordTextarea" name="detial" class="form-control"></textarea>
      </div>
    </div>
  </div>
  
      <button type="submit" name="addCourse" class="btn btn-primary my-2">Add Course</button>
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
                <th>Title</th>
                <th>Category</th>
                <th>Instructor</th>
                <th>image</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Duration</th>
                <th>Lectures</th>
                <th>content</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT * FROM `course`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <?php 
                $sql1 = "SELECT * FROM `coursecategory` Where `id` = {$row['category']}";
                $result1 = mysqli_query($conn, $sql1);
                while ($row1 = mysqli_fetch_assoc($result1)){
                
                ?>
                <td><?php echo $row1['category']; ?></td>
                <?php } ?>
                  
                <?php 
                $sql2 = "SELECT * FROM `instructor` Where `id` = {$row['instructor']}";
                $result2 = mysqli_query($conn, $sql2);
                while ($row2 = mysqli_fetch_assoc($result2)){
                
                ?>
                <td><?php echo $row2['name']; ?></td>
                <?php } ?>
                

                <td>
                <img src="../assets/img/uploadedImages/<?php echo $row['image']; ?>" class="img-fluid" alt="no img" height="100px" width="100px" >
                </td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['discount']; ?></td>
                <td><?php echo $row['duration']; ?></td>
                <td><?php echo $row['lectures']; ?></td>
                <td><?php echo $row['content']; ?></td>
                <td>
                  <?php 
                  if (strlen($row['detail']) > 10){
                    echo $str = substr($row['detail'], 0, 7) . '...';
                 } else {
                   echo $row['detail'];
                 }
                  ?>
                </td>
                <td>
                <a href="editCourse.php?id=<?php echo $row['id']?>" type="button" class="btn mb-2 btn-warning">Edit</a>   
                <a href="delCourse.php?id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a>  
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
        