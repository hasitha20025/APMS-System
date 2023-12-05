<?php include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php");
ob_start();
?>

<body id="page-top">
    <div id="wrapper">
        <?php include("C:/xampp/htdocs/APMS/Admin/parts/Navbar.php") ?>
        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 43px;">&nbsp;+ Add Student</h1>
        </div>
        <section id="Add-Degree-Programmes">
            <?php
            if (isset($_SESSION['add-std'])) {
                echo  $_SESSION['add-std'];
                unset($_SESSION['add-std']);
            }

        

            ?>
            <div></div>
            <form method="POST" enctype="multipart/form-data">
                <div class="container" style="margin-bottom: 20px;">
                    <div class="row">
                        <div class="col-md-6" style="margin-top: 15px;">

                            <div class="dropdown">
                                <select name="batch_id" class="btn btn-light dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown">
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
                        <div class="col-md-6" style="margin-top: 15px;">
                            <div class="dropdown">
                                <select name="Degree_ID" class="btn btn-light dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown">
                                    <div class="dropdown-menu">


                                        <option selected disabled>Degree ID</option>`
                                        <?php
                                        ob_start();

                                        //php for displya category from database;

                                        //ceate SQL for get all active categories inthe database
                                        $sql2 = "SELECT * FROM tbl_degree";

                                        $res2 = mysqli_query($conn, $sql2);

                                        //number of rows;
                                        $count2 = mysqli_num_rows($res2);

                                        //if count is 0 we dont have category,else we have;

                                        if ($count2 > 0) {
                                            # we have
                                            // read the  datbase data line by line  
                                            while ($rows2 = mysqli_fetch_assoc($res2)) {
                                                # get the deatilsa o fcategories;

                                                $d_id = $rows2['degree_id'];
                                                $d_index = $rows2['Degree_index_num'];



                                                //displlay active categoryies in the site
                                        ?>

                                                <option value="<?php echo $d_id; ?>"><?php echo $d_index; ?></option>

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
                <div class="container">
                    <div class="row">

                        <div class="col-md-6" style="margin-top: 15px;">
                            <input name="index_num" class="border rounded-pill form-control" type="text" placeholder="Enrollment No">
                        </div>

                        <div class="col" style="margin-top: 15px;">
                            <input name="std_name" class="border rounded-pill form-control" type="text" placeholder="Name" required="">
                        </div>


                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-6">

                            <div class="dropdown" style="margin-top: 14px;">

                                <select name="gender" class="btn btn-light dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown" style="margin-top: 25px;">
                                    <div class="dropdown-menu">

                                        <option selected disabled>Gender</option>

                                        <option class="dropdown-item">Male</option>
                                        <option class="dropdown-item">Female</option>



                                    </div>
                                </select>

                            </div>

                        </div>
                        <div class="col" style="margin-top: 15px;">

                            <label class="form-label">&nbsp; &nbsp;DOB</label>
                            <input name="std_DOB" class="border rounded-pill form-control form-control-sm" type="date" required="">

                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">

                        <div class="col-md-6" style="margin-top: 15px;">

                            <input name="std_nic" class="border rounded-pill form-control" type="text" placeholder="NIC No" required="">

                        </div>

                        <div class="col" style="margin-top: 15px;">

                            <input name="std_tel" class="border rounded-pill form-control" type="text" placeholder="Mobile No" required="">

                        </div>

                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col">

                            <textarea name="std_address" class="border rounded-pill form-control" placeholder="Address" required=""></textarea>

                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">

                        <div class="col-md-6" style="margin-top: 15px;">

                            <input name="std_email" class="border rounded-pill form-control" type="email" placeholder="E mail" required="">

                        </div>

                        <div class="col">

                            <input name="std_password" class="border rounded-pill form-control" type="password" required="" placeholder="Password" style="margin-top: 15px;">

                        </div>

                    </div>
                    <div class="row" style="margin-top: 20px;">

                        <div class="col-md-6" style="margin-top: 15px;">

                            <input name="std_username" class="border rounded-pill form-control" type="text" placeholder="Username" required="">

                        </div>

                        <div class="col">



                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col" style="margin-top: 35px;">
                        <input name="submit" class="btn border rounded-pill btn-success" type="submit" style="margin-left: 45%;margin-top: 20px;">
                    </div>
                </div>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                echo "Clicked";


                $batch_id = $_POST['batch_id']; //year tbl id 
                $degree_id = $_POST['Degree_ID']; // degree tbl id

                $std_index_no = $_POST['index_num'];
                $std_name = $_POST['std_name'];
                $std_gender = $_POST['gender'];
                $std_DOB = $_POST['std_DOB'];
                $std_nic = $_POST['std_nic'];
                $std_tel = $_POST['std_tel'];
                $std_address = $_POST['std_address'];
                $std_email = $_POST['std_email'];
                $std_password = $_POST['std_password'];
                $std_username = $_POST['std_username'];



                $linkdin = '';
                $github = '';
                $role_id = 2;
                $std_img = '';
                $std_bio = '';

                $sql3 = "SELECT Batch_id FROM  tbl_accademic_year WHERE id=$batch_id";

                //executing;
                $res3 = mysqli_query($conn, $sql3);

                if ($res3 == TRUE) {
                    // Fetch the row as an associative array
                    $row3 = mysqli_fetch_assoc($res3);

                    // Retrieve the values 
                    $batch_index = $row3['Batch_id']; //********************************** */



                }


                $sql4 = "SELECT Degree_index_num, Degree_name FROM  tbl_degree WHERE degree_id=$degree_id";

                //executing;
                $res4 = mysqli_query($conn, $sql4);

                if ($res4 == TRUE) {
                    // Fetch the row as an associative array
                    $row4 = mysqli_fetch_assoc($res4);

                    // Retrieve the values 
                    $degree_index = $row4['Degree_index_num'];
                    $degree_name = $row4['Degree_name']; //********************************** */



                }

                // create SQL quary to add data to databse

                $sql5 = " INSERT INTO tbl_students SET
                        index_no ='$std_index_no',
                        name ='$std_name',
                        nic ='$std_nic',
                        DOB ='$std_DOB',
                        gender='$std_gender',
                        address='$std_address',
                        tel_no=$std_tel,
                        image='$std_img',
                        gmail ='$std_email',
                        linkdin='$linkdin',
                        github='$github',
                        bio='$std_bio',
                        username='$std_username',
                        password='$std_password',
                        role_id='$role_id',
                        Batch_id=$batch_id ,
                        batch_index='$batch_index' ,
                        Degree_id=$degree_id,
                        Degree_index= '$degree_index',
                        Degree_name= '$degree_name'
                    ";

                // 3.execute SQL quary;

                $res5 = mysqli_query($conn, $sql5);

                //check in the quary data are added or not 

                if ($res5 == true) {

                    // display quary work and data added to database
                    $_SESSION['add-std'] = "<div class='success'> student added succesfully </div>";

                    //display massge in site manage-category;
                    header('location:/APMS/Admin/Students/std_add.php');
                } else {
                    //failed to add category to database;
                    $_SESSION['add-std'] = "<div class='erro'> Failed to add new student </div>";

                    //display massge in site add-category ;
                    header('location:/APMS/Admin/Students/std_add.php');
                }
            }




            ?>

        </section>
    </div>
    <?php include("C:/xampp/htdocs/APMS/Admin/parts/footer.php");
    ob_end_flush();
    ?>