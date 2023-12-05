<?php include_once "c:/xampp/htdocs/APMS/Lectures_panel/parts/header.php"; ?>

<body id="page-top">
    <div id="wrapper">

        <?php include "C:/xampp/htdocs/APMS/Lectures_panel/parts/navp.php";
        if (isset($_GET['user_id']) && isset($_GET['batch_id']) && isset($_GET['semester_id'])) {
            // Retrieve user_id and batch_id from the query string
            $user_id = $_GET['user_id'];
            $batch_id = $_GET['batch_id'];
            $semester_number = $_GET['semester_id'];

            // Now you can use $user_id and $batch_id as needed
          //  echo "User ID: $user_id<br>";
          //  echo "Batch ID: $batch_id <br>";
           // echo "semester_num:" . $semester_number;
        }

        $sql_degree = "SELECT degree_id FROM tbl_degree WHERE lecture_id = $user_id AND Batch_id = $batch_id";

        $res_degree = mysqli_query($conn, $sql_degree);
        if ($res_degree == TRUE) {
            $count_degree = mysqli_num_rows($res_degree);
            if ($count_degree > 0) {
                while ($rows_degree = mysqli_fetch_assoc($res_degree)) {
                    $degree_id = $rows_degree['degree_id'];
                }
            }
        }

        //echo "<br>the degree id= " . $degree_id;

        $sql_semester = "SELECT semester_id FROM tbl_semester WHERE degree_id = $degree_id AND semester_number = $semester_number";

        $res_semester = mysqli_query($conn, $sql_semester);
        if ($res_semester == TRUE) {
            $count_semester = mysqli_num_rows($res_semester);
            if ($count_semester > 0) {
                while ($rows_semester = mysqli_fetch_assoc($res_semester)) {
                    $semester_id = $rows_semester['semester_id'];
                }
            }
        }

        // echo "<br> the semester id= " . $semester_id;


        ?>



        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0" id="Semester-Result">+Add Semester&nbsp;Result&nbsp;</h3>

            </div>
        </div>

        <form method="post" action="" enctype="application/x-www-form-urlencoded">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enrollment No</th>
                        <?php
                        // Fetch subject details from tbl_subject based on degree_id and semester_id
                        $sql_subjects = "SELECT * FROM tbl_subject WHERE degree_id = $degree_id AND semester_id = $semester_id";
                        $res_subjects = mysqli_query($conn, $sql_subjects);

                        if ($res_subjects) {
                            while ($subject_row = mysqli_fetch_assoc($res_subjects)) {
                                $subject_name = $subject_row['subject_name'];
                                $subject_code = $subject_row['subject_code'];
                                $credits = $subject_row['credits'];
                        ?>
                                <th>
                                    <p><?php echo $subject_name; ?>&nbsp;</p>
                                    <p><?php echo $subject_code; ?></p>
                                    <p><?php echo $credits; ?></p>
                                </th>
                        <?php
                            }
                        }
                        ?>
                        <th>
                            <p>Current GPA</p>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="dropdown">
                                <select name="enrollment_number" class="btn btn-light active dropdown-toggle border rounded-pill">
                                    <option selected disabled>Select Enrollment No</option>
                                    <?php
                                    // Fetch enrollment numbers from tbl_students
                                    $sql_enrollments = "SELECT stu_id, index_no FROM tbl_students WHERE Batch_id = $batch_id AND Degree_id = $degree_id";
                                    $res_enrollments = mysqli_query($conn, $sql_enrollments);

                                    if ($res_enrollments) {
                                        while ($enrollment_row = mysqli_fetch_assoc($res_enrollments)) {
                                            $student_id = $enrollment_row['stu_id'];
                                            $index_no = $enrollment_row['index_no'];
                                    ?>
                                            <option value="<?php echo $student_id; ?>"><?php echo $index_no; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </td>
                        <?php
                        // Generate dropdowns for grades based on the number of subjects
                        $subjectCount = mysqli_num_rows($res_subjects);
                        for ($i = 1; $i <= $subjectCount; $i++) {
                        ?>
                            <td>
                                <div class="dropdown">
                                    <select name="grade_subject_<?php echo $i; ?>" class="btn btn-light active dropdown-toggle border rounded-pill">
                                        <option selected disabled>Select Grade</option>
                                        <!-- Add your grade options here -->
                                        <option value="A+">A+</option>
                                        <option value="A">A</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B">B</option>
                                        <option value="B-">B-</option>
                                        <option value="C+">C+</option>
                                        <option value="C">C</option>
                                        <option value="C-">C-</option>
                                        <option value="D+">D+</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <!-- ... Repeat for other grades -->
                                    </select>
                                </div>
                            </td>
                        <?php
                        }
                        ?>
                        <td>
                            <div class="dropdown">
                                <input type="text" class="btn btn-light active dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown" placeholder="GPA" name="gpa">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <button type="submit" class="btn btn-success bg-success border rounded-pill">
                <i class="far fa-arrow-alt-circle-up"></i> Submit
            </button>

        </form>

    </div>
    <?php include_once "c:/xampp/htdocs/APMS/Lectures_panel/parts/footer.php"; ?>

    <?php

    // ...

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $enrollmentNumber = $_POST['enrollment_number'];
        $calculatedGPA = $_POST['gpa'];

        // Initialize an array to store grades
        $grades = [];

        // Collect grades from the form
        for ($i = 1; $i <= 9; $i++) { // Assuming 9 subjects
            $grades[] = $_POST['grade_subject_' . $i];
        }

        // Calculate GPA if needed
        // ...

        // Insert data into tbl_results
        $sqlInsert = "INSERT INTO tbl_results_sem7 (Batch_id, enrollment_number, grade_subject_1, grade_subject_2, grade_subject_3, grade_subject_4, grade_subject_5, grade_subject_6, grade_subject_7, grade_subject_8, grade_subject_9, current_gpa)
              VALUES ('$batch_id', '$enrollmentNumber', '" . implode("', '", $grades) . "', '$calculatedGPA')";

        if (mysqli_query($conn, $sqlInsert)) {
            echo "Results inserted successfully!";
        } else {
            echo "Error: " . $sqlInsert . "<br>" . mysqli_error($conn);
        }
    }
    ?>