<?php include("C:/xampp/htdocs/APMS/student/parts/header.php"); ?>

<body id="page-top">

    <?php include("C:/xampp/htdocs/APMS/student/parts/navbar.php") ?>

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">

            <?php
            //session_start(); // Make sure to start the session before using session variables

            // Check if user_id is set in the session
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
            } else {
                // Handle the case when user_id is not set (you might want to redirect or do something else)
                echo "User ID is not set.";
                // You might want to redirect the user or display an error message
            }
            include("C:/xampp/htdocs/APMS/student/parts/searchbar.php")


            ?>

            <div style="margin-left: 3%;">
                <h1 style="margin-bottom: 20px;">Profile</h1>
            </div>
            <section id="Edit-Profile">
                <?php
                $sql_student_info = "SELECT stu_id, username, password, index_no, name, nic, DOB, gender, address, tel_no, image, gmail, linkdin, github, bio FROM tbl_students WHERE stu_id = $user_id";
                $res_student_info = mysqli_query($conn, $sql_student_info);

                if ($res_student_info == TRUE) {
                    $count_student_info = mysqli_num_rows($res_student_info);

                    if ($count_student_info > 0) {
                        while ($rows_student_info = mysqli_fetch_assoc($res_student_info)) {
                            $stu_id = $rows_student_info['stu_id'];
                            $username = $rows_student_info['username'];
                            $password = $rows_student_info['password'];
                            $index_no = $rows_student_info['index_no'];
                            $name = $rows_student_info['name'];
                            $nic = $rows_student_info['nic'];
                            $DOB = $rows_student_info['DOB'];
                            $gender = $rows_student_info['gender'];
                            $address = $rows_student_info['address'];
                            $tel_no = $rows_student_info['tel_no'];
                            $image = $rows_student_info['image'];
                            $gmail = $rows_student_info['gmail'];
                            $linkdin = $rows_student_info['linkdin'];
                            $github = $rows_student_info['github'];
                            $bio = $rows_student_info['bio'];
                        }
                    }
                }

                ?>
                <form>
                    <div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col"><img class="rounded-circle" src="/APMS/images/student/<?php echo $image ?> " style="width: 200px;height: 200px;margin-left: 36%;margin-bottom: 20px;"></div>
                                    </div>
                                    <div class="row">

                                        <div class="col">
                                            <button class="btn btn-primary border rounded-pill" type="button" style="margin: 0;margin-right: 20px;" onclick="location.href='<?php echo $linkdin ?>'">Linkedin</button>
                                        </div>

                                        <div class=" col">
                                            <button class="btn btn-dark border rounded-pill" type="button" style="margin: 0;margin-left: 23%;"><i class="far fa-edit"></i>&nbsp;<a href="/APMS/student/Student_profile/Std_Profile_edit.php?user_id=' <?php echo $user_id; ?>'">Edit Profile</a></button>
                                        </div>

                                        <div class="col">
                                            <button class="btn btn-primary border rounded-pill" type="button" style="margin: 0;margin-right: 0;margin-left: 20%;" onclick="location.href='<?php echo $github ?>'">Git hub</button>

                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col" style="margin-bottom: 20px;">
                                            <p>Gender : <?PHP echo $gender ?> </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="margin-bottom: 20px;">
                                            <p>Address : <?PHP echo $address; ?> </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="margin-bottom: 20px;">
                                            <p>Mobile No : <?PHP echo $tel_no ?> </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p>E mail : <?PHP echo $gmail; ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container" style="margin-bottom: 20px;margin-top: 30px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>&nbsp;Name : <?PHP echo $name; ?> </p>
                                </div>
                            </div>
                        </div>
                        <div class="container" style="margin-bottom: 20px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>&nbsp;Enrollment No : <?PHP echo $index_no; ?> </p>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>&nbsp;Bio : <?PHP echo $bio; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        <?php include('C:/xampp/htdocs/APMS/student/parts/footer.php') ?>