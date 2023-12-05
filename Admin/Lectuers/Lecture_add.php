<?php
ob_start();
include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php");
?>

<body id="page-top">
    <div id="wrapper">
        <?php include("C:/xampp/htdocs/APMS/Admin/parts/Navbar.php") ?>
        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 43px;">&nbsp;+ Add Lecturers</h1>
        </div>
        <?php
        if (isset($_SESSION['upload'])) {
            echo  $_SESSION['upload'];
            unset($_SESSION['upload']);
        }

        if (isset($_SESSION['add-lecturer'])) {
            echo  $_SESSION['add-lecturer'];
            unset($_SESSION['add-lecturer']);
        }

        ?>
        <section id="Add-Degree-Programmes">
            <div></div>
            <form method="POST" enctype="multipart/form-data">

                <div class="container" style="margin-bottom: 20px;">
                    <div class="row">
                        <div class="col-md-6">
                            <input class="border rounded-pill form-control" type="text" placeholder="Lecturers ID" name="lecture_id" style="margin-top: 10px;">
                        </div>
                        <div class="col-md-6">
                            <input class="border rounded-pill form-control" type="text" placeholder="Lectturer Name" name="lec_name" style="margin-bottom: 0px;margin-top: 10px;">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row" style="margin-top: 0px;margin-bottom: 24px;">

                        <div class="col-md-6">

                            <div class="dropdown">
                                <select name="gender" aria-expanded="false" data-bs-toggle="dropdown" class="btn btn-light dropdown-toggle link-dark border rounded-pill border-dark">
                                    <div class="dropdown-menu">
                                        <option selected disabled>Gender</option>
                                        <option class="dropdown-item" value="Male">Male</option>
                                        <option class="dropdown-item" value="Female">Female</option>
                                    </div>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <input class="border rounded-pill form-control" type="text" name="NIC" placeholder="NIC No" required="" style="margin-top: 10px;">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="E mail" required="" class="border rounded-pill form-control">
                        </div>

                        <div class="col">
                            <input type="tel" name="tel_no" placeholder="Mobile No" required="" class="border rounded-pill form-control">
                        </div>

                    </div>
                    <div class="row" style="margin-top: 20px;">

                        <div class="col-md-6">
                            <input type="password" name="password" placeholder="Password" required="" class="border rounded-pill form-control">
                        </div>

                        <div class="col">
                            <input type="tel" name="username" placeholder="Username" required="" class="border rounded-pill form-control">
                        </div>

                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-6">
                            <label class="form-label">&nbsp; &nbsp;Lecturer Pic</label>
                            <input type="file" name="lec_img" style="margin-bottom: 5px;margin-top: 4px;" accept="image/*" class="border rounded-pill form-control form-control-sm">
                        </div>

                        <div class="col">
                            <label class="form-label">&nbsp; &nbsp;DOB</label>
                            <input class="border rounded-pill form-control" name="BOD" type="date">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <input class="btn border rounded-pill btn-success" type="submit" name="submit" style="margin-left: 45%;margin-top: 20px;">
                    </div>
                </div>
            </form>


            <?php
            if (isset($_POST['submit'])) {
                //echo "Clicked";


                $lec_id = $_POST['lecture_id'];
                $name = $_POST['lec_name'];
                $gender = $_POST['gender'];
                $nic_num = $_POST['NIC'];
                $email = $_POST['email'];
                $tel_no = $_POST['tel_no'];
                $lec_password = $_POST['password'];
                $lec_username = $_POST['username'];
                $date_of_birth = $_POST['BOD'];
                $address='';
                $Bio='';
                $linkdin='';
                $github='';
                $role_id=3;


                if (isset($_FILES['lec_img']['name'])) {
                    //upload image 
                    // we need image name,source path, destination path;
                    $image_name = $_FILES['lec_img']['name'];

                    //renameing image name;
                    //get new extention to our image
                    $parts = explode('.', $image_name);
                    $ext = end($parts);

                    //renmae the image
                    $image_name = "lec_img" . rand(0000, 9999) . '.' . $ext;


                    $source_path = $_FILES['lec_img']['tmp_name'];

                    $destination_path = "C:/xampp/htdocs/APMS/images/lecturers/" . $image_name;


                    //upload the image
                    $upload = move_uploaded_file($source_path, $destination_path);

                    //check image upload or not;

                    if ($upload == false) {
                        //display session massage in add-category.php site;
                        $_SESSION['upload'] = "<div class='erro'> Failed to upload image / please give path of image </div>  ";

                        //go back to category page;
                        header('location:Lecture_add.php');

                        //stop the process
                        die();
                    }
                } else {
                    //dont's upload image and image_name value as blank (image_name="")
                    $image_name = "";
                }


                // create SQL quary to add data to databse

                $sql = " INSERT INTO tbl_lecturer SET
                        index_no ='$lec_id',
                        name ='$name',
                        address ='$address',
                        gender ='$gender',
                        bio='$Bio',
                        image='$image_name',
                        tel_no='$tel_no',
                        gmail='$email',
                        linkdin='$linkdin',
                        github='$github',
                        nic='$nic_num',
                        DOB='$date_of_birth',
                        username='$lec_username',
                        password='$lec_password',
                        role_id='$role_id'
                    ";

                // 3.execute SQL quary;

                $res = mysqli_query($conn, $sql);

                //check in the quary data are added or not 

                if ($res == true) {

                    // display quary work and data added to database
                    $_SESSION['add-lecturer'] = "<div class='success'> Lectuer added succesfully </div>";

                    //display massge in site manage-category;
                    header('location:/APMS/Admin/Lectuers/Lecture_add.php');
                } else {
                    //failed to add category to database;
                    $_SESSION['add-lecturer'] = "<div class='erro'> Failed to add new Lectuer </div>";

                    //display massge in site add-category ;
                    header('location:/APMS/Admin/Lectuers/Lecture_add.php');
                }
            }




            ?>









        </section>
    </div>
    <?php include("C:/xampp/htdocs/APMS/Admin/parts/footer.php");
    ob_end_flush();
    ?>