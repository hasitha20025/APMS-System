<?php include("C:/xampp/htdocs/APMS/Admin/parts/headerA.php") ?>


<body id="page-top">
    <div id="wrapper">


        <?php
        include("C:/xampp/htdocs/APMS/Admin/parts/Navbar.php");

        $user_id = $_SESSION['user_id'];
        
        //echo "User ID: " . $user_id;


        ?>
        <div style="margin-left: 3%;">
            <h1 style="margin-bottom: 20px;">Profile</h1>
        </div>
        <section id="Edit-Profile">
            <?php

            $sql = "SELECT * from tbl_admin WHERE admin_id =$user_id ";

            $res = mysqli_query($conn, $sql);
            if ($res == TRUE) {
                $count = mysqli_num_rows($res);
                if ($count > 0) {

                    while ($rows = mysqli_fetch_assoc($res)) {

                        $user_id = $rows['admin_id'];
                        $linkdin = $rows["linkdin"];
                        $name = $rows["name"];
                        $bio = $rows["bio"];
                        $index_no = $rows["index_no"];
                        $nic = $rows["nic_no"];
                        $gender = $rows["gender"];
                        $date_of_birth = $rows["DOB"];
                        $address = $rows["address"];
                        $tel_no = $rows["tel_no"];
                        $email = $rows["email"];
                        $git = $rows["git"];
                        $image = $rows["image"];
                    }
                }
            }
            ?>
            <form>
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col"><img class="rounded-circle" src="/APMS/images/admin/<?php echo $image?> " style="width: 200px;height: 200px;margin-left: 36%;margin-bottom: 20px;"></div>
                                </div>
                                <div class="row">
                                    <div class="col"><button class="btn btn-primary border rounded-pill" type="button" style="margin: 0;margin-right: 20px;" onclick="location.href='<?php echo $linkdin ?>'">Linkedin</button></div>
                                    <div class="col"><button class="btn btn-dark border rounded-pill" type="button" style="margin: 0;margin-left: 23%;"><i class="far fa-edit"></i>&nbsp;<a href="/APMS/Admin/edit_Profile/edit_profile.php?user_id=' <?php echo $user_id; ?>'">Edit Profile</a></button></div>
                                    <div class="col"><button class="btn btn-primary border rounded-pill" type="button" style="margin: 0;margin-right: 0;margin-left: 20%;" onclick="location.href='<?php echo $git ?>'">Git hub</button></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col" style="margin-bottom: 20px;">
                                        <p>Gender : <?PHP echo $gender ?> </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col" style="margin-bottom: 20px;">
                                        <p>Address : <?PHP echo $address; ?> </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col" style="margin-bottom: 20px;">
                                        <p>Mobile No : <?PHP echo $tel_no ?> </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>E mail : <?PHP echo $email; ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 20px;margin-top: 30px;">
                        <div class="row">
                            <div class="col-md-6">
                                <p>&nbsp;Name : <?PHP echo $name; ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 20px;">
                        <div class="row">
                            <div class="col-md-6">
                                <p>&nbsp;Enrollment No : <?PHP echo $index_no; ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>&nbsp;Bio : <?PHP echo $bio; ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <?php include("C:/xampp/htdocs/APMS/Admin/parts/footer.php") ?>