<?php  
        include 'components/navheader.php';
        include 'components/config.php';
    ?>

    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-10" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Request a Quote</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-gray-800" href="#">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                        Service Booking Form
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
                    <div class="col-md-6 mb-3">
                        <label for="courseInterested" class="form-label">Select Service</label>
                       
                        <select class="form-select" name="service" aria-label="Default select example">
                      
                        <option selected>Choose your service..</option>
                        <?php 
            $sql = "select* from `services`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
        ?>      
                        <option value="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></option>
                            <?php } ?>
                          </select>

                         

                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="fullName" class="form-label">NAME</label>
                        <input type="text" class="form-control" name ="name" placeholder="Enter Your name" aria-label="First name">
                    </div>
                   
                    
                </div>

                <div class="row mb-3">
                    
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">EMAIL</label><br>
                        <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">PHONE</label><br>
                        <input type="number" class="form-control" name="phone" placeholder="Phone/Whatsapp" aria-label="phone">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="query" class="form-label">WRITE YOUR QUERY</label><br>
                    <textarea class="form-control" id="query" name="query" placeholder="Give us a small description about your project**" rows="3"></textarea>
                        </div>
                </div>
                <button type="submit" name="serviceBookingForm"  type="submit"  class="btn btn-primary addmission-button">Submit</button>
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
                                    <button class="btn btn-primary btn-sm-wide" type="button" id="button-addon2">Subscribe</button>
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