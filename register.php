<?php  
        include 'components/navheader.php';
    ?>

    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-11" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Register</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-gray-800" href="#">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                        Register
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="...html" alt="...">
    </header>


    <!-- REGISTER
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-md-7 col-xl-4 mx-auto">
                <!-- Register -->
                <h3 class="mb-6">Sign Up and Start Learning!</h3>

                <!-- Form Register -->
                <form class="mb-5">

                    <!-- Username -->
                    <div class="form-group mb-5">
                        <label for="modalSignupUsername1">
                            Username
                        </label>
                        <input type="text" class="form-control" id="modalSignupUsername1" placeholder="John">
                    </div>

                    <!-- Email -->
                    <div class="form-group mb-5">
                        <label for="modalSignupEmail1">
                            Username or Email
                        </label>
                        <input type="email" class="form-control" id="modalSignupEmail1" placeholder="johndoe@creativelayers.com">
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-5">
                        <label for="modalSignupPassword3">
                            Password
                        </label>
                        <input type="password" class="form-control" id="modalSignupPassword3" placeholder="**********">
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary" type="submit">
                        SIGN UP
                    </button>

                </form>

                <!-- Text -->
                <p class="mb-0 font-size-sm text-center">
                    Already have an account? <a class="text-underline" href="login.html">Log In</a>
                </p>
            </div>
        </div>
    </div>

    <!-- FOOTER
    ================================================== -->
    <footer class="pt-8 pt-md-11 bg-light">
        <div class="container">
            <div class="row" id="accordionFooter">
                <div class="col-12 col-md-4 col-lg-4">

                    <!-- Brand -->
                    <img src="assets/img/brand.svg" alt="..." class="footer-brand img-fluid mb-4 h-60p">

                    <!-- Text -->
                    <p class="text-gray-800 mb-4 font-size-sm-alone">
                        329 Queensberry Street, North Melbourne VIC 3051, Australia.
                    </p>

                    <div class="mb-4">
                        <a href="tel:1234567890" class="text-gray-800 font-size-sm-alone">123 456 7890</a>
                    </div>

                    <div class="mb-4">
                        <a href="mailto:support@skola.com" class="text-gray-800 font-size-sm-alone">support@skola.com</a>
                    </div>

                    <!-- Social -->
                    <ul class="list-unstyled list-inline list-social mb-4 mb-md-0">
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
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
                                    <a href="about-v1.html" class="text-reset">
                                        Our Company
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="about-v2.html" class="text-reset">
                                        About Us
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="contact-us.html" class="text-reset">
                                        Contact Us
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="contact-us.html" class="text-reset">
                                        Community
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v1.html" class="text-reset">
                                        Student Perks
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="blog-grid-v1.html" class="text-reset">
                                        Blog
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="pricing.html" class="text-reset">
                                        Affiliate Program
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="contact-us.html" class="text-reset">
                                        Careers
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
                                    Topics
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
                                    <a href="course-list-v2.html" class="text-reset">
                                        HTML
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v2.html" class="text-reset">
                                        CSS
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v6.html" class="text-reset">
                                        Design
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v5.html" class="text-reset">
                                        JavaScript
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v4.html" class="text-reset">
                                        Ruby
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v1.html" class="text-reset">
                                        PHP
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v3.html" class="text-reset">
                                        Android
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v4.html" class="text-reset">
                                        Development Tools
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v6.html" class="text-reset">
                                        Business
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
                                    Tracks
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
                                    <a href="lesson-single-v1.html" class="text-reset">
                                        Web Design
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="lesson-single-v2.html" class="text-reset">
                                        Web Development
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="lesson-single-v1.html" class="text-reset">
                                        Rails Development
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="lesson-single-v2.html" class="text-reset">
                                        PHP Development
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="lesson-single-v1.html" class="text-reset">
                                        Android Development
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="lesson-single-v2.html" class="text-reset">
                                        Starting a Business
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
                                    <a href="docs/index.html" class="text-reset">
                                        Documentation
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="docs/index.html" class="text-reset">
                                        Forums
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="docs/index.html" class="text-reset">
                                        Language Packs
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="docs/changelog.html" class="text-reset">
                                        Release Status
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-md-5">
                    <div class="border-top pb-5 pt-6 py-md-4 text-center text-xl-start d-flex flex-column d-md-block d-xl-flex flex-xl-row align-items-center">
                        <p class="text-gray-800 font-size-sm-alone d-block mb-0 mb-md-2 mb-xl-0 order-1 order-md-0 px-9 px-md-0">Copyright © 2021 CreativeLayers. All Right Reserved.</p>

                        <div class="ms-xl-auto d-flex flex-column flex-md-row align-items-stretch align-items-md-center justify-content-center">
                            <ul class="navbar-nav flex-row flex-wrap font-size-sm-alone mb-3 mb-md-0 mx-n4 me-md-5 justify-content-center justify-content-lg-start order-1 order-md-0">
                                <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                    <a href="index.html" class="nav-link px-4 fw-normal text-gray-800">Home</a>
                                </li>
                                <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                    <a href="terms-of-service.html" class="nav-link px-4 fw-normal text-gray-800">Site Map</a>
                                </li>
                                <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                    <a href="terms-of-service.html" class="nav-link px-4 fw-normal text-gray-800">Privacy policy</a>
                                </li>
                                <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                    <a href="terms-of-service.html" class="nav-link px-4 fw-normal text-gray-800">Web Use Policy</a>
                                </li>
                                <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                    <a href="terms-of-service.html" class="nav-link px-4 fw-normal text-gray-800">Cookie Policy</a>
                                </li>
                            </ul>

                            <select class="form-select form-select-sm font-size-sm-alone shadow min-width-140 text-left mb-4 mb-md-0" data-choices>
                                <option>English</option>
                                <option>Tamil</option>
                                <option>French</option>
                            </select>
                        </div>
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

<!-- Mirrored from transvelo.github.io/skola-html/5.1/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Aug 2023 19:47:27 GMT -->
</html>
