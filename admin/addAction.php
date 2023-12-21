<?php 

    // include 'sidebar.php';
    include 'config.php';
    if(isset($_REQUEST['addInstructor'])){
        $name = $_POST['name'];
        $expertise = $_POST['expertise'];
        $InstructorImg = $_FILES['InstructorImg'];
        $img = $_FILES['InstructorImg']['name'];
        $ImgTmpName = $_FILES['InstructorImg']['tmp_name'];
        $folder = "../assets/img/uploadedImages/" . $img;
        move_uploaded_file($ImgTmpName,$folder);
        $sql = "INSERT INTO `instructor` (`name`, `expertise`, `img`) VALUES ('$name', '$expertise', '$img')";
        mysqli_query($conn, $sql);
        header("location: addInstructor.php");
    }

    if(isset($_REQUEST['addCategory'])){
        $category = $_POST['category'];
        $sql = "INSERT INTO `coursecategory` (`category`) VALUES ('$category')";
        mysqli_query($conn,$sql);
        header("location: addCategory.php");

    }


    if(isset($_REQUEST["addCourse"])) {
        $title = $_POST['title'];
        $category = $_POST['category'];
        $instructor = $_POST['instructor'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $duration = $_POST['duration'];
        $lectures = $_POST['lectures'];
        $advantages = $_POST['advantages'];
        $detail = mysqli_real_escape_string($conn, $_POST['detial']);
        $image = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $folder = "../assets/img/uploadedImages/" . $image;
        move_uploaded_file($temp_name,$folder);

        
        foreach ($advantages as $advantage) {
            $uploadedAdvantage[] = $advantage;
       }
       $uploadedAdvantage = implode(",",$uploadedAdvantage);
        $sql = "INSERT INTO `course` (`title`, `category`, `instructor`, `image` ,`price`, `discount`, `duration`, `lectures`, `content`, `detail`) VALUES ('$title', '$category', '$instructor', '$image'  , '$price', '$discount', '$duration', ' $lectures', '$uploadedAdvantage', '$detail')";
        mysqli_query($conn, $sql);
        header("location: course.php");
    
    }


    if(isset($_REQUEST["addService"])) {
        $title = $_POST['title'];
        $detail = mysqli_real_escape_string($conn, $_POST['detail']);
        // $services = $_POST['advantages'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $image_name = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $folder = "../assets/img/uploadedImages/" . $image_name;
        move_uploaded_file($temp_name,$folder);

   
    //     foreach ($services as $service) {
    //         $uploadedService[] = $service;
    //    }
    //    $uploadedService = implode(",",$uploadedService);
    $sql = "INSERT INTO `services` (`title`, `image`,`detail`, `price`, `discount`) VALUES ('$title', '$image_name', '$detail' ,  '$price', '$discount')";
    mysqli_query($conn, $sql);
    header("location: service.php");
    }
?>