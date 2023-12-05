<?php include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php") ?>

<body id="page-top">
    <div id="wrapper">
        <?php include("C:/xampp/htdocs/APMS/Admin/parts/Navbar.php") ?>
        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 20px;">Students List</h1>
        </div>
        <?php
        if (isset($_GET['degree_id']) && isset($_GET['batch_id'])) {
            $degree_id = $_GET['degree_id'];
            $batch_id = $_GET['batch_id'];

            // echo $batch_id;
            //echo '.' . $degree_id;
            // Now you can use $degree_id and $batch_id in your code
        }
        ?>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Profile Pic</th>
                        <th>Enrollment No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>NIC No</th>
                        <th>DOB</th>
                        <th>Address</th>
                        <th>Mobile No</th>
                        <th>E mail</th>
                        <th>Batch ID</th>
                        <th>Degree ID</th>
                        <th>Degree Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    //SQL for get all the medic list;
                    $sql = "SELECT * FROM  tbl_students WHERE Batch_id=$batch_id AND Degree_id=$degree_id";

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
                            $std_id = $rows['stu_id'];
                            $std_index_no = $rows['index_no'];
                            $std_name = $rows['name'];
                            $std_nic = $rows['nic'];
                            $std_DOB = $rows['DOB'];
                            $std_gender = $rows['gender'];
                            $std_address = $rows['address'];
                            $std_tel_no = $rows['tel_no'];
                            $std_img = $rows['image'];
                            $std_email = $rows['gmail'];
                            $std_linkdin = $rows['linkdin'];
                            $std_github = $rows['github'];
                            $std_bio = $rows['bio'];
                            $std_username = $rows['username'];
                            $std_batch_index = $rows['batch_index'];
                            $std_Degree_index = $rows['Degree_index'];
                            $std_degree_name = $rows['Degree_name'];






                    ?>
                            <tr>
                                <td><?php echo $count_num++ ?></td>
                                <td><img class="rounded-circle img-fluid border" style="width: 50px;height: 50px;" src="/APMS/images/student/<?php echo $std_img ?> "></td>
                                <td><?php echo $std_index_no ?> </td>
                                <td><?php echo $std_name ?></td>
                                <td><?php echo $std_gender ?></td>
                                <td><?php echo $std_nic ?></td>
                                <td><?php echo $std_DOB ?></td>
                                <td><?php echo $std_address ?></td>
                                <td><?php echo $std_tel_no ?></td>
                                <td><?php echo $std_email ?></td>
                                <td><?php echo $std_batch_index ?></td>
                                <td><?php echo $std_Degree_index ?></td>
                                <td><?php echo $std_degree_name ?></td>
                                <td>
                                    <div class="btn-group" role="group"><button class="btn btn-secondary" type="button">Edit</button><button class="btn btn-danger" type="button">&nbsp;Remove</button></div>
                                </td>
                            </tr>
                            <tr></tr>



                    <?php

                        }
                    }
                    ?>






                </tbody>
            </table>
        </div>
        <section id="subjects">
            <div></div>
        </section>
    </div>
    <?php include("C:/xampp/htdocs/APMS/Admin/parts/footer.php") ?>