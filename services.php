<?php  
        include 'components/navheader.php';
    ?>


    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-lg-12 mb-8 overlay overlay-primary overlay-80" style="background-image: url(assets/img/covers/cover-19.jpg);">
        <div class="container text-center py-xl-5">
            <h1 class="display-4 fw-semi-bold mb-0 text-white">Our Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        Services
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="...php" alt="...">
    </header>


    <!-- CONTROL BAR
    ================================================== -->
    <div class="container mb-6 mb-xl-8 z-index-2">
        <div class="d-xl-flex align-items-center">
            <p class="mb-xl-0">We found <span class="text-dark">834 results</span> available for you</p>
            <div class="ms-xl-auto d-xl-flex flex-wrap">
                

                <div class="mb-4 mb-xl-0 ms-xl-6">
                    <select class="form-select form-select-sm text-dark shadow-none dropdown-menu-end" data-choices>
                        <option>All Categories</option>
                        <option>Another option</option>
                        <option>Something else here</option>
                    </select>
                </div>

                
                </div>
            </div>
        </div>
    </div>


    <!-- COURSE
    ================================================== -->
    <div class="container pb-4 pb-xl-7">
        <div class="row row-cols-md-2 row-cols-xl-3 mb-6 mb-xl-3">
        <?php 
            include 'components/config.php';
            $sql = "select * from `services`";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result)){
            
            ?> 
            <div class="col-md pb-4 pb-md-7">
                 
                <!-- Card -->
                <div class="card border shadow p-2 lift sk-fade">
                    <!-- Image -->
                    <div class="card-zoom position-relative">
                        <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                            <a href="service-detail.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                <!-- Icon -->
                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                    <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                </svg>

                            </a>
                          
                        </div>

                        <a href="services.php" class="card-img sk-thumbnail d-block">
                            <img class="rounded shadow-light-lg" src="assets/img/uploadedImages/<?php echo $row['image'];?>" alt="...">
                        </a>

                        <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                            <span class="text-white text-uppercase fw-bold font-size-xs"><?php echo $row['discount']; ?> off</span>
                        </span>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                        

                       
                        <!-- Heading -->
                        <div class="position-relative">
                            <a href="service-detail.php?id=<?php echo $row['id'] ?>" class="d-block stretched-link"><h4 class="line-clamp-2  me-md-6 me-lg-10 me-xl-4 mb-2">Website Development</h4></a>
                            <p>
                                <?php
                                 if (strlen($row['detail']) > 70){
                                    echo $str = substr($row['detail'], 0, 70) . '...';
                                 } else {
                                   echo $row['detail'];
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
                                    
                                    <ins class="h4 mb-0 d-block mb-lg-n1">Rs. <?php echo $row['price'];?></ins>
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