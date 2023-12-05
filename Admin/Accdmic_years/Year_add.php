<?php include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php");
ob_start();
?>

<body id="page-top">
    <div id="wrapper">
        <?php include("C:/xampp/htdocs/APMS/Admin/parts/Navbar.php"); ?>
        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 43px;">+ Add Accedmic Year</h1>
            <?php
            if (isset($_SESSION['upload-erro'])) {
                echo  $_SESSION['upload-erro'];
                unset($_SESSION['upload-erro']);
                
            }

             if (isset($_SESSION['add-year'])) {
                echo  $_SESSION['add-year'];
                unset($_SESSION['add-year']);
                
            }

            ?>
        </div>
        <section id="add_accdmic_year">
            <div>
                <form method="POST" enctype="multipart/form-data">

                    <div class=" row">
                        <div class="col-xl-10 offset-lg-1 offset-xl-1">
                            <div class="row" style="margin-bottom: 28px;">


                                <div class="col">

                                    <input class="border rounded-pill form-control" type="text" placeholder="Batch_ID" required="" name="Batch_ID">

                                </div>

                                <div class="col">

                                    <input class="border rounded-pill form-control" type="text" required="" placeholder="Batch_No" name="Batch_No">

                                </div>



                            </div>
                            <div class="row" style="margin-bottom: 20px;">


                                <div class="col">
                                    <label class="form-label" style="padding-left: 0px;margin-left: 20px;">Start Year</label>


                                    <input class="border rounded-pill form-control" type="date" name="start_year" required="">


                                </div>


                                <div class="col">
                                    <label class="form-label" style="margin-left: 20px;">End Year</label>

                                    <input class="border rounded-pill form-control" type="date" name="end_year">

                                </div>


                            </div>
                            <div class="row">


                                <div class="col">
                                    <label class="form-label" style="margin-left: 20px;">Batch Picture</label>

                                    <input class="border rounded-pill form-control form-control-sm" type="file" accept="image/*" name="batch_img" style="width: 300px;">
                                </div>


                                <div class="col">

                                </div>


                            </div>
                            <div class="row">


                                <div class="col-xl-6 offset-lg-0 offset-xl-5" style="margin-top: 19px;">

                                    <input class="btn border rounded-pill btn-success" type="submit" name="submit" required="" style="margin-left: 1%;padding-right: 40px;padding-left: 40px;">

                                </div>


                            </div>
                        </div>
                    </div>
                </form>


                <?php

                if (isset($_POST['submit'])) {
                    //echo "Clicked";
                    //**1. get data from form;

                    $Batch_ID = $_POST['Batch_ID'];
                    $Batch_No = $_POST['Batch_No'];
                    $start_year = $_POST['start_year'];
                    $end_year = $_POST['end_year'];



                    // 2. upload image if selected;

                    //check whether the select image is clicked or not and upload the image is selected
                    
                    if (isset($_FILES['batch_img']['name'])) {

                        //upload image 

                        // we need image name,source path, destination path;
                        $image_name = $_FILES['batch_img']['name'];

                        //renamaing image name;
                        //get new extention to our image

                        $parts = explode('.', $image_name);

                        $ext = end($parts);

                        //rename the image
                        $image_name = "batch_img" . rand(0000, 9999) . '.' . $ext;


                        $source_path = $_FILES['batch_img']['tmp_name'];

                        $destination_path = "C:/xampp/htdocs/APMS/images/Batch_img/" . $image_name; //wherew we want to sve phot & path added here

                        //upload the image
                        $upload = move_uploaded_file($source_path, $destination_path);

                        //check image upload or not;

                        if ($upload == false) {
                            //display session massage in add-category.php site;
                            $_SESSION['upload-erro'] = "<div class='erro'> Failed to upload image / please give path of image </div>  ";

                            //go back to category page;
                            header('location:edit_profile.php');




                            //stop the process
                            die();
                        }
                    } else {
                        //dont's upload image and image_name value as blank (image_name="")
                        $image_name = "";
                    }


                    // 3. insert in to the databse;


                    // display quary work and data added to database

                    //SQl quary for add new medicine
                    $sql = "INSERT INTO tbl_accademic_year SET
                                Batch_id ='$Batch_ID',
                                Batch_number =$Batch_No,
                                Start_year ='$start_year',
                                End_year ='$end_year',
                                Batch_image ='$image_name'";

                        

                    //execute quary;
                    $res = mysqli_query($conn, $sql);

                    if ($res == true) {
                        $_SESSION['add-year'] = "<div class='success'> year added succesfully </div>";
                        header('location:/APMS/Admin/Accdmic_years/Year_add.php');
                    } else {
                        $_SESSION['add-year'] = "<div class='erro'> year added unsuccesfully </div>";
                        header('location:/APMS/Admin/Accdmic_years/Year_add.php');
                    }
                }

                ?>



            </div>
        </section>
    </div>

    <?php include("C:/xampp/htdocs/APMS/Admin/parts/footer.php");
    ob_end_flush();
    ?>