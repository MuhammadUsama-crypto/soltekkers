
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
      <label class="form-label" for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control" />
        
      </div>
    </div>
    
  <div class="row mb-4">
   
    
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="price">Starting Price</label>
        <input type="text"  name="price" id="price" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="discount">Discount</label>
        <input type="text" name="discount" id="discount" class="form-control" />
        
      </div>
    </div>
    
  </div>
  <div class="row mb-4">
  <!-- <div class="col">
    <div class="form-outline">
    <label class="form-label" for="form6Example1">Services</label>
    <ul id="todo-list">
</ul>
<button type="button" id="addButton" onclick="addTaskField()">+ Add</button>

    </div>
    </div> -->
  <div class="col">
      <div class="form-outline">
      <!-- <label class="form-label" for="detial">Detail</label>
        <input type="text" name="detail" id="detail" class="form-control" /> -->
        <label class="form-label" for="wordTextarea">Detail:</label>
        <textarea id="wordTextarea" name="detail" class="form-control"></textarea>
      </div>
    </div>
  </div>
</div>
  

  
      <button type="submit" name="addService" class="btn btn-primary my-2">Add Course</button>
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
                <th>Image</th>
                <th>Detail</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT * FROM `services`";
            $result = mysqli_query($conn, $sql);
            while($row =  mysqli_fetch_assoc($result)) {
          ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['title'] ?> </td>
                <td>
                  <img src="../assets/img/uploadedImages/<?php echo $row['image']; ?>" alt="" height="150px" width="150px">
                </td>
                
                <td><?php echo $row['detail'] ?> </td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['discount'] ?> </td>
                <td>
                  
                <a href="editService.php?id=<?php echo $row['id']?>" type="button" class="btn btn-warning">Edit</a>   |
                <a href="delService.php?id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a>  
              </td>
            </tr>
            <?php }  ?> 
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
        