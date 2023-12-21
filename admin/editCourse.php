
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
                        $courseSql = "SELECT * FROM `course` WHERE `id`= '$id'";
                        $courseResult = mysqli_query($conn, $courseSql);
                        while($courseRow = mysqli_fetch_assoc($courseResult)){
                        ?>
                    <form action="editAction.php" method="post" enctype="multipart/form-data">

                    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="title">Title</label>
      <input type="text" value="<?php echo $id; ?>" name="id" class="d-none"> 
        <input type="text" name="title" id="title" value="<?php echo $courseRow['title']; ?>" class="form-control" />
        
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
      <img src="../assets/img/uploadedImages/<?php echo $courseRow['image']; ?>" alt="" class="mb-2" height="100px" width="100px" >
        <input type="file"  name="image" id="image" class="form-control" />
        
      </div>
    </div>
  </div>
  <div class="row mb-4">
   
    
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="price">price</label>
        <input type="text"  name="price" value="<?php echo $courseRow['price']; ?>" id="price" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="discount">Discount</label>
        <input type="text"  name="discount" value="<?php echo $courseRow['discount']; ?>" id="discount" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="duration">Duration</label>
        <input type="text" name="duration" value="<?php echo $courseRow['duration']; ?>" id="duration" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="lectures">Lectures</label>
        <input type="text" name="lectures" id="lectures" value="<?php echo $courseRow['lectures']; ?>" class="form-control" />
        
      </div>
    </div>
    <div class="col">
    <div class="form-outline">
    <label class="form-label" for="form6Example1">Content</label>
    <ul id="todo-list">
    <?php 
    $advantages = $courseRow['content'];
    $advantages=explode(',',$advantages);
    foreach($advantages as $advantage) {
    ?>  
    <li id="todo-list">
    <input type="text" class="form-control" name="advantages[]" value="<?php echo $advantage ?>" placeholder="Add new task..." style="width: 50%;  display:inline-block;"/>
          <button type="button" class="btn btn-danger" onclick="removeTaskField(this)">-</button>
    </li>

    <?php } ?>
</ul>
<button type="button" id="addButton" onclick="addTaskField()">+ Add</button>

    </div>
    </div>
  </div>
  
  <div class="row mb-4">
  <div class="col">
      <div class="form-outline">
      <label class="form-label" for="detial">Detail</label>
      <textarea id="wordTextarea" name="detial"  class="form-control"><?php echo  $courseRow['detail']; ?></textarea>
        
      </div>
    </div>
  </div>
  
      <button type="submit" name="editCourse" class="btn btn-primary my-2">Add Course</button>
</form>

 <?php }  ?>

</div>
</div>
</div>
    <!-- form end -->

           


            

            <!-- Footer Start -->
           <?php 
           include 'footer.php';
           ?>
            <!-- Footer End -->
        