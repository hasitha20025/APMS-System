<?php include("C:/xampp/htdocs/APMS/student/parts/header.php"); ?>

<body id="page-top">

    <?php
    //session_start(); // Make sure to start the session before using session variables

    // Check if user_id is set in the session
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    }


    // Now you can use $user_id
    include("C:/xampp/htdocs/APMS/student/parts/navbar.php");

    //echo "the stu id: " . $user_id;

    ?>

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">

            <?php include("C:/xampp/htdocs/APMS/student/parts/searchbar.php") ?>

            <div class="container">
                <h1 id="Results" style="padding-bottom: 17px;"><span style="color: rgb(21, 21, 21); background-color: rgb(255, 255, 255);">Results</span></h1>
            </div>
            <section>
                <div>
                    <div class="container">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>id</th>
                                    <th>subject_code</th>
                                    <th>subject_name</th>
                                    <th>credits</th>
                                    <th>Grade</th>

                                </tr>
                                <?php




                                $sql_student_info = "SELECT Degree_id, Batch_id FROM tbl_students WHERE stu_id = $user_id";
                                $res_student_info = mysqli_query($conn, $sql_student_info);

                                if ($res_student_info == TRUE) {
                                    $count_student_info = mysqli_num_rows($res_student_info);

                                    if ($count_student_info > 0) {
                                        while ($rows_student_info = mysqli_fetch_assoc($res_student_info)) {
                                            $degree_id = $rows_student_info['Degree_id'];
                                            $batch_id = $rows_student_info['Batch_id'];
                                        }
                                    }
                                }







                                $semester_num = 1; ////////////////////////////////////////////

                                $sql_semesterid = "SELECT semester_id FROM tbl_semester WHERE semester_number = $semester_num AND degree_id= $degree_id";
                                $res_semesterid = mysqli_query($conn, $sql_semesterid);

                                if ($res_semesterid == TRUE) {
                                    $count_semesterid = mysqli_num_rows($res_semesterid);

                                    if ($count_semesterid > 0) {

                                        while ($rows_semesterid = mysqli_fetch_assoc($res_semesterid)) {

                                            $semester_id = $rows_semesterid['semester_id'];
                                        }
                                    }
                                }
                                // Assuming you have the semester_id, degree_id, and enrollment_number


                                //echo "sem id is:" . $semester_id;
                                //echo "degree id is:" . $degree_id;



                                // Replace with the actual enrollment_number

                                // Fetch subjects
                                $sql_subjects = "SELECT * FROM tbl_subject WHERE semester_id = $semester_id AND degree_id = $degree_id";
                                $res_subjects = mysqli_query($conn, $sql_subjects);

                                // Fetch results for the user
                                // edith here
                                $sql_results = "SELECT * FROM tbl_results_sem1 WHERE enrollment_number = $user_id";
                                $res_results = mysqli_query($conn, $sql_results);

                                // Fetch all results into an array
                                $results_array = [];
                                while ($result_row = mysqli_fetch_assoc($res_results)) {
                                    $results_array[] = $result_row;
                                }

                                // Loop through subjects
                                while ($subject_row = mysqli_fetch_assoc($res_subjects)) {
                                    echo "<tr>";
                                    echo "<td>{$subject_row['subject_id']}</td>";
                                    echo "<td>{$subject_row['subject_code']}</td>";
                                    echo "<td>{$subject_row['subject_name']}</td>";
                                    echo "<td>{$subject_row['credits']}</td>";

                                    // Loop through grade_subject_1 to grade_subject_9 for each subject
                                    $subject_found = false;
                                    for ($subject_number = 1; $subject_number <= 9; $subject_number++) {
                                        // Check if there are still rows in the results array
                                        if (isset($results_array[$subject_number - 1])) {
                                            echo "<td>{$results_array[$subject_number - 1]["grade_subject_$subject_number"]}</td>";
                                            $subject_found = true;
                                        } else {
                                            //echo "<td>No Grade</td>";
                                        }
                                    }

                                    if (!$subject_found) {
                                        // If no grade found for any subject, you might want to handle it here
                                        echo "<td>No Grade for any subject</td>";
                                    }

                                    echo "</tr>";
                                }


                                ?>


                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <div></div>
            <div class="container" style="margin-top: 20px;">
                <div class="row">
                    <div class="col-md-4">
                        <?php
                        //edit hre tbl results
                        $sql_semester2 = "SELECT current_gpa FROM tbl_results_sem1 WHERE enrollment_number = $user_id";
                        $res_semester2 = mysqli_query($conn, $sql_semester2);

                        if ($res_semester2 == TRUE) {
                            $count_semester2 = mysqli_num_rows($res_semester2);

                            if ($count_semester2 > 0) {
                                while ($rows_semester2 = mysqli_fetch_assoc($res_semester2)) {
                                    $gpa_sem2 = $rows_semester2['current_gpa'];
                                }
                            } else {
                                $gpa_sem2 = 0.00;
                            }
                        }
                        //echo "gpa sem2: " . $gpa_sem2;
                        ?>

                    </div>

                    <p>Semester 2 GPA : <?php echo $gpa_sem2 ?> </p>

                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>


        <?php include('C:/xampp/htdocs/APMS/student/parts/footer.php')

        ?>