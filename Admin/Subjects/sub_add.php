<?php include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php") ?>

<body id="page-top">
    <div id="wrapper">
        <?php include("C:/xampp/htdocs/APMS/Admin/parts/Navbar.php") ?>

        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 43px;">&nbsp;+ Add Subject</h1>
        </div>
        <section id="Add-Degree-Programmes">
            <div></div>
            <form method="POST" enctype="multipart/form-data">
                <div class="container" style="margin-bottom: 20px;">
                    <div class="row">
                        <div class="col">
                            <div class="dropdown" style="margin-left: 42%;">

                                <select name="Degree_id" aria-expanded="false" data-bs-toggle="dropdown" type="button" class="btn btn-light dropdown-toggle border rounded-pill">
                                    <div class="dropdown-menu">
                                        <option class="dropdown-item" selected disabled>Degree ID</option>
                                        <?php
                                        ob_start();

                                        //php for displya category from database;

                                        //ceate SQL for get all active categories inthe database
                                        $sql = "SELECT * FROM   tbl_degree";

                                        $res = mysqli_query($conn, $sql);

                                        //number of rows;
                                        $count = mysqli_num_rows($res);

                                        //if count is 0 we dont have category,else we have;

                                        if ($count > 0) {

                                            while ($rows = mysqli_fetch_assoc($res)) {

                                                $D_id = $rows['degree_id'];
                                                $D_index = $rows['Degree_index_num'];

                                        ?>
                                                <option value="<?php echo $D_id ?>"> <?php echo $D_index ?></option>

                                            <?php
                                            }
                                        } else {
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

                            <div class="dropdown" style="margin-left: 40%;">
                                <select name="semester" class="btn btn-light dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                                    <div class="dropdown-menu">
                                        <option class="dropdown-item" selected disabled>Semester</option>

                                        <option class="dropdown-item" value="1" href="#">Semester 1</option>
                                        <option class="dropdown-item" value="2" href="#">Semester 2</option>
                                        <option class="dropdown-item" value="3" href="#">Semester 3</option>
                                        <option class="dropdown-item" value="4" href="#">Semester 4</option>
                                        <option class="dropdown-item" value="5">Semester 5</option>
                                        <option class="dropdown-item" value="6">Semester 6</option>
                                        <option class="dropdown-item" value="7">Semester 7</option>
                                        <option class="dropdown-item" value="8">Semester 8</option>
                                    </div>
                                </select>

                            </div>

                        </div>
                        <div class="col">
                            <input name="submit" class="btn border rounded-pill btn-success" type="submit" style="margin-left: 40%;">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <?php for ($i = 1; $i <= 9; $i++) { ?>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-md-3">
                                <label class="col-form-label" style="margin-left: 20%;">Subject - <?php echo $i; ?></label>
                            </div>
                            <div class="col-md-3">
                                <input class="border rounded-pill form-control" type="text" name="subject_name_<?php echo $i; ?>" placeholder="Subject Name">
                            </div>
                            <div class="col-md-3">
                                <input class="border rounded-pill form-control" type="text" name="subject_code_<?php echo $i; ?>" placeholder="Subject Code">
                            </div>
                            <div class="col-md-3">
                                <input class="border rounded-pill form-control" type="number" name="credits_<?php echo $i; ?>" placeholder="Credit Value">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                echo "Clickedddddddddddddddddddddddddddddd";

                // Get form data
                $degree_id = $_POST["Degree_id"];
                $semester_number = $_POST["semester"];

                // Insert semester data into tbl_semester using prepared statement
                $sql_semester = "INSERT INTO tbl_semester (degree_id, semester_number) VALUES (?, ?)";
                $stmt_semester = mysqli_prepare($conn, $sql_semester);
                mysqli_stmt_bind_param($stmt_semester, "ii", $degree_id, $semester_number);
                mysqli_stmt_execute($stmt_semester);

                // Loop through subjects and insert data into tbl_subject using prepared statement
                for ($i = 1; $i <= 9; $i++) {
                    $subject_name = $_POST["subject_name_$i"];
                    $subject_code = $_POST["subject_code_$i"];
                    $credits = $_POST["credits_$i"];

                    $sql_get_semid= "SELECT semester_id FROM tbl_semester WHERE degree_id='$degree_id' AND semester_number='$semester_number'";
                    $res02 = mysqli_query($conn, $sql_get_semid);
                    if ($res02 ==TRUE) {
                        $row02 = mysqli_fetch_assoc($res02);
                        $semester_id = $row02['semester_id'];
                    }

                    $sql_subject = "INSERT INTO tbl_subject (semester_id, degree_id, semester_number, subject_name, subject_code, credits) VALUES (?, ?, ?, ?, ?, ?)";
                    $stmt_subject = mysqli_prepare($conn, $sql_subject);

                    // Check if the statement was prepared successfully
                    if ($stmt_subject) {
                        mysqli_stmt_bind_param($stmt_subject, "iiissi", $semester_id, $degree_id, $semester_number, $subject_name, $subject_code, $credits);
                        mysqli_stmt_execute($stmt_subject);
                        // Rest of your code
                    } else {
                        // Handle the preparation error
                    }
                }
                
            }
            ?>

        </section>
    </div>
    <?php include("C:/xampp/htdocs/APMS/Admin/parts/footer.php") ?>