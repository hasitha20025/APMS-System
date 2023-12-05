<?php include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php") ?>

<body id="page-top">
    <div id="wrapper">
        <?php include("C:/xampp/htdocs/APMS/Admin/parts/Navbar.php") ?>
        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 43px;">Subject</h1>
        </div>
        <button class="btn btn-primary border rounded-pill" type="button" style="margin-left: 89%;margin-bottom: 20px;" onclick="window.location.href='/APMS/Admin/Subjects/sub_add.php';"> Add Subjects</button>
        <section id="subjects">
            <div></div>
        </section>
        <div class="container">
            <div class="row">
                <?php
                //SQL for get all the medic list;
                $sql = "SELECT * FROM  tbl_degree";

                //executing;
                $res = mysqli_query($conn, $sql);

                //counting rows
                $count = mysqli_num_rows($res);

                //set up veriable for count;
                if ($count > 0) {

                    # show all the list;
                    //get the details from database and display;
                    while ($rows = mysqli_fetch_assoc($res)) {
                        //get the value for display
                        $degree_id = $rows['degree_id'];
                        $degree_index = $rows['Degree_index_num'];
                        $degree_name = $rows['Degree_name'];
                        $degree_img = $rows['Degree_img']


                ?>
                        <div class="col-md-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">
                                            <img src="/APMS/images/degree_img/<?php echo $degree_img ?>" style="width: 100px;height: 100px;">
                                        </div>
                                        <div class="col">
                                            <p>Degree Name : <?php echo $degree_name; ?></p>
                                            <p>Degree ID : <?php echo $degree_index; ?></p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col"><button class="btn btn-dark border rounded-pill" type="button" style="margin-left: 40%;" onclick="window.location.href='/APMS/Admin/Subjects/show_subj.php?degree_id=<?php echo $degree_id; ?>';">Access</button></div>
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