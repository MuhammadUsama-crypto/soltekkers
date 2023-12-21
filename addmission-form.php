<?php  
        include 'components/navheader.php';
        include 'components/config.php';
    ?>

    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-10" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Addmission Form</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-gray-800" href="#">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                        Addmission Form
                    </li>
                </ol>
            </nav>
        </div>
       
    </header>


    <!-- Addmission form
    ================================================== -->
        <div class="container" style="margin-bottom: 30px;">
            <form action="./components/insertAction.php" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-md-4 mb-3">
                        <label for="courseInterested" class="form-label">COURSE INTERSTED</label>
                        <select class="form-select" name="course" aria-label="Default select example">
                            <option selected>Choose Course..</option>
                            <?php 

                            if(isset($_GET['courseId'])) {
                            $id = $_GET['courseId'];
                            $sql = "select * from `course` WHERE `id` = '$id'";
                            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
        ?>      
                        <option selected value="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></option>
                            <?php }
                           $sql = "select * from `course` WHERE `id`!='$id'";
                           $result = mysqli_query($conn, $sql);
           while($row = mysqli_fetch_assoc($result)){
       ?>      
                       <option value="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></option>
                           <?php }
                            }
                            else {

                          
            $sql = "select * from `course`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
        ?>      
                        <option value="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></option>
                            <?php }
                            } ?>
                           
                           
                          </select>
                    </div>
                    <div class="col-md-4 mb-3" >
                        <label for="fullName" class="form-label">FULL NAME</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" aria-label="First name">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="dob" class="form-label">DATE OF BIRTH</label>
                        <input type="date" class="form-control"  name="dob" >
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4 mb-3">

                        <label for="gender" class="form-label">GENDER</label><br>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                          </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                            <label class="form-check-label" for="inlineRadio1">Female</label>
                          </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="other">
                            <label class="form-check-label" for="inlineRadio1">Other</label>
                          </div>
                          
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="email" class="form-label">EMAIL</label><br>
                        <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="phone" class="form-label">PHONE</label><br>
                        <input type="number" class="form-control" name="phone" placeholder="Phone/Whatsapp" aria-label="phone">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="email" class="form-label">GUARDIAN NAME</label><br>
                        <input type="text" class="form-control" name="gname" placeholder="Enter Guardian Name" aria-label="Guardian Name">
                      
                          
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="GUARDIANumber" class="form-label">GUARDIAN NUMBER</label><br>
                        <input type="number" class="form-control" name="gnumber" placeholder="+9231113254744" aria-label="Email">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="postalAddress" class="form-label">POSTAL ADDRESS</label><br>
                        <input type="text" class="form-control" name="address" placeholder="Complete Postal Address" aria-label="phone">
                    </div>
                </div>


                
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="picture" class="form-label">Upload professional Picture</label><br>
                        <input type="file" class="form-control" name="picture"  aria-label="Guardian Name">
                      
                          
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="CNIC" class="form-label">ENTER CNIC <span style="font-size: 15px;">(without dash)</span></label><br>
                        <input type="number" class="form-control"  name="cnic" placeholder="3310387746429"  aria-label="Email">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="postalAddress" class="form-label">LAST DEGREE</label><br>
                        <input type="text" class="form-control" name="lastDegree" placeholder="ENTER YOUR LAST DEGREE" aria-label="phone">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary addmission-button" name="addmission-button">Submit</button>
            </form>
        </div>

    <!-- CALL ACTION
    ================================================== -->
    <section class="py-6 py-md-11 border-top border-bottom" data-jarallax data-speed=".8" style="background-image: url(assets/img/illustrations/illustration-1.jpg)">
        <div class="container text-center py-xl-4" data-aos="fade-up">
            <div class="row">
                <div class="col-xl-7 mx-auto">
                    <h1 class="text-capitalize">Subscribe our newsletter</h1>
                    <p class="text-capitalize font-size-lg mb-md-6 mb-4">Your download should start automatically, if not Click here. Should I give up, huh?.</p>
                    <div class="mx-md-8">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-sm-wide" type="button"  id="button-addon2">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER
    ================================================== -->
    <?php
    include 'components/footer.php';
    ?>