<?php
include_once "c:/xampp/htdocs/APMS/Lectures_panel/parts/header.php";

echo "<body id='page-top'>";
echo "<div id='wrapper'>";

include "C:/xampp/htdocs/APMS/Lectures_panel/parts/navp.php";

if (isset($_GET['user_id']) && isset($_GET['batch_id']) && isset($_GET['semester_id'])) {
    // Retrieve user_id and batch_id from the query string
    $user_id = $_GET['user_id'];
    $batch_id = $_GET['batch_id'];
    $semester_number = $_GET['semester_id'];

   // echo "lec ID: $user_id<br>";
   // echo "Batch ID: $batch_id <br>";
    //echo "semester_num:" . $semester_number;

    $sql_degree = "SELECT degree_id FROM tbl_degree WHERE lecture_id = $user_id";
    $res_degree = mysqli_query($conn, $sql_degree);

    if ($res_degree == TRUE) {
        $count_degree = mysqli_num_rows($res_degree);
        if ($count_degree > 0) {
            while ($rows_degree = mysqli_fetch_assoc($res_degree)) {
                $degree_id = $rows_degree['degree_id'];
            }
        }
    }

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

    // Fetch subject details from tbl_subject based on degree_id and semester_id
    $sql_subjects = "SELECT * FROM tbl_subject WHERE degree_id = $degree_id AND semester_id = $semester_id";
    $res_subjects = mysqli_query($conn, $sql_subjects);

    if ($res_subjects) {
        echo "<div class='container-fluid'>";
        echo "<div class='d-sm-flex justify-content-between align-items-center mb-4'>";
        echo "<h3 class='text-dark mb-0' id='Semester-Result'>8 Semester&nbsp;Result&nbsp;</h3>"; //edit hreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee//eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
        echo "<button class='btn btn-primary bg-info border rounded-pill' type='button' onclick=\"window.location.href='../lecturesResult(edit)/Result(edit)8.php?user_id=$user_id&batch_id=$batch_id&semester_id=8'\"><i class='far fa-edit'></i>Edit</button>";
        echo "</div>";
        echo "</div>";

        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Enrollment No</th>";


        // Add headers for subjects
        while ($subject_row = mysqli_fetch_assoc($res_subjects)) {
            $subject_name = $subject_row['subject_name'];
            $subject_code = $subject_row['subject_code'];
            $credits = $subject_row['credits'];
            echo "<th>";
            echo "<p>{$subject_name}&nbsp;</p>";
            echo "<p>{$subject_code}</p>";
            echo "<p>{$credits}</p>";
            echo "</th>";
        }

        echo "<th>Current GPA</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        $sql_student = "SELECT index_no, stu_id FROM tbl_students WHERE Degree_id = $degree_id AND Batch_id=$batch_id ";
        $res_student = mysqli_query($conn, $sql_student);

        if ($res_student == TRUE) {
            $count_student = mysqli_num_rows($res_student);
            if ($count_student > 0) {
                while ($rows_student = mysqli_fetch_assoc($res_student)) {
                    $student_index = $rows_student['index_no'];
                    $stu_id = $rows_student['stu_id'];

                    // Fetch results for the user//edittttttttttttttttttttttttttttttttttttttttttttttt hreeeeeeeeeeeeeeeeeeeeeeeee
                    $sqlFetchResults = "SELECT * FROM tbl_results_sem8 WHERE enrollment_number = '$stu_id' AND Batch_id=$batch_id";
                    $result = mysqli_query($conn, $sqlFetchResults);

                    if ($result) {
                        // Fetch and display results
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>{$row['result_id']}</td>";
                            echo "<td>{$row['enrollment_number']}</td>";

                            // Display grades for each subject
                            for ($i = 1; $i <= 9; $i++) { // Assuming 9 subjects
                                echo "<td>{$row['grade_subject_' .$i]}</td>";
                            }

                            echo "<td>{$row['current_gpa']}</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "Error fetching results: " . mysqli_error($conn);
                    }
                }
            }
        }

        echo "</tbody>";
        echo "</table>";
    }
}

echo "<tr></tr>";
echo "</tbody>";
echo "</div>";
include_once "c:/xampp/htdocs/APMS/Lectures_panel/parts/footer.php";
