<?php include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php") ?>


<body id="page-top">
    <div id="wrapper">

        <?php

        if (!isset($_SESSION['user_id'])) {
            header("Location: /APMS/Login/loging_page/index.php");
            exit();
        }

        $user_id = $_SESSION['user_id'];

        include 'C:/xampp/htdocs/APMS/Admin/parts/Navbar.php';
        ?>







        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 30px;">Dashboard</h1>
            <div class="container">
                <div class="row" style="margin-bottom: 27px;">
                    <div class="col-md-6">
                        <div class="card shadow border-start-primary py-2" style="margin-top: 10px;width: 350px;">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Degree pregrammes</span></div>
                                        <?php
                                        //sql quary;
                                        $sql_count_degree = "SELECT * FROM tbl_degree ";
                                        //run quary
                                        $res_degree_count = mysqli_query($conn, $sql_count_degree);
                                        //count the rows

                                        $count_degree = mysqli_num_rows($res_degree_count);

                                        ?><div class="text-dark fw-bold h5 mb-0"><span><?php echo $count_degree ?></span></div><?php
                                                                                                                                ?>

                                    </div>
                                    <div class="col-auto"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor" class="fa-2x text-gray-300">
                                            <g>
                                                <rect fill="none" height="24" width="24"></rect>
                                            </g>
                                            <g>
                                                <g></g>
                                                <g>
                                                    <path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.7,0-4.15,0.65-5.5,1.5V8c1.35-0.85,3.8-1.5,5.5-1.5c1.2,0,2.4,0.15,3.5,0.5V18.5z"></path>
                                                    <g>
                                                        <path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.7,0-3.24,0.29-4.5,0.83v1.66 C14.13,10.85,15.7,10.5,17.5,10.5z"></path>
                                                        <path d="M13,12.49v1.66c1.13-0.64,2.7-0.99,4.5-0.99c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24 C15.8,11.66,14.26,11.96,13,12.49z"></path>
                                                        <path d="M17.5,14.33c-1.7,0-3.24,0.29-4.5,0.83v1.66c1.13-0.64,2.7-0.99,4.5-0.99c0.88,0,1.73,0.09,2.5,0.26v-1.52 C19.21,14.41,18.36,14.33,17.5,14.33z"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <div class="card shadow border-start-success py-2" style="width: 350px;">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Lectures</span></div>

                                        <?php
                                        //sql quary;
                                        $sql_count_lec = "SELECT * FROM tbl_lecturer";
                                        //run quary
                                        $res_lec_count = mysqli_query($conn, $sql_count_lec);
                                        //count the rows

                                        $count_lec = mysqli_num_rows($res_lec_count);

                                        ?>
                                        <div class="text-dark fw-bold h5 mb-0"><span><?php echo $count_lec ?></span></div>
                                        <?php
                                        ?>



                                    </div>
                                    <div class="col-auto"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor" class="fa-2x text-gray-300">
                                            <g>
                                                <rect fill="none" height="24" width="24"></rect>
                                            </g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path d="M18.39,14.56C16.71,13.7,14.53,13,12,13c-2.53,0-4.71,0.7-6.39,1.56C4.61,15.07,4,16.1,4,17.22V20h16v-2.78 C20,16.1,19.39,15.07,18.39,14.56z"></path>
                                                    </g>
                                                    <g>
                                                        <path d="M10,12c0.17,0,3.83,0,4,0c1.66,0,3-1.34,3-3c0-0.73-0.27-1.4-0.71-1.92C16.42,6.75,16.5,6.38,16.5,6 c0-1.25-0.77-2.32-1.86-2.77C14,2.48,13.06,2,12,2s-2,0.48-2.64,1.23C8.27,3.68,7.5,4.75,7.5,6c0,0.38,0.08,0.75,0.21,1.08 C7.27,7.6,7,8.27,7,9C7,10.66,8.34,12,10,12z"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow border-start-warning py-2" style="margin-bottom: 10px;margin-top: 10px;width: 350px;">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Students</span></div>
                                        <?php
                                        //sql quary;
                                        $sql_count_std = "SELECT * FROM tbl_students";
                                        //run quary
                                        $res_std_count = mysqli_query($conn, $sql_count_std);
                                        //count the rows

                                        $count_std = mysqli_num_rows($res_std_count);

                                        ?>
                                        <div class="text-dark fw-bold h5 mb-0"><span><?php echo $count_std ?></span></div>
                                        <?php
                                        ?>

                                    </div>
                                    <div class="col-auto"><i class="fas fa-user-graduate fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow border-start-info py-2" style="margin-top: 10px;width: 350px;">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Accdmic years</span></div>
                                        <?php
                                        //sql quary;
                                        $sql_count_year = "SELECT * FROM tbl_accademic_year ";
                                        //run quary
                                        $res_year_count = mysqli_query($conn, $sql_count_year);
                                        //count the rows

                                        $count_year = mysqli_num_rows($res_year_count);

                                        ?>
                                        <div class="text-dark fw-bold h5 mb-0"><span><?php echo $count_year ?></span></div>
                                        <?php
                                        ?>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("C:/xampp/htdocs/APMS/Admin/parts/footer.php") ?>