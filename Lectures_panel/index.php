<?php include_once "c:/xampp/htdocs/APMS/Lectures_panel/parts/header.php"; ?>

<body id="page-top">
    <div id="wrapper">

        <?php

        if (!isset($_SESSION['user_id'])) {
            header("Location: /APMS/Login/loging_page/index.php");
            exit();
        }

        $user_id = $_SESSION['user_id'];

        include 'C:/xampp/htdocs/APMS/Lectures_panel/parts/navp.php';
        ?>


        <div style="margin-left: 3%;">
            <h1>Dashboard</h1>
            <div class="card shadow border-start-success py-2" style="margin-top: 35px;width: 300px;">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Students</span></div>
                            <?php
    //sql quary;
                            $sql_get_degree_id = "SELECT degree_id FROM tbl_degree WHERE lecture_id='$user_id'";
                            $res_get_degree_id = mysqli_query($conn, $sql_get_degree_id);

                            if ($res_get_degree_id) {
                                $row01 = mysqli_fetch_assoc($res_get_degree_id);
                                $Degree_id = $row01['degree_id'];
                            }

                            $sql_count_std = "SELECT * FROM tbl_students WHERE Degree_id='$Degree_id'";
                            //run quary
                            $res_std_count = mysqli_query($conn, $sql_count_std);
                            //count the rows

                            $count_std = mysqli_num_rows($res_std_count);

                            ?>
                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $count_std ?></span></div>
                            <?php

                            ?>
                        </div>

                        <div class="col-auto"><i class="icon ion-person-stalker fa-2x text-gray-300"></i></div>
                    </div>

                </div>
            </div>
            <!-- <?php echo 'degree_id= '. $Degree_id; ?> -->
        </div>
    </div>
    <?php include_once "c:/xampp/htdocs/APMS/Lectures_panel/parts/footer.php"; ?>