<?php include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php");
ob_start(); ?>

<body id="page-top">
    <div id="wrapper">

        <?php include("C:/xampp/htdocs/APMS/Admin/parts/Navbar.php") ?>



        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 43px;">&nbsp;+ Add Degree Programmes</h1>
        </div>
        <?php
        if (isset($_SESSION['upload-erro'])) {
            echo  $_SESSION['upload-erro'];
            unset($_SESSION['upload-erro']);
        }

        if (isset($_SESSION['add-Degree'])) {
            echo  $_SESSION['add-Degree'];
            unset($_SESSION['add-Degree']);
        }
        ?>

        <section id="Add-Degree-Programmes">
            <div></div>
            <form method="POST" enctype="multipart/form-data">
                <div class="container" style="margin-bottom: 20px;">
                    <div class="row">

                        <div class="col-md-6">

                            <input type="text" name="Degree_index" placeholder="Degree Index" class="border rounded-pill form-control" required="" style="margin-top: 10px;">

                        </div>

                        <div class="col-md-6">

                            <input type="text" name="Degree_name" placeholder="Degree programme Name" class="border rounded-pill form-control" required="" style="margin-bottom: 0px;margin-top: 10px;">

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <input type="file" name="Degree_img" accept="image/*" class="border rounded-pill form-control">
                        </div>

                        <div class="col">
                            <div class="dropdown">
                                <select aria-expanded="false" name="lecture_ID" data-bs-toggle="dropdown" type="button" class="btn btn-light dropdown-toggle border rounded-pill">Lecturer ID

                                    <div class="dropdown-menu">

                                        <option selected disabled>Lecturer ID</option>
                                        <?php
                                        ob_start();

                                        //php for displya category from database;

                                        //ceate SQL for get all active categories inthe database
                                        $sql = "SELECT * FROM  tbl_lecturer";

                                        $res = mysqli_query($conn, $sql);

                                        //number of rows;
                                        $count = mysqli_num_rows($res);

                                        //if count is 0 we dont have category,else we have;

                                        if ($count > 0) {
                                            # we have
                                            // read the  datbase data line by line  
                                            while ($rows = mysqli_fetch_assoc($res)) {
                                                # get the deatilsa o fcategories;

                                                $lec_id = $rows['lec_id'];
                                                $lec_index = $rows['index_no'];



                                                //displlay active categoryies in the site
                                        ?>

                                                <option value="<?php echo $lec_id; ?>"><?php echo $lec_index; ?></option>

                                            <?php

                                            }
                                        } else {
                                            # we dont have;
                                            ?>


                                            <option class="dropdown-item">Not-User Found</a>


                                            <?php


                                        }
                                        ob_end_flush();
                                            ?>




                                    </div>


                                </select>


                            </div>
                        </div>


                        <div class="col">
                            <div class="dropdown">
                                <select aria-expanded="false" name="batch_ID" data-bs-toggle="dropdown" type="button" class="btn btn-light dropdown-toggle border rounded-pill">Lecturer ID

                                    <div class="dropdown-menu">

                                        <option selected disabled>Batch ID</option>
                                        <?php
                                        ob_start();

                                        //php for displya category from database;

                                        //ceate SQL for get all active categories inthe database
                                        $sql = "SELECT * FROM   tbl_accademic_year";

                                        $res = mysqli_query($conn, $sql);

                                        //number of rows;
                                        $count = mysqli_num_rows($res);

                                        //if count is 0 we dont have category,else we have;

                                        if ($count > 0) {
                                            # we have
                                            // read the  datbase data line by line  
                                            while ($rows = mysqli_fetch_assoc($res)) {
                                                # get the deatilsa o fcategories;

                                                $b_id = $rows['id'];
                                                $b_index = $rows['Batch_id'];



                                                //displlay active categoryies in the site
                                        ?>

                                                <option value="<?php echo $b_id; ?>"><?php echo $b_index; ?></option>

                                            <?php

                                            }
                                        } else {
                                            # we dont have;
                                            ?>


                                            <option class="dropdown-item">Not-User Found</a>


                                            <?php


                                        }
                                        ob_end_flush();
                                            ?>




                                    </div>


                                </select>


                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col" style="margin-top: 35px;">
                        <input type="submit" name="submit" class="btn border rounded-pill btn-success" style="margin-left: 45%;margin-top: 20px;">
                    </div>
                </div>
            </form>

            <?php

            if (isset($_POST['submit'])) {
                //echo "Clickedssssssssssssssssssssssssssssss";
                //**1. get data from form;

                $Degree_index = $_POST['Degree_index'];
                $Degree_name = $_POST['Degree_name'];
                $lecturer_id = $_POST['lecture_ID'];
                $batch_id=$_POST["batch_ID"];

                //echo $lecturer_id;

                //check whether the select image is clicked or not and upload the image is selected

                if (isset($_FILES['Degree_img']['name'])) {

                    //upload image 

                    // we need image name,source path, destination path;
                    $image_name = $_FILES['Degree_img']['name'];

                    //renamaing image name;
                    //get new extention to our image

                    $parts = explode('.', $image_name);

                    $ext = end($parts);

                    //rename the image
                    $image_name = "Degree_img" . rand(0000, 9999) . '.' . $ext;


                    $source_path = $_FILES['Degree_img']['tmp_name'];

                    $destination_path = "C:/xampp/htdocs/APMS/images/degree_img/" . $image_name; //wherew we want to sve phot & path added here

                    //upload the image
                    $upload = move_uploaded_file($source_path, $destination_path);

                    //check image upload or not;

                    if ($upload == false) {
                        //display session massage in add-category.php site;
                        $_SESSION['upload-erro'] = "<div class='erro'> Failed to upload image / please give path of image </div>  ";

                        //go back to category page;
                        header('location:/APMS/Admin/Degree_programmes/Degree_add.php');

                        die();
                    }
                } else {
                    //dont's upload image and image_name value as blank (image_name="")
                    $image_name = "";
                }


                // 3. get lec name&index from lecture database;

                $sql2 = "SELECT * FROM  tbl_lecturer WHERE lec_id=$lecturer_id ";

                $res2 = mysqli_query($conn, $sql2);
                if ($res2 == TRUE) {
                    $count2 = mysqli_num_rows($res2);
                    if ($count2 > 0) {

                        while ($rows2 = mysqli_fetch_assoc($res2)) {

                            $lecturer_index = $rows2['index_no'];
                            $lecturer_name = $rows2['name'];
                        }
                    }
                }


                //4. get batch index and batchnumber from acadamic year table

                $sql4 = "SELECT Batch_id,Batch_number FROM tbl_accademic_year WHERE id = $batch_id";

                $res4 = mysqli_query($conn, $sql4);
                if ($res4 == TRUE) {
                    $count4 = mysqli_num_rows($res4);
                    if ($count4 > 0) {
                        while ($rows4 = mysqli_fetch_assoc($res4)) {
                            $batch_index = $rows4['Batch_id'];
                            $batch_number = $rows4['Batch_number'];
                        }
                    }
                }










                // display quary work and data added to database

                //SQl quary for add new degree
                $sql3 = "INSERT INTO tbl_degree SET
                                Degree_index_num ='$Degree_index',
                                Degree_name ='$Degree_name',
                                Lecturer_index ='$lecturer_index',
                                Lecturer_name ='$lecturer_name',
                                Degree_img ='$image_name',
                                lecture_id='$lecturer_id',
                                Batch_id ='$batch_id',
                                batch_index='$batch_index',
                                batch_number='$batch_number'
                                ";



                //execute quary;
                $res3 = mysqli_query($conn, $sql3);

                if ($res3 == true) {
                    $_SESSION['add-Degree'] = "<div class='success'> degree added succesfully </div>";
                    header('location:/APMS/Admin/Degree_programmes/Degree_add.php');
                } else {
                    $_SESSION['add-Degree'] = "<div class='erro'> degree added unsuccesfully </div>";
                    header('location:/APMS/Admin/Degree_programmes/Degree_add.php');
                }
            }

            ?>




        </section>
    </div>
    <?php include("C:/xampp/htdocs/APMS/Admin/parts/footer.php");
    ob_end_flush(); ?>