<?php include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php") ?>


<body id="page-top">
    <div id="wrapper">
        <?php include("C:/xampp/htdocs/APMS/Admin/parts/Navbar.php") ?>
        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 20px;">Degree's</h1>
        </div>
        <section id="subjects">
            <div></div>
        </section>
        <div class="container">
            <?php
            if (isset($_GET['batch_id'])) {
                $batch_id = $_GET['batch_id'];
               // echo $batch_id;
            }

            ?>

            <div class="row">

                <?php
                //SQL for get all the medic list;
                $sql = "SELECT * FROM  tbl_degree WHERE  Batch_id=$batch_id";

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
                        $degree_id = $rows['degree_id'];
                        $index_num = $rows['Degree_index_num'];
                        $degree_name = $rows['Degree_name'];
                        $lec_index = $rows['Lecturer_index'];
                        $lec_name = $rows['Lecturer_name'];
                        $degree_img = $rows['Degree_img'];


                ?>
                        <div class="col-md-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto"><img class="img-thumbnail" src="/APMS/images/degree_img/<?php echo $degree_img; ?>" style="width: 120px;height: 120px;"></div>
                                        <div class="col" style="margin-top: 20px;margin-left: 5px;">
                                            <p>Degree ID : <?php echo $index_num ?> </p>
                                            <p>Degree Name : <?php echo $degree_name ?></p>
                                            <p>Lecturer ID : <?php echo $lec_index ?> </p>
                                            <p>Lecturer Name : <?php echo $lec_name ?> </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col"><button class="btn btn-dark border rounded-pill" type="button" style="margin-left: 40%;" onclick="window.location.href='/APMS/Admin/Students/student_list.php?batch_id=<?php echo $batch_id; ?>&degree_id=<?php echo $degree_id; ?>';">Access</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>



                <?php

                    }
                }
                ?>

            </div>
        </div>
    </div>
    <?php include("C:/xampp/htdocs/APMS/Admin/parts/footer.php") ?>