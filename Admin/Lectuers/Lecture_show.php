<?php include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php") ?>

<body id="page-top">
    <div id="wrapper">
        <?php include("C:/xampp/htdocs/APMS/Admin/parts/Navbar.php") ?>
        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 43px;">Lecturer</h1>
        </div>
        <section id="lectures-show">
            <button class="btn btn-primary border rounded-pill" type="button" style="margin-left: 88%;margin-bottom: 25px;" onclick="window.location.href ='/APMS/Admin/Lectuers/Lecture_add.php';"> Add Lecture </button>
            <div>
                <div class="table-responsive text-center">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 0;">Lecturer pic</th>
                                <th>Lecturer ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>NIC No</th>
                                <th>DOB</th>
                                <th>E mail</th>
                                <th>Mobile No</th>
                                <th>Address</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            //SQL for get all the medic list;
                            $sql = "SELECT * FROM  tbl_lecturer";

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
                                    $id = $rows['lec_id'];
                                    $index_no = $rows['index_no'];
                                    $name = $rows['name'];
                                    $address = $rows['address'];
                                    $gender = $rows['gender'];
                                    $bio = $rows['bio'];
                                    $lecturer_image = $rows['image'];
                                    $tel_no = $rows['tel_no'];
                                    $gmail = $rows['gmail'];
                                    $linkdin = $rows['linkdin'];
                                    $git = $rows['github'];
                                    $nic = $rows['nic'];
                                    $DOB = $rows['DOB'];
                                    $username = $rows['username'];
                                    $password = $rows['password'];






                            ?>
                                    <tr>
                                        <td><?php echo $count_num++ ?></td>
                                        <td><img class="rounded-circle" style="width: 50px;height: 50px;" src="/APMS/images/lecturers/<?php echo $lecturer_image; ?>"></td>
                                        <td><?php echo $index_no ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $gender ?></td>
                                        <td><?php echo $nic ?></td>
                                        <td><?php echo $DOB ?></td>
                                        <td><?php echo $gmail ?></td>
                                        <td><?php echo $tel_no ?></td>
                                        <td> <?php echo $address ?>&nbsp;</td>
                                        <td><?php echo $password ?></td>
                                        <td>
                                            <div class="btn-group btn-group-sm border rounded-pill" role="group">
                                                <button class="btn btn-secondary btn-sm" type="button" onclick="window.location.href='';">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none">
                                                        <path d="M17.4142 2.58579C16.6332 1.80474 15.3668 1.80474 14.5858 2.58579L7 10.1716V13H9.82842L17.4142 5.41421C18.1953 4.63316 18.1953 3.36683 17.4142 2.58579Z" fill="currentColor"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6C2 4.89543 2.89543 4 4 4H8C8.55228 4 9 4.44772 9 5C9 5.55228 8.55228 6 8 6H4V16H14V12C14 11.4477 14.4477 11 15 11C15.5523 11 16 11.4477 16 12V16C16 17.1046 15.1046 18 14 18H4C2.89543 18 2 17.1046 2 16V6Z" fill="currentColor"></path>
                                                    </svg>
                                                    Edit
                                                </button>
                                                <button class="btn btn-danger btn-sm" type="button" onclick="window.location.href='';">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">

                                                        <path d="M8 11C7.44772 11 7 11.4477 7 12C7 12.5523 7.44772 13 8 13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H8Z" fill="currentColor"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" fill="currentColor"></path>

                                                    </svg>Remove
                                                </button>
                                            </div>
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
            </div>
        </section>
    </div>
    <?php include("C:/xampp/htdocs/APMS/Admin/parts/footer.php") ?>