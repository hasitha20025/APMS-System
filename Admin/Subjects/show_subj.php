<?php include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php") ?>

<body id="page-top">
    <div id="wrapper">
        <?php include("C:/xampp/htdocs/APMS/Admin/parts/Navbar.php");

        $degree_id = $_GET['degree_id'];
        echo "degree_id =" . $degree_id;
        ?>



        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 10px;">Course Outline</h1>
        </div>

        <section id="course-outline">
          <?php
            

            // Fetch all semesters for the degree from the database
            $sql_fetch_semesters = "SELECT DISTINCT semester_number FROM tbl_subject WHERE degree_id = ?";
            $stmt_fetch_semesters = mysqli_prepare($conn, $sql_fetch_semesters);
            mysqli_stmt_bind_param($stmt_fetch_semesters, "i", $degree_id);
            mysqli_stmt_execute($stmt_fetch_semesters);
            $result_semesters = mysqli_stmt_get_result($stmt_fetch_semesters);

            // Fetch subjects for each semester and store in an array
            $semester_subjects = array();
            while ($row_semester = mysqli_fetch_assoc($result_semesters)) {
                $semester_number = $row_semester['semester_number'];

                $sql_fetch_subjects = "SELECT * FROM tbl_subject WHERE degree_id = ? AND semester_number = ?";
                $stmt_fetch_subjects = mysqli_prepare($conn, $sql_fetch_subjects);
                mysqli_stmt_bind_param($stmt_fetch_subjects, "ii", $degree_id, $semester_number);
                mysqli_stmt_execute($stmt_fetch_subjects);
                $result_subjects = mysqli_stmt_get_result($stmt_fetch_subjects);

                $subjects = mysqli_fetch_all($result_subjects, MYSQLI_ASSOC);
                $semester_subjects[$semester_number] = $subjects;
            }
            ?>

            <!-- Display all semesters and their subjects -->
            <?php foreach ($semester_subjects as $semester_number => $subjects) { ?>
                <div id="semester-<?php echo $semester_number; ?>">
                    <p class="text-center text-bg-warning" style="font-size: 20px; margin-bottom: 25px; font-weight: bold;">Semester <?php echo $semester_number; ?></p>
                    <div class="table-responsive text-center">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Subject Code</th>
                                    <th>Subject Name</th>
                                    <th>Credit Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($subjects as $subject) { ?>
                                    <tr>
                                        <td><?php echo $subject['subject_code']; ?></td>
                                        <td><?php echo $subject['subject_name']; ?></td>
                                        <td><?php echo $subject['credits']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php } ?>

            <!-- <div id="semester-8">
                <p class="text-center text-bg-warning" style="font-size: 20px;margin-bottom: 25px;font-weight: bold;">Semester 8</p>
                <div class="table-responsive text-center">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Subject Code</th>
                                <th>Subject Name</th>
                                <th>Credit Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                            </tr>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                            </tr>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                            </tr>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                            </tr>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                            </tr>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                            </tr>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                            </tr>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                            </tr>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                            </tr>
                            <tr>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 4</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="text-start">Total Credits:</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div> -->
        </section>
    </div>
    <?php include("C:/xampp/htdocs/APMS/Admin/parts/footer.php") ?>