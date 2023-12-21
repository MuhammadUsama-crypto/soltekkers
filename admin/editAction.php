<?php 

    include 'config.php';
    // include 'sidebar.php';
    if(isset($_REQUEST['editInstructor'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $expertise = $_POST['expertise'];
        $InstructorImg = $_FILES['InstructorImg'];
       

        if(isset($_FILES['InstructorImg']) && $_FILES['InstructorImg']['error'] === UPLOAD_ERR_OK) {
            // If the 'featureImg' file is uploaded, process it as before
            $img = $_FILES['InstructorImg']['name'];
        $ImgTmpName = $_FILES['InstructorImg']['tmp_name'];
        $folder = "../assets/img/uploadedImages/" . $img;
        move_uploaded_file($ImgTmpName,$folder);
            // Add the 'featureImg' field to the SQL query
            $sql = "UPDATE `instructor` SET `name` = '$name', `expertise` = '$expertise', `img` = '$img' WHERE `instructor`.`id` = $id";
        } else {
            // If no 'featureImg' file is uploaded, exclude 'featureImg' from the SQL query
            $sql = "UPDATE `instructor` SET `name` = '$name', `expertise` = '$expertise' WHERE `instructor`.`id` = $id";
        }
        mysqli_query($conn, $sql);
        header("location: addInstructor.php");
    }



    if(isset($_REQUEST['editCategory'])){ 
        $id  = $_POST['id'];
        $_category = $_POST['category'];
        $sql = "UPDATE `coursecategory` SET `category` = '$_category' WHERE `coursecategory`.`id` = '$id'";
        mysqli_query($conn,$sql);
        header("location: addCategory.php");
    }


    if(isset($_REQUEST['editCourse'])){ 
        $id = $_POST['id'];
        $title = $_POST['title'];
        $category = $_POST['category'];
       $instructor = $_POST['instructor'];
        
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $duration = $_POST['duration'];
        $lectures = $_POST['lectures'];
        $advantages = $_POST['advantages'];
        $detail = mysqli_real_escape_string($conn, $_POST['detial']);
        // echo $detail;
        
        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            // If the 'featureImg' file is uploaded, process it as before
            $image = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $folder = "../assets/img/uploadedImages/" . $image;
        move_uploaded_file($temp_name,$folder);
            // Add the 'featureImg' field to the SQL query        
        foreach ($advantages as $advantage) {
            $uploadedAdvantage[] = $advantage;
       }
       $uploadedAdvantage = implode(",",$uploadedAdvantage);
        $sql = "UPDATE `course` SET `title` = '$title', `category` = '$category', `instructor` = '$instructor', `image` = '$image', `price` = '$price', `discount` = '$discount', `duration` = '$duration', `lectures` = '$lectures', `content` = '$uploadedAdvantage', `detail` = '$detail' WHERE `course`.`id` = '$id'";
           
        } else {
            // If no 'featureImg' file is uploaded, exclude 'featureImg' from the SQL query
            foreach ($advantages as $advantage) {
                $uploadedAdvantage[] = $advantage;
           }
           $uploadedAdvantage = implode(",",$uploadedAdvantage);
                $sql = "UPDATE `course` SET `title` = '$title', `category` = '$category', `instructor` = '$instructor', `price` = '$price', `discount` = '$discount', `duration` = '$duration', `lectures` = '$lectures', `content` = '$uploadedAdvantage', `detail` = '$detail' WHERE `course`.`id` = '$id'";
        }
        mysqli_query($conn, $sql);
        header("location: course.php");

     }

     if(isset($_REQUEST['editService'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        // $services = $_POST['advantages'];
        // echo $discount;
        $detail = mysqli_real_escape_string($conn, $_POST['detail']);
        // echo $detail;
        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $folder = "../assets/img/uploadedImages/" . $image;
        move_uploaded_file($temp_name,$folder);
        $sql = "UPDATE `services` SET `title` = '$title', `image` = '$image',  `detail` = '$detail', `price` = '$price', `discount` = '$discount' WHERE `services`.`id` = '$id'";
    } else {
        $sql = "UPDATE `services` SET `title` = '$title',  `detail` = '$detail', `price` = '$price', `discount` = '$discount' WHERE `services`.`id` = '$id'";
    }
    
    mysqli_query($conn, $sql);
    header("location: service.php");
      }
    

?>