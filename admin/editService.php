
<?php
            include 'sidebar.php';
            $id = $_GET['id'];
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
                        
                        
                        $sql = "SELECT * FROM `services` WHERE `id` = '$id'";
                        $result = mysqli_query($conn, $sql);
                        while($row =  mysqli_fetch_assoc($result)) {
                                    ?>
                    <form action="editAction.php" method="post" enctype="multipart/form-data">
                       
                    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="id" value="<?php echo $id;?>">
      <label class="form-label" for="title">Title</label>
        <input type="text" name="title" id="title" value="<?php echo $row['title'];?>" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="image">Image</label>
      <img src="../assets/img/uploadedImages/<?php echo $row['image'];?>" alt="" height="100px" width="100px">
        <input type="file" name="image" id="image" />
        
      </div>
    </div>
    
  <div class="row mb-4">
   
    
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="price">Starting Price</label>
        <input type="text"  name="price" id="price" value="<?php echo $row['price'];?>" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="discount">Discount</label>
        <input type="text" name="discount" id="discount" value="<?php echo $row['discount'];?>" class="form-control" />
      </div>
    </div>
   
    
  </div>
  <div class="row mb-4">
  <!-- <div class="col">
    <div class="form-outline">
    <label class="form-label" for="form6Example1">Advantages</label>
    <ul id="todo-list">
    <?php 
    $services = $row['services'];
    $services=explode(',',$services);
    foreach($services as $service) {
    ?>  
    <li id="todo-list">
    <input type="text" class="form-control" name="advantages[]" value="<?php echo $service ?>" placeholder="Add new task..." style="width: 50%;  display:inline-block;"/>
          <button type="button" class="btn btn-danger" onclick="removeTaskField(this)">-</button>
    </li>

    <?php } ?>
</ul>
<button type="button" id="addButton" onclick="addTaskField()">+ Add</button>

    </div>
    </div> -->
  <div class="col">
      <div class="form-outline">
      <!-- <label class="form-label" for="detial">Detail</label>
        <input type="text" name="detail" id="detail" value="" class="form-control" /> -->

        <label class="form-label" for="wordTextarea">Detail:</label>
        <textarea id="wordTextarea" name="detail" class="form-control"> <?php echo $row['detail'];?></textarea>
      </div>
    </div>
  </div>
</div>
  

  
      <button type="submit" name="editService" class="btn btn-primary my-2">Add Course</button>

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
        