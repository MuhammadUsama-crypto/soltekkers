<?php  
        include 'components/navheader.php';
    ?>


    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-11" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Instructors</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-gray-800" href="#">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                        Instructors
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="...html" alt="...">
    </header>


  


    <!-- COURSE
    ================================================== -->
    <div class="container pb-4 pb-xl-7">
        <div class="row row-cols-md-3 row-cols-lg-4 mb-6 mb-xl-3">
        <?php
        include 'components/config.php';
                    $sql = "SELECT * FROM `instructor`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)){
                ?>
            <div class="col-md pb-4 pb-md-7">
                <div class="card border shadow p-2 lift">
                    <!-- Image -->
                    <div class="card-zoom" >
                      

                        <a href="#" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/uploadedImages/<?php echo $row['img']; ?>" alt="..."></a>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-3 pt-4 pb-1">
                        <a href="#" class="d-block"><h5 class="mb-0"><?php echo $row['name']; ?></h5></a>
                        <span class="font-size-d-sm"><?php  echo $row['expertise']; ?></span>
                    </div>
                </div>
            </div>
            <?php  } ?>
        </div>


    </div>

    <!-- FOOTER
    ================================================== -->
    <?php
    include 'components/footer.php';
    ?>