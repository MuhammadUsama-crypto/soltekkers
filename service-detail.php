<?php  
        include 'components/navheader.php';
    ?>

    <!-- BREADCRUMBS
    ================================================== -->
    <div class="container">
        <nav class="mb-5 mb-md-8 mt-2" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-scroll">
                <li class="breadcrumb-item">
                    <a class="text-gray-800" href="#">
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-gray-800" href="#">
                        Courses
                    </a>
                </li>
                <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                    Course Detail
                </li>
            </ol>
        </nav>
    </div>

    <!-- COURSE
    ================================================== -->
    <div class="container">
        <div class="row mb-8">
            <?php
            include 'components/config.php';
            $id = $_GET['id'];
            $sql = "select * from `services` where `id` = '$id';";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result)){
            

    ?>
 <div class="col-lg-8 mb-6 mb-lg-0 position-relative">
                <h1 class="me-7 me-xl-14">
                     <?php echo $row['title'];  ?>
                </h1>
                <p class="me-xl-13 mb-5"><?php echo $row['detail'];  ?></p>
            </div>

            

            <div class="col-lg-4">
                <!-- SIDEBAR FILTER
                ================================================== -->
                <div class="d-block rounded border p-2 shadow mb-6">
                    <a href="https://www.youtube.com/watch?v=9I-Y6VQ6tyI" class="d-block sk-thumbnail rounded mb-1" data-fancybox>
                        <div class="h-60p w-60p rounded-circle bg-white size-20-all d-inline-flex align-items-center justify-content-center position-absolute center z-index-1">
                            <!-- Icon -->
                            <svg width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z" fill="currentColor"/>
                            </svg>

                        </div>
                        <img class="rounded shadow-light-lg" src="assets/img/uploadedImages/<?php echo $row['image']; ?>" alt="...">
                    </a>

                    <div class="pt-5 pb-4 px-5 px-lg-3 px-xl-5">
                        <div class="d-flex align-items-center mb-2">
                            <ins class="mb-0">starting from</ins>
                            <ins class="h5 mb-0">Rs. <?php echo $row['price']; ?> </ins>
                            
                            <div class="badge badge-lg badge-purple text-white ms-auto fw-normal"><?php echo $row['discount']; ?>% Off</div>
                        </div>

                        <div class="align-items-center mb-2">
                            <h2>Request a quote</h2>
                            <form action="./components/insertAction.php" method="POST" enctype="multipart/form-data">
                            <input type="text" value="<?php echo $row['title']; ?>" name="service" style="display:none;">
                            <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                                  </div>
                                  <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="+923126643766">
                                  </div>
                                  <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                                  </div>
                                  <div class="mb-3">
                                    <label for="query" class="form-label">Write your Query</label>
                                    <textarea class="form-control" id="query" name="query" placeholder="Give us a small description about your project**" rows="3"></textarea>
                                  </div>
                                  <button class="btn btn-primary btn-block mb-3" type="submit" name="serviceOrder">SUBMIT</button>
                            </form>
                            
                           
                        </div>
                            
                        

                        
                        

                        
                    </div>
                </div>

               <?php } ?>

            </div>
        </div>

     
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div>
                        <h1 class="text-center">Explore more</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-n4 mb-12" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
            <?php
                $sql2 = "Select * from `services`";
                $result2 = mysqli_query($conn, $sql2);
                while($row2 = mysqli_fetch_assoc($result2)){                        
            ?>
            <div class="col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5" style="padding-right:15px;padding-left:15px;">
               
                <!-- Card -->
                <div class="card border shadow p-2 lift sk-fade">
                    <!-- Image -->
                    <div class="card-zoom position-relative">
                        <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                            <a href="service-detail.php?id=<?php echo $row2['id'];?>" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                <!-- Icon -->
                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                    <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                </svg>

                            </a>
                          
                        </div>

                        <a href="services.html" class="card-img sk-thumbnail d-block">
                            <img class="rounded shadow-light-lg" src="assets/img/uploadedImages/<?php echo $row2['image'];?>" alt="...">
                        </a>

                        <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                            <span class="text-white text-uppercase fw-bold font-size-xs"><?php echo $row2['discount']?>%</span>
                        </span>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                        

                       

                        <!-- Heading -->
                        <div class="position-relative">
                            <a href="service-detail.php?id=<?php echo $row2['id'];?>  " class="d-block stretched-link"><h4 class="line-clamp-2  me-md-6 me-lg-10 me-xl-4 mb-2"><?php echo $row2['title'];?></h4></a>
                            <p>
                                <?php
                                 if (strlen($row2['detail']) > 70){
                                    echo $str = substr($row2['detail'], 0, 70) . '...';
                                 } else {
                                   echo $row2['detail'];
                                 }
                                ?>
                            </p>
                            

                            <div class="row mx-n2 align-items-end">
                                <div class="col px-2">
                                    <ul class="nav mx-n3">
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                
                                                <div class="font-size-lg">Starting From</div>
                                            </div>
                                        </li>
                                      
                                    </ul>
                                </div>

                                <div class="col-auto px-2 text-right">
                                    
                                    <ins class="h4 mb-0 d-block mb-lg-n1">Rs. <?php echo $row2['price'];?></ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
           
            
           
           <?php } ?>
        </div>
    </div>

    <!-- FOOTER
    ================================================== -->
    <?php
    include 'components/footer.php';
    ?>