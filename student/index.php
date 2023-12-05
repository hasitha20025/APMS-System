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


    ?>





    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <?php include("C:/xampp/htdocs/APMS/student/parts/searchbar.php") ?>
            <div style="margin-left: 3%;">
                <?php
                ////////////////////////////////////////////////////////////////////////////
                //echo "the stu_id: " . $user_id;
                ?>
                <section>
                    <h1 style="margin-bottom: 20px;">Dashboard</h1>
                    <div></div>
                </section>
            </div>
            <div class="container" style="margin-bottom: 30px;">
                <div class="row">
                    <div class="col-md-3" style="margin-top: 20px;">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">

                                            <?php
                                            $sql_semester1 = "SELECT current_gpa FROM tbl_results_sem1 WHERE enrollment_number = $user_id";
                                            $res_semester1 = mysqli_query($conn, $sql_semester1);

                                            if ($res_semester1 == TRUE) {
                                                $count_semester1 = mysqli_num_rows($res_semester1);

                                                if ($count_semester1 > 0) {

                                                    while ($rows_semester1 = mysqli_fetch_assoc($res_semester1)) {

                                                        $gpa_sem1 = $rows_semester1['current_gpa'];
                                                    }
                                                } else {
                                                    $gpa_sem1 = 0.00;
                                                }
                                            }
                                            // echo "gpa sem1: " . $gpa_sem1;

                                            ?>
                                            <p class="text-start text-primary">Semester 1</p><span><?php echo $gpa_sem1; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top: 20px;">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <?php
                                            $sql_semester2 = "SELECT current_gpa FROM tbl_results_sem2 WHERE enrollment_number = $user_id";
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


                                            <p class="text-success">Semester 2</p><span><?php echo $gpa_sem2 ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top: 20px;">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <?php
                                            // Fetch GPA for Semester 3 from tbl_results_sem3
                                            $sql_semester3 = "SELECT current_gpa FROM tbl_results_sem3 WHERE enrollment_number = $user_id";
                                            $res_semester3 = mysqli_query($conn, $sql_semester3);

                                            if ($res_semester3 == TRUE) {
                                                $count_semester3 = mysqli_num_rows($res_semester3);

                                                if ($count_semester3 > 0) {
                                                    while ($rows_semester3 = mysqli_fetch_assoc($res_semester3)) {
                                                        $gpa_sem3 = $rows_semester3['current_gpa'];
                                                    }
                                                } else {
                                                    $gpa_sem3 = 0.00;
                                                }
                                            }
                                            // echo "gpa sem3: " . $gpa_sem3;
                                            ?>


                                            <p class="text-info">Semester 3</p><span><?php echo $gpa_sem3; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow border-start-success py-2" style="margin-top: 20px;">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <?php
                                            // Fetch GPA for Semester 4 from tbl_results_sem4
                                            $sql_semester4 = "SELECT current_gpa FROM tbl_results_sem4 WHERE enrollment_number = $user_id";
                                            $res_semester4 = mysqli_query($conn, $sql_semester4);

                                            if ($res_semester4 == TRUE) {
                                                $count_semester4 = mysqli_num_rows($res_semester4);

                                                if ($count_semester4 > 0) {
                                                    while ($rows_semester4 = mysqli_fetch_assoc($res_semester4)) {
                                                        $gpa_sem4 = $rows_semester4['current_gpa'];
                                                    }
                                                } else {
                                                    $gpa_sem4 = 0.00;
                                                }
                                            }
                                            //echo "gpa sem4: " . $gpa_sem4;
                                            ?>



                                            <p class="text-warning">Semester 4</p><span><?php echo $gpa_sem4; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-bottom: 30px;">
                <div class="row">
                    <div class="col-md-3" style="margin-top: 20px;">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">

                                            <?php
                                            // Fetch GPA for Semester 5 from tbl_results_sem5
                                            $sql_semester5 = "SELECT current_gpa FROM tbl_results_sem5 WHERE enrollment_number = $user_id";
                                            $res_semester5 = mysqli_query($conn, $sql_semester5);

                                            if ($res_semester5 == TRUE) {
                                                $count_semester5 = mysqli_num_rows($res_semester5);

                                                if ($count_semester5 > 0) {
                                                    while ($rows_semester5 = mysqli_fetch_assoc($res_semester5)) {
                                                        $gpa_sem5 = $rows_semester5['current_gpa'];
                                                    }
                                                } else {
                                                    $gpa_sem5 = 0.00;
                                                }
                                            }
                                            // echo "gpa sem5: " . $gpa_sem5;
                                            ?>




                                            <p class="text-info">Semester 5</p><span><?php echo $gpa_sem5 ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top: 20px;">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <?php
                                            // Fetch GPA for Semester 6 from tbl_results_sem6
                                            $sql_semester6 = "SELECT current_gpa FROM tbl_results_sem6 WHERE enrollment_number = $user_id";
                                            $res_semester6 = mysqli_query($conn, $sql_semester6);

                                            if ($res_semester6 == TRUE) {
                                                $count_semester6 = mysqli_num_rows($res_semester6);

                                                if ($count_semester6 > 0) {
                                                    while ($rows_semester6 = mysqli_fetch_assoc($res_semester6)) {
                                                        $gpa_sem6 = $rows_semester6['current_gpa'];
                                                    }
                                                } else {
                                                    $gpa_sem6 = 0.00;
                                                }
                                            }
                                            // echo "gpa sem6: " . $gpa_sem6;
                                            ?>

                                            <p class="text-warning">Semester 6</p><span><?php echo $gpa_sem6 ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top: 20px;">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <?php
                                            // Fetch GPA for Semester 7 from tbl_results_sem7
                                            $sql_semester7 = "SELECT current_gpa FROM tbl_results_sem7 WHERE enrollment_number = $user_id";
                                            $res_semester7 = mysqli_query($conn, $sql_semester7);

                                            if ($res_semester7 == TRUE) {
                                                $count_semester7 = mysqli_num_rows($res_semester7);

                                                if ($count_semester7 > 0) {
                                                    while ($rows_semester7 = mysqli_fetch_assoc($res_semester7)) {
                                                        $gpa_sem7 = $rows_semester7['current_gpa'];
                                                    }
                                                } else {
                                                    $gpa_sem7 = 0.00;
                                                }
                                            }
                                            // echo "gpa sem7: " . $gpa_sem7;
                                            ?>

                                            <p class="text-primary">Semester 7</p><span><?php echo $gpa_sem7 ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow border-start-success py-2" style="margin-top: 20px;">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <?php
                                            // Fetch GPA for Semester 8 from tbl_results_sem8
                                            $sql_semester8 = "SELECT current_gpa FROM tbl_results_sem8 WHERE enrollment_number = $user_id";
                                            $res_semester8 = mysqli_query($conn, $sql_semester8);

                                            if ($res_semester8 == TRUE) {
                                                $count_semester8 = mysqli_num_rows($res_semester8);

                                                if ($count_semester8 > 0) {
                                                    while ($rows_semester8 = mysqli_fetch_assoc($res_semester8)) {
                                                        $gpa_sem8 = $rows_semester8['current_gpa'];
                                                    }
                                                } else {
                                                    $gpa_sem8 = 0.00;
                                                }
                                            }
                                            // echo "gpa sem8: " . $gpa_sem8;
                                            ?>

                                            <p class="text-success">Semester 8</p><span><?php echo $gpa_sem8; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="chart-area">
                                <canvas data-bss-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;semester 1&quot;,&quot;semester 2&quot;,&quot;semester 3&quot;,&quot;semester 4&quot;,&quot;semester 5&quot;,&quot;semester 6&quot;,&quot;semester 7&quot;,&quot;semester 8&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;<?php echo $gpa_sem1; ?>&quot;,&quot; <?php echo $gpa_sem2; ?> &quot;,&quot;<?php echo $gpa_sem3; ?>&quot;,&quot;<?php echo $gpa_sem4; ?>&quot;,&quot;<?php echo $gpa_sem5; ?>&quot;,&quot;<?php echo $gpa_sem6; ?>&quot;,&quot;<?php echo $gpa_sem7; ?>&quot;,&quot;<?php echo $gpa_sem8; ?>&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;},{&quot;label&quot;:&quot;&quot;,&quot;fill&quot;:true,&quot;data&quot;:[]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;position&quot;:&quot;top&quot;},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}]}}}"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('C:/xampp/htdocs/APMS/student/parts/footer.php') ?>