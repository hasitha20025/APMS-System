<?php include_once "c:/xampp/htdocs/APMS/Lectures_panel/parts/header.php";
ob_start(); ?>

<body id="page-top">
    <div id="wrapper">

        <?php
        include "C:/xampp/htdocs/APMS/Lectures_panel/parts/navp.php";

        //GET THE ID SELECTED ONE
        $user_id = $_SESSION['user_id'];
        $user_id = $_GET['user_id'];
       // echo "user id =" . $user_id;
        // create SQL quary to get details

        $sql = "SELECT * from tbl_lecturer WHERE lec_id =$user_id";

        // the quary
        $res = mysqli_query($conn, $sql);

        // the check quary work or not  

        if ($res == TRUE) {
            $count = mysqli_num_rows($res);
            if ($count > 0) {

                while ($rows = mysqli_fetch_assoc($res)) {


                    $linkdin = $rows["linkdin"];
                    $name = $rows["name"];
                    $bio = $rows["bio"];
                    $index_no = $rows["index_no"];
                    $nic = $rows["nic"];
                    $gender = $rows["gender"];
                    $date_of_birth = $rows["DOB"];
                    $address = $rows["address"];
                    $tel_no = $rows["tel_no"];
                    $email = $rows["gmail"];
                    $git = $rows["github"];
                    $image = $rows["image"];
                }
            }
        }

        if (isset($_SESSION['upload-new-pic'])) {
            echo $_SESSION['upload-new-pic'];
            unset($_SESSION['upload-new-pic']);
        }
        if (isset($_SESSION['updated-admin'])) {
            echo $_SESSION['updated-admin'];
            unset($_SESSION['updated-admin']);
        }
        ?>

        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 20px;">Edit Profile</h1>
        </div>
        <section id="Edit-Profile">
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">

                                <img class="rounded-circle" src="/APMS/images/lecturers/<?php echo $image ?> " style="width: 150px;height: 150px;margin-left: 40%;margin-bottom: 20px;">

                                <input class="border rounded-pill form-control form-control-sm" type="file" style="width: 300px;margin-left: 30%;" name="new_image">

                            </div>
                            <div class="col-md-6">

                                <input class="border rounded-pill form-control" type="text" placeholder="Name: <?php echo $name ?>" name="new_name" style="margin-bottom: 20px;" value="<?php echo $name ?>">

                                <input class="border rounded-pill form-control" type="text" placeholder="Enrollment No: <?php echo $index_no ?>" name="new_index_num" style="margin-bottom: 20px;" required="" value="<?php echo $index_no ?>">

                                <input class="border rounded-pill form-control" style="margin-bottom: 20px;" type="text" name="new_email" placeholder="Email No: <?php echo $email ?>" required="" value="<?php echo $email ?>">

                                <textarea class="border rounded-pill form-control" placeholder="Bio: <?php echo $bio ?>" required="" value="" name="new_bio" style="margin-bottom: 20px;"><?php echo $bio ?></textarea>

                            </div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 20px;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="dropdown" style="margin-bottom: 20px;">
                                    <select class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" name="new_gender">Gender
                                        <div class="dropdown-menu">
                                            <option value="Male" class="dropdown-item" <?php echo ($gender == 'Male') ? 'selected' : ''; ?>>Male</option>
                                            <option value="Female" class="dropdown-item" <?php echo ($gender == 'Female') ? 'selected' : ''; ?>>Female</option>
                                        </div>
                                    </select>
                                </div>
                                <label class="form-label">&nbsp; &nbsp;DOB</label>
                                <input class="border rounded-pill form-control" type="date" name="new_DOB" value="<?php echo $date_of_birth ?>" required="">
                            </div>
                            <div class="col-md-6">
                                <textarea class="border rounded-pill form-control" name="new_address" placeholder="Address: <?php echo $address ?>" required="" value="<?php echo $address ?>"><?php echo $address ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="container" style="margin-bottom: 20px;">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="border rounded-pill form-control" type="text" name="new_nic" placeholder="NIC No: <?php echo $nic ?>" required="" value="<?php echo $nic ?>">
                            </div>
                            <div class="col-md-6">
                                <input class="border rounded-pill form-control" type="tel" name="new_tel_no" placeholder="Mobile No: " value="<?php echo $tel_no ?>" required="" value="<?php echo $tel_no     ?>">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6">

                                <input class="border rounded-pill form-control" type="url" name="new_git" placeholder="Git hub: <?php echo $git ?>" value="<?php echo $git ?>">

                            </div>

                            <div class="col-md-6">

                                <input class="border rounded-pill form-control" type="url" name="new_linkdin" placeholder="Linkein: <?php echo $linkdin ?>" value="<?php echo $linkdin ?>">

                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <input class="btn border rounded-pill btn-success" type="submit" value="Submit" name="submit" required="" style="margin: 0px;margin-left: 45%;margin-top: 20px;">

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <?php include_once "c:/xampp/htdocs/APMS/Lectures_panel/parts/footer.php"; ?>
    <?php

    if (isset($_POST['submit'])) {

        //get values from the formm,


        $new_name = $_POST["new_name"]; //
        $new_index_no = $_POST["new_index_num"]; //
        $new_bio = $_POST["new_bio"]; //
        $new_gender = $_POST["new_gender"]; //
        $new_date_of_birth = $_POST["new_DOB"]; //
        $new_address = $_POST["new_address"]; //
        $new_nic = $_POST["new_nic"]; //
        $new_tel_no = $_POST["new_tel_no"]; //
        $new_git = $_POST["new_git"]; //
        $new_linkdin = $_POST["new_linkdin"]; //
        $new_email = $_POST["new_email"];//

        if (isset($_FILES['new_image']['name'])) {
            $new_image = $_FILES['new_image']['name'];

            //check current image avalbel or not;
            if ($new_image != "") {
                //image avalble

                //1.upload new image;

                //get new extention to our image
                $parts = explode('.', $new_image);
                $ext = end($parts);


                //renmae the image
                $new_image = "new_pic" . rand(0000, 9999) . '.' . $ext;


                $source_path = $_FILES['new_image']['tmp_name'];

                $destination_path = "C:/xampp/htdocs/APMS/images/lecturers/".$new_image; //wherew we want to sve phot & path added here

                //image uploading php funtion
                $upload = move_uploaded_file($source_path, $destination_path);

                //check image upload or not;

                if ($upload == false) {
                    //display session massage in add-category.php site;
                    $_SESSION['upload-new-pic'] = "<div class='erro'> Failed to upload image / please give path of image </div>  ";

                    //stop the process
                    die();
                }
            } else {

                //image nor-avable
                $new_image = $image;
            }
        } else {
            $new_image = $image;
        }

        //update the databse using new data;
        $sql2 = " UPDATE tbl_lecturer SET  

                        name ='$new_name ',
                        bio = '$new_bio',
                        index_no ='$new_index_no',
                        nic='$new_nic', 
                        gender='$new_gender',
                        DOB='$new_date_of_birth',
                        address='$new_address',
                        tel_no = $new_tel_no,
                        linkdin ='$new_linkdin',
                        github ='$new_git',
                        gmail='$new_email',
                        image='$new_image'
                        
            WHERE lec_id =$user_id ";


        //4.run the SQL ;
        $res2 = mysqli_query($conn, $sql2);

        if ($res2 == true) {
            //catagory updated,
            $_SESSION['updated-admin'] = "<div class='success'> success fully update lecture </div>";

            header("Location: Lec_edit_prof.php?user_id=".$user_id);
        } else {
            //not working well and redectly to manage category page;  

            $_SESSION['updated-admin'] = "<div class='erro'> Failed to update lecture </div>";
            //redierct
            header("Location: Lec_edit_prof.php?user_id=" . $user_id);
        }
    }


    ob_end_flush();

    ?>