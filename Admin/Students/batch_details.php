<?php include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php") ?>

<body id="page-top">
    <div id="wrapper">
        <?php include("C:/xampp/htdocs/APMS/Admin/parts/Navbar.php") ?>
        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 20px;">Batch Details</h1>
        </div>
        <button class="btn btn-primary border rounded-pill" type="button" style="margin-left: 86%;margin-bottom: 20px;" onclick="window.location.href='/APMS/Admin/Students/std_add.php ';"> Add Student</button>



        <section id="subjects">
            <div>

            </div>
        </section>
        <div class="container">
            <div class="row">

                <?php
                //SQL for get all the medic list;
                $sql = "SELECT * FROM  tbl_accademic_year";

                //executing;
                $res = mysqli_query($conn, $sql);

                //counting rows
                $count = mysqli_num_rows($res);

                //set up veriable for count;
                $count_num = 1;

                if ($count > 0) {

                    # show all the list;
                    //get the details from database and display;
                    while ($rows = mysqli_fetch_assoc($res)) {
                        //get the value for display
                        $id = $rows['id'];
                        $batch_index = $rows['Batch_id'];
                        $batch_num = $rows['Batch_number'];
                        $start_year = $rows['Start_year'];
                        $end_year = $rows['End_year'];
                        $batch_img = $rows['Batch_image'];

                ?>
                        <div class="col-md-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto"><img class="img-thumbnail" src="/APMS/images/Batch_img/<?php echo $batch_img; ?>" style="width: 120px;height: 120px;"></div>
                                        <div class="col" style="margin-top: 20px;margin-left: 5px;">
                                            <p>Batch ID: <?php echo $batch_index; ?> </p>
                                            <p>Batch No : <?php echo $batch_num; ?></p>
                                            <p>Start Year : <?php echo $start_year; ?></p>
                                            <p>End Year : <?php echo $end_year; ?></p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col"><button class="btn btn-dark border rounded-pill" type="button" style="margin-left: 40%;" onclick="window.location.href='/APMS/Admin/Students/degree_std.php?batch_id=<?php echo $id; ?>';">Access</button></div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                        </div>



                <?php

                    }
                }
                ?>




            </div>
        </div>
    </div>
    <?php include("C:/xampp/htdocs/APMS/Admin/parts/footer.php") ?>