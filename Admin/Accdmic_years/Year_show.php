<?php include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php") ?>

<body id="page-top">
    <div id="wrapper">
        <?php include("C:/xampp/htdocs/APMS/Admin/parts/Navbar.php"); ?>
        <div id="Accademic_Years" style="margin-left: 3%;">
            <h1 style="margin-bottom: 30px;">Accademic Years</h1>
            <div class="row">
                <div class="col">
                    <button class="btn btn-dark border rounded-pill" type="button" style="margin-left: 80%;padding-bottom: 6px;margin-bottom: 17px;" onclick="window.location.href = '../Accdmic_years/Year_add.php';">+ Add </button>
                </div>
            </div>
            <div class=" table-responsive" style="margin-right: 2%;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th style="text-align: left;width: 100px;">Batch pic</th>
                            <th>Batch ID</th>
                            <th>Batch No</th>
                            <th>Start Year</th>
                            <th>End Year</th>
                        </tr>
                    </thead>
                    <tbody>

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
                                    $batch_id = $rows['Batch_id'];
                                    $batch_num = $rows['Batch_number'];
                                    $start_year = $rows['Start_year'];
                                    $end_year = $rows['End_year'];
                                    $batch_img = $rows['Batch_image'];

                                        ?>
                                                <tr>
                                                    <td><?php echo $count_num++; ?></td>

                                                    <td style="text-align: left;"><img class="img-fluid" alt="batch profile picuter" src="/APMS/images/Batch_img/<?php echo $batch_img; ?>" style="width: 50px;height: 50px;"></td>

                                                    <td><?php echo $batch_id; ?></td>
                                                    <td><?php echo $batch_num; ?></td>
                                                    <td><?php echo $start_year; ?></td>
                                                    <td><?php echo $end_year; ?></td>




                                                </tr>
                                                <tr></tr>



                                        <?php

                                }
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include("C:/xampp/htdocs/APMS/Admin/parts/footer.php") ?>