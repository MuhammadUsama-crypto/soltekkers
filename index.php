<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Lora:wght@400;700&amp;family=Montserrat:wght@400;500;600;700&amp;family=Nunito:wght@400;700&amp;display=swap" rel="stylesheet">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/fontawesome.css">
    <link rel="stylesheet" href="assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/libs/aos/dist/aos.css">
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="assets/libs/flickity-fade/flickity-fade.css">
    <link rel="stylesheet" href="assets/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="assets/libs/highlightjs/styles/vs2015.css">
    <link rel="stylesheet" href="assets/libs/jarallax/dist/jarallax.css">
    <link rel="stylesheet" href="assets/libs/quill/dist/quill.core.css" />

    <!-- Map -->
    <link href='../../../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">

    <title>Skola Home v2</title>

</head>
<body>

    <!-- NAVBAR
    ================================================== -->
    <header class="navbar navbar-expand-xl navbar-dark py-4" >
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand me-0" href="index.php">
                <img src="assets/img/logo_2-removebg-preview.png" class="navbar-brand-img" alt="..." width="500px" height="400px">
            </a>

            <!-- Collapse -->
            <div class="collapse navbar-collapse z-index-lg" id="navbarCollapse">

                <!-- Toggler -->
                <button class="navbar-toggler outline-0 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Icon -->
                    <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                        <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                    </svg>

                </button>

                <!-- Navigation -->
                <ul class="navbar-nav ms-auto sticky-top ">
                    <li class="nav-item">
                        <a class="nav-link px-xl-4" id="navbarLandings"  href="index.php" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-xl-4" id="navbarLandings"  href="courses.php" aria-haspopup="true" aria-expanded="false">
                            Courses
                        </a>
                        
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-xl-4" id="navbarLandings"  href="services.php" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-xl-4" id="navbarLandings"  href="ceo.php" aria-haspopup="true" aria-expanded="false">
                            Ceo Messege
                        </a>
                        
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-xl-4" id="navbarLandings"  href="about.php" aria-haspopup="true" aria-expanded="false">
                            About us
                        </a>
                        
                    </li>

                     <li class="nav-item">
                        <a class="nav-link px-xl-4" id="navbarLandings"  href="contact.php" aria-haspopup="true" aria-expanded="false">
                            Contact us
                        </a>
                        
                    </li>
                </ul>
            </div>

            <!-- Search, Account & Cart -->
            <ul class="navbar-nav flex-row ms-auto ms-xl-0 me-n2 me-md-n4 align-items-center">
                <li class="nav-item border-0 px-0 d-none d-370-block d-xl-block">
                    <a class="nav-link d-flex px-3 px-md-4 search-mobile text-white-all icon-xs" data-bs-toggle="collapse" href="#collapseSearchMobile" role="button" aria-expanded="false" aria-controls="collapseSearchMobile">
                        <!-- Icon -->
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor"/>
                            <path d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z" fill="currentColor"/>
                        </svg>


                        <!-- Icon -->
                        <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                            <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                        </svg>

                    </a>

                    <div class="collapse position-absolute right-0 left-0 mx-4" id="collapseSearchMobile">
                        <div class="card card-body p-4 mt-6 mt-xl-4 shadow-dark">
                            <!-- Search -->
                            <form class="w-100">
                                <div class="input-group border rounded">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-sm text-secondary icon-xs d-flex align-items-center" type="submit">
                                            <!-- Icon -->
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor"/>
                                                <path d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z" fill="currentColor"/>
                                            </svg>

                                        </button>
                                    </div>
                                    <input class="form-control form-control-sm border-0 ps-0" type="search" placeholder="What do you want to learn ?" aria-label="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                </li>

              

                

                <li class="nav-item border-0 px-0 d-none d-xl-block">
                    <a href="service-booking.php" class="btn btn-sm py-3 btn-white mx-4 px-md-7 lift ">
                        Book a Service
                    </a>
                </li>
            </ul>

            <!-- Toggler -->
            <button class="navbar-toggler ms-4 ms-md-5 shadow-none bg-teal text-white icon-xs p-0 outline-0 h-40p w-40p d-flex d-xl-none place-flex-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Icon -->
                <svg width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
                    <rect width="25" height="1" fill="currentColor"/>
                    <rect y="8" width="15" height="1" fill="currentColor"/>
                    <rect y="16" width="20" height="1" fill="currentColor"/>
                </svg>

            </button>
        </div>
    </header>


    <!-- HERO
    ================================================== -->
    <section class="pt-12 pt-md-13 pt-xl-14 mt-n12  position-relative" data-jarallax data-speed=".8" style="background-image: url(assets/img/illustrations/illustration-13.svg)">
        <!-- Cursor position parallax -->
        <div class="position-absolute right-0 left-0 top-0 bottom-0">
            <div class="cs-parallax">
                <div class="cs-parallax-layer" data-depth="0.1">
                    <img class="img-fluid" src="assets/img/parallax/layer-11.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.3">
                    <img class="img-fluid" src="assets/img/parallax/layer-12.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.2">
                    <img class="img-fluid" src="assets/img/parallax/layer-13.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.2">
                    <img class="img-fluid" src="assets/img/parallax/layer-14.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.4">
                    <img class="img-fluid" src="assets/img/parallax/layer-15.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.3">
                    <img class="img-fluid" src="assets/img/parallax/layer-16.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.2">
                    <img class="img-fluid" src="assets/img/parallax/layer-17.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.2">
                    <img class="img-fluid" src="assets/img/parallax/layer-18.svg" alt="Layer">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mx-auto text-center">
                    <!-- Heading -->
                    <h1 class="display-2 text-white" data-aos="fade-left" data-aos-duration="150">
                        Start Investing in <span class="text-orange fw-bold">You</span>
                    </h1>

                    <!-- Text -->
                    <p class="lead text-capitalize text-cyan px-lg-6 px-xl-4" data-aos="fade-up" data-aos-duration="200">Technology is bringing a massive wave of evolution on learning things in different ways.</p>

                    <!-- Buttons -->
                    <a href="addmission-form.php" class="btn btn-helio btn-x-wide shadow mb-5 text-white mt-1" data-aos-duration="200" data-aos="fade-up">Enroll Now</a>

                    <!-- Image -->
                    <img src="assets/img/illustrations/illustration-2.png" class="img-fluid" alt="..." data-aos="fade-up">
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- CATEGORIES
    ================================================== -->
    

    <!-- Our Courses
    ================================================== -->
    <section class="pt-5 pb-9 py-md-11">
        <div class="container">
            <div class="text-center mb-5 mb-md-8">
                <h1 class="mb-1">Featured Courses</h1>
                <p class="font-size-lg text-capitalize">Discover your perfect program in our courses.</p>
            </div>

            <div class="container pb-4 pb-xl-7">
        <div class="row row-cols-md-2 row-cols-xl-3 mb-6 mb-xl-3">

        <?php 
            include 'components/config.php';
            $sql = "SELECT * FROM `course`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)){



        ?>

            <div class="col-md pb-4 pb-md-7">
                <!-- Card -->
                <div class="card card-border-hover border shadow-dark-hover p-2 lift sk-fade">
                    <!-- Image -->
                    <div class="card-zoom position-relative">
                        <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                            <a href="course-detail.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                <!-- Icon -->
                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                    <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                </svg>

                            </a>
                           
                        </div>

                        <a href="course-detail.php?id=<?php echo $row['id']; ?>" class="card-img sk-thumbnail d-block">
                            <img class="rounded shadow-light-lg img-fluid" src="assets/img/uploadedImages/<?php echo $row['image']; ?>" alt="..." >
                        </a>

                        <span style="background-color: #FF960B;" class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                            <span  class="text-white text-uppercase fw-bold font-size-xs"><?php echo $row['discount']; ?>%</span>
                        </span>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                        <a href="instructors-single.html" class="d-block">
                            <div class="avatar sk-fade-right avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                <?php 
                                $sql2 = "SELECT * FROM `instructor` Where `id` = {$row['instructor']}";
                                $result2 = mysqli_query($conn, $sql2);
                                while ($row2 = mysqli_fetch_assoc($result2)){
                                
                                ?>
                               
                                <img src="assets/img/uploadedImages/<?php echo $row2['img']; ?> " alt="..." class="avatar-img rounded-circle img-fluid">
                                 <?php } ?>   
                            </div>
                        </a>

                        <!-- Preheading -->
                        <?php
                        $sql1 = "SELECT * FROM `coursecategory` Where `id` = {$row['category']}";
                        $result1 = mysqli_query($conn, $sql1);
                        while ($row1 = mysqli_fetch_assoc($result1)){
                            
                            ?> 
                        <a href="course-detail.php?id=<?php echo $row['id']; ?>"><span class="mb-1 d-inline-block text-gray-800"><?php echo $row1['category'];?></span></a>
                            <?php  }?>
                        <!-- Heading -->
                        <div class="position-relative">
                            <a href="course-detail.php?id=<?php echo $row['id']; ?>"  class="d-block stretched-link"><h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2"><?php echo $row['title'];?></h4></a>

                          
                            <div class="row mx-n2 align-items-end">
                                <div class="col px-2">
                                    <ul class="nav mx-n3">
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm"><?php echo $row['lectures'] ?> lectures</div>
                                            </div>
                                        </li>
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                        <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div  class="font-size-sm"><?php echo $row['duration'];?></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-auto px-2 text-right">
                                
                                    <ins class="h4 mb-0 d-block mb-lg-n1" style="color: #FF960B;">Rs.<?php echo $row['price']; ?></ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php } ?>
        </div>

            <div class="text-center">
                <a href="courses.php" class="d-inline-flex align-items-center fw-medium">
                    Browse All
                    <div class="ms-2 d-flex">
                        <!-- Icon -->
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z" fill="currentColor"/>
                        </svg>

                    </div>
                </a>
            </div>
        </div>
    </section>



    <!-- VIDEO
    ================================================== -->
    <h1 class="text-center" style="color: #072E79">CEO <span style="color: #ff960b;">MESSAGE</span></h1>
    <div class="center-y mt-n14 mt-md-n15">
        <div class="container">
            <a href="https://youtu.be/1UmBghANpzI?si=4RdkJlbFRt7k6XKx" class="py-12 py-md-14 bg-cover rounded text-center d-block" style="background-image: url(assets/img/covers/ceoCover.png);" data-aos="fade-up" data-fancybox>
                <!-- Button -->
                <div  class="btn h-90p w-90p size-30-all rounded-circle btn-white d-inline-flex align-items-center justify-content-center shadow lift text-dark">
                    <!-- Icon -->
                    <svg width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z" fill="currentColor"/>
                    </svg>

                </div>
            </a>
        </div> <!-- / .container -->
    </div>

     <!-- Our Services
    ================================================== -->
 
    

    <!-- COUNTUP
    ================================================== -->
    <div class="pt-14 pt-md-15 pb-9 bg-white">
        <div class="container mt-5">
            <div class="row w-xl-80 mx-xl-auto text-center">
                <div class="col-md-3 mb-6 mb-md-0" data-aos="fade-up" data-aos-delay="50">
                    <div class="h1"><span data-toggle="countup" data-from="0" data-to="749" data-aos data-aos-id="countup:in"></span></div>
                    <p class="font-size-lg fw-medium mb-0">Creative Events</p>
                </div>

                <div class="col-md-3 mb-6 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="h1"><span data-toggle="countup" data-from="0" data-to="853" data-aos data-aos-id="countup:in"></span></div>
                    <p class="font-size-lg fw-medium mb-0">Skilled Tutors</p>
                </div>

                <div class="col-md-3 mb-6 mb-md-0" data-aos="fade-up" data-aos-delay="150">
                    <div class="h1"><span data-toggle="countup" data-from="0" data-to="28" data-aos data-aos-id="countup:in"></span>k+</div>
                    <p class="font-size-lg fw-medium mb-0">Online Courses</p>
                </div>

                <div class="col-md-3 mb-6 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="h1"><span data-toggle="countup" data-from="0" data-to="53" data-aos data-aos-id="countup:in"></span>k+</div>
                    <p class="font-size-lg fw-medium mb-0">People Worldwide</p>
                </div>
            </div>
        </div>
    </div>


    <section class="pt-5 pb-9 py-md-11">
        <div class="container">
            <div class="text-center mb-5 mb-md-8">
                <h1 class="mb-1">Our Services</h1>
                <p class="font-size-lg text-capitalize">Discover your perfect Service for your Business.</p>
            </div>

            <div class="row row-cols-md-2 row-cols-xl-3 mb-2">

                <?php 
                $sql3 = "SELECT * FROM `services`";
                $result3 = mysqli_query($conn, $sql3);
                while ($row3 = mysqli_fetch_assoc($result3)){
                
                ?>
                       

                <div class="col-md pb-4 pb-md-7">
                    <!-- Card -->
                    <div class="card border shadow p-2 lift sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                <a href="service-detail.php?id=<?php echo $row3['id']; ?>" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                    <!-- Icon -->
                                    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor"/>
                                        <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor"/>
                                    </svg>

                                </a>
                              
                            </div>

                            <a href="service-detail.php?id=<?php echo $row3['id']; ?>" class="card-img sk-thumbnail d-block">
                                <img class="rounded shadow-light-lg" src="assets/img/uploadedImages/<?php echo $row3['image']; ?>" alt="...">
                            </a>

                            <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                            </span>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                            

                            <!-- Preheading -->
                            <a href="service-detail.php?id=<?php echo $row3['id']; ?>"><span class="mb-1 d-inline-block text-gray-800">Development</span></a>

                            <!-- Heading -->
                            <div class="position-relative">
                                <a href="service-detail.php?id=<?php echo $row3['id']; ?>" class="d-block stretched-link"><h4 class="line-clamp-2  me-md-6 me-lg-10 me-xl-4 mb-2"><?php echo $row3['title']; ?></h4></a>
                                <p>
                                <?php
                                 if (strlen($row3['detail']) > 70){
                                    echo $str = substr($row3['detail'], 0, 70) . '...';
                                 } else {
                                   echo $row3['detail'];
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
                                        
                                        <ins class="h4 mb-0 d-block mb-lg-n1">Rs.<?php echo $row3['price']; ?></ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  } ?>
               
            </div>

            <div class="text-center">
                <a href="services.php" class="d-inline-flex align-items-center fw-medium">
                    Browse All
                    <div class="ms-2 d-flex">
                        <!-- Icon -->
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z" fill="currentColor"/>
                        </svg>

                    </div>
                </a>
            </div>
        </div>
    </section>

     <!-- INSTRUCTORS
    ================================================== -->
    <section class="py-5 py-md-11 bg-white">
        <div class="container">
            <div class="row align-items-end mb-3 mb-md-5" data-aos="fade-up">
                <div class="col-md mb-4 mb-md-0">
                    <h1 class="mb-1">Top Rating Instructors</h1>
                    <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program and learn from experts.</p>
                </div>
                <div class="col-md-auto">
                    <a href="instructors.php" class="d-flex align-items-center fw-medium">
                        Browse All
                        <div class="ms-2 d-flex">
                            <!-- Icon -->
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z" fill="currentColor"/>
                            </svg>

                        </div>
                    </a>
                </div>
            </div>

            <div class="mx-n3 mx-md-n4" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                <?php
                    $sql2 = "SELECT * FROM `instructor`";
                    $result2 = mysqli_query($conn, $sql2);
                    while ($row2 = mysqli_fetch_assoc($result2)){
                ?>
                <div class="col-12 mw-xl-20 col-md-3 text-center py-5 px-3 px-md-4">
                    <div class="card">
                        <!-- Image -->
                        <div class="card-zoom position-relative d-flex justify-content-center">
                           
                            <a href="#" class="rounded-circle overflow-hidden card-hover-overlay position-relative d-block" style="max-width: 150px;"><img class="rounded-circle mx-auto shadow-light-lg img-fluid" src="assets/img/uploadedImages/<?php  echo $row2['img'];?>" alt="..."></a>
                        </div>



                        

                        <!-- Footer -->
                        <div class="card-footer px-3 pt-4 pb-1">
                            <a href="instructors-single.php" class="d-block"><h5 class="mb-0"><?php  echo $row2['name'];?></h5></a>
                            <span class="font-size-d-sm"><?php  echo $row2['expertise'];?></span>
                        </div>
                    </div>
                </div>
                <?php  } ?>
            </div>
            
        </div>
    </section>


   
    <!-- BLOG
    ================================================== -->
    <!-- <section class="bg-white py-5 py-md-11">
        <div class="container">
            <div class="text-center mb-4 mb-md-7">
                <h1 class="mb-1">Latest News</h1>
                <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program in our courses.</p>
            </div>

            <div class="row row-cols-md-2 row-cols-lg-3">
                <div class="col-md mb-5 mb-lg-0">
                    <div class="card border shadow p-2 lift sk-fade">
                        <div class="card-zoom position-relative">
                            <a href="blog-single.php" class="card-img d-block sk-thumbnail img-ratio-3"><img class="rounded shadow-light-lg img-fluid" src="assets/img/post/post-1.jpg" alt="..."></a>

                            <a href="blog-single.php" class="badge sk-fade-bottom badge-lg badge-helio badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                <span class="text-white fw-normal font-size-sm">Figma</span>
                            </a>
                        </div>

                        <div class="card-footer px-2 pb-0 pt-4">
                            <ul class="nav mx-n3 mb-3">
                                <li class="nav-item px-3">
                                    <a href="blog-single.php" class="d-flex align-items-center text-gray-800">
                                        <div class="me-3 d-flex">
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z" fill="currentColor"/>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">Jack Wilson</div>
                                    </a>
                                </li>
                                <li class="nav-item px-3">
                                    <a href="blog-single.php" class="d-flex align-items-center text-gray-800">
                                        <div class="me-2 d-flex">
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z" fill="currentColor"/>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">06 April, 2020</div>
                                    </a>
                                </li>
                            </ul>

                            <a href="blog-single.php" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">The Best Destinations to Begin Your Round the World Trip</h5></a>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-5 mb-lg-0">
                    <div class="card border shadow p-2 lift sk-fade">
                        <div class="card-zoom position-relative">
                            <a href="blog-single.php" class="card-img d-block sk-thumbnail img-ratio-3"><img class="rounded shadow-light-lg img-fluid" src="assets/img/post/post-2.jpg" alt="..."></a>

                            <a href="blog-single.php" class="badge sk-fade-bottom badge-lg badge-helio badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                <span class="text-white fw-normal font-size-sm">Adobe XD</span>
                            </a>
                        </div>

                        <div class="card-footer px-2 pb-0 pt-4">
                            <ul class="nav mx-n3 mb-3">
                                <li class="nav-item px-3">
                                    <a href="blog-single.php" class="d-flex align-items-center text-gray-800">
                                        <div class="me-3 d-flex">
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z" fill="currentColor"/>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">Jack Wilson</div>
                                    </a>
                                </li>
                                <li class="nav-item px-3">
                                    <a href="blog-single.php" class="d-flex align-items-center text-gray-800">
                                        <div class="me-2 d-flex">
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z" fill="currentColor"/>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">06 April, 2020</div>
                                    </a>
                                </li>
                            </ul>

                            <a href="blog-single.php" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">An Indigenous Anatolian Syllabic Script From 3500 Years Ago</h5></a>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-5 mb-lg-0">
                    <div class="card border shadow p-2 lift sk-fade">
                        <div class="card-zoom position-relative">
                            <a href="blog-single.php" class="card-img d-block sk-thumbnail img-ratio-3"><img class="rounded shadow-light-lg img-fluid" src="assets/img/post/post-3.jpg" alt="..."></a>

                            <a href="blog-single.php" class="badge badge-lg sk-fade-bottom badge-helio badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                <span class="text-white fw-normal font-size-sm">Photoshop</span>
                            </a>
                        </div>

                        <div class="card-footer px-2 pb-0 pt-4">
                            <ul class="nav mx-n3 mb-3">
                                <li class="nav-item px-3">
                                    <a href="blog-single.php" class="d-flex align-items-center text-gray-800">
                                        <div class="me-3 d-flex">
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z" fill="currentColor"/>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">Jack Wilson</div>
                                    </a>
                                </li>
                                <li class="nav-item px-3">
                                    <a href="blog-single.php" class="d-flex align-items-center text-gray-800">
                                        <div class="me-2 d-flex">
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z" fill="currentColor"/>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">06 April, 2020</div>
                                    </a>
                                </li>
                            </ul>

                            <a href="blog-single.php" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">10 Best Countries to Visit for Beginner Travelers</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- CALL ACTION
    ================================================== -->
    <section class="py-6 py-md-11" data-jarallax data-speed=".8" style="background-image: url(assets/img/illustrations/illustration-4.jpg)">
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
                                    <button class="btn btn-helio btn-sm-wide text-white" type="button" id="button-addon2">Subscribe</button>
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
    <footer class="pt-8 pt-md-11 bg-darken bg-gradient-2">
        <div class="container">
            <div class="row" id="accordionFooter">
                <div class="col-12 col-md-4 col-lg-4">

                    <!-- Brand -->
                    <img src="assets/img/logo_2-removebg-preview.png" alt="..." class="footer-brand img-fluid mb-4 h-60p">

                    <!-- Text -->
                    <p class="text-gray-800 mb-4 font-size-sm-alone">
                        Saeed colony Madina Town, Faisalabad, PAkis
                    </p>

                    <div class="mb-4">
                        <a href="tel:1234567890" class="text-gray-800 font-size-sm-alone">123 456 7890</a>
                    </div>

                    <div class="mb-4">
                        <a href="mailto:support@soltekers.com" class="text-gray-800 font-size-sm-alone">support@soltekers.com</a>
                    </div>

                    <!-- Social -->
                    <ul class="list-unstyled list-inline list-social mb-4 mb-md-0 mx-n2">
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-decoration-none w-36 h-36 bg-white-hover-10 rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-decoration-none w-36 h-36 bg-white-hover-10 rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-decoration-none w-36 h-36 bg-white-hover-10 rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-decoration-none w-36 h-36 bg-white-hover-10 rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 col-lg-2">
                    <div class="mb-5 mb-xl-0 footer-accordion">

                        <!-- Heading -->
                        <div id="widgetOne">
                            <h5 class="mb-5">
                                <button class="text-dark fw-medium footer-accordion-toggle d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#widgetcollapseOne" aria-expanded="true" aria-controls="widgetcollapseOne">
                                    Our Company
                                    <span class="ms-auto text-dark">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>
                                </button>
                            </h5>
                        </div>

                        <div id="widgetcollapseOne" class="collapse show" aria-labelledby="widgetOne" data-parent="#accordionFooter">
                            <!-- List -->
                            <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-6 mb-md-8 mb-lg-0">
                                <li class="mb-3">
                                    <a href="index.php" class="text-reset">
                                        Our Company
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="about.php" class="text-reset">
                                        About Us
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="contact.php" class="text-reset">
                                        Contact Us
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="courses.php" class="text-reset">
                                        Courses
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="services.php" class="text-reset">
                                        Services
                                    </a>
                                </li>
                               
                                <li class="mb-3">
                                    <a href="instructors.php" class="text-reset">
                                        Our Instructors
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-2">
                    <div class="mb-5 mb-xl-0 ms-xl-6 footer-accordion">

                        <!-- Heading -->
                        <div id="widgetTwo">
                            <h5 class="mb-5">
                                <button class="text-dark fw-medium footer-accordion-toggle d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#widgetcollapseTwo" aria-expanded="false" aria-controls="widgetcollapseTwo">
                                    Our Services
                                    <span class="ms-auto text-dark">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>
                                </button>
                            </h5>
                        </div>

                        <div id="widgetcollapseTwo" class="collapse" aria-labelledby="widgetTwo" data-parent="#accordionFooter">
                            <!-- List -->
                            <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-6 mb-md-8 mb-lg-0">
                                <li class="mb-3">
                                    <a href="#" class="text-reset">
                                        Website Development
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="text-reset">
                                       App. Development
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="text-reset">
                                        Digital Marketing
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="text-reset">
                                        Graphics Designing
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="text-reset">
                                        UI/UX Designing
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="text-reset">
                                        Content Writing
                                    </a>
                                </li>
                               
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 offset-md-4 col-lg-2 offset-lg-0">
                    <div class="mb-5 mb-xl-0 ms-xl-6 footer-accordion">

                        <!-- Heading -->
                        <div id="widgetThree">
                            <h5 class="mb-5">
                                <button class="text-dark fw-medium footer-accordion-toggle d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#widgetcollapseThree" aria-expanded="false" aria-controls="widgetcollapseThree">
                                    Our Courses
                                    <span class="ms-auto text-dark">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>
                                </button>
                            </h5>
                        </div>

                        <div id="widgetcollapseThree" class="collapse" aria-labelledby="widgetThree" data-parent="#accordionFooter">
                            <!-- List -->
                            <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-0">
                                <li class="mb-3">
                                    <a href="#" class="text-reset">
                                        Web Design
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="text-reset">
                                        Web Development
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="text-reset">
                                        Digital Marketing
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="text-reset">
                                        Graphics Designing
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="text-reset">
                                        UI/UX Designing
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="text-reset">
                                        Content Writing
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-2 d-xl-flex">
                    <div class="mb-5 mb-xl-0 ms-xl-auto footer-accordion">

                        <!-- Heading -->
                        <div id="widgetFour">
                            <h5 class="mb-5">
                                <button class="text-dark fw-medium footer-accordion-toggle d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#widgetcollapseFour" aria-expanded="false" aria-controls="widgetcollapseFour">
                                    Support
                                    <span class="ms-auto text-dark">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>
                                </button>
                            </h5>
                        </div>

                        <div id="widgetcollapseFour" class="collapse" aria-labelledby="widgetFour" data-parent="#accordionFooter">
                            <!-- List -->
                            <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-0">
                                <li class="mb-3">
                                    <a href="service-booking.php" class="text-reset">
                                        Request Quote
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="addmission-form.php" class="text-reset">
                                        Addmission Form
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="https://wa.link/xgqc86" class="text-reset">
                                    +92 308 7506651
                                    </a>
                                </li>
                                <li class="mb-3">
                                <a href="mailto:support@soltekers.com" class="text-gray-800 font-size-sm-alone">support@soltekers.com</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-md-5">
                    <div class="pb-5 pt-6 py-md-4 text-center text-xl-start d-flex flex-column d-md-block d-xl-flex flex-xl-row align-items-center">
                        <p class="text-gray-800 font-size-sm-alone d-block mb-0 mb-md-2 mb-xl-0 order-1 order-md-0 px-9 px-md-0">Copyright © 2023 <a href="www.soltekkers.com" style="color: orange;">SolTekkers</a>. All Right Reserved. | Developed by <a href="https://softwerra.com/" style="color: orangered;">Softwerra</a></p>

                        
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>


    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="assets/libs/aos/dist/aos.js"></script>
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="assets/libs/countup.js/dist/countUp.min.js"></script>
    <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="assets/libs/flickity-fade/flickity-fade.js"></script>
    <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/libs/isotope-layout/dist/isotope.pkgd.min.js"></script>
    <script src="assets/libs/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/libs/jarallax/dist/jarallax-video.min.js"></script>
    <script src="assets/libs/jarallax/dist/jarallax-element.min.js"></script>
    <script src="assets/libs/parallax-js/dist/parallax.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
    <script src="assets/libs/typed.js/lib/typed.min.js"></script>

    <!-- Map -->
    <script src='../../../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>


</body>


</html>
