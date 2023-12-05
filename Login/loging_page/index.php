<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<?php include("C:/xampp/htdocs/APMS/config/constant.php") ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Login-with-overlay-image.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">

            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 class="text-info fw-light mb-5" style="color: var(--bs-btn-disabled-color);">Login</h2>


                    <form action="" method="post">
                        <?php

                        if (isset($_SESSION['login'])) {
                            echo '<p style="color: red;">' . $_SESSION['login'] . '</p>';
                            unset($_SESSION['login']);
                        }

                        if (isset($_SESSION['error'])) {
                            echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
                            unset($_SESSION['error']);
                        }

                        ?>


                        <div class="form-group mb-3">
                            <label class="form-label text-secondary">UserName</label>
                            <input class="border rounded-pill form-control" name="username" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email">
                        </div>


                        <div class="form-group mb-3">
                            <label class="form-label text-secondary">Password</label>
                            <input class="border rounded-pill form-control" name="password" type="password" required="">
                        </div>



                        <button class="btn btn-primary border rounded-pill mt-2" type="submit" value="login" name="submit">Log In</button>


                    </form>

                    <?php

                    // check submit button is work or not well;
                    if (isset($_POST["submit"])) {

                        //process for login system,
                        //1.0 get data from form;


                        $username = $_POST["username"];
                        $password = $_POST["password"];

                        //sql for check username and password are match in database data;


                        $sql = "SELECT admin_id, username,password,role_id FROM tbl_admin WHERE username='$username'
                                UNION
                                SELECT lec_id, username,password,role_id FROM tbl_lecturer WHERE username = '$username'
                                UNION
                                SELECT stu_id, username,password,role_id FROM tbl_students WHERE username = '$username'
                        ";

                        //RUN this quary
                        $result = $conn->query($sql);

                        //
                        if ($result->num_rows == 1) {
                            $row = $result->fetch_assoc();

                            // Verify password

                            if ($password == $row['password']) {
                                // Store user information in session
                                $_SESSION['user_id'] = $row['admin_id'] ?? $row['lec_id'] ?? $row['stu_id'];
                                $_SESSION['username'] = $row['username'];
                                $_SESSION['role'] = $row['role_id'];



                                // Redirect based on user role
                                if ($row['role_id'] == 1) { // Role ID 1 represents admin
                                    header("Location: /APMS/Admin/index.php?user_id=".$_SESSION['user_id']);
                                } else if ($row['role_id'] == 2) { // Role ID 2 represents student
                                    header("Location: /APMS/student/index.php?user_id=" . $_SESSION['user_id']);
                                } else if ($row['role_id'] == 3) { // Role ID 3 represents lecture
                                    header("Location:/APMS/Lectures_panel/index.php?user_id=" . $_SESSION['user_id']);
                                }
                                exit();
                            } else {
                                $_SESSION['error'] = "username or password are wrong.";
                            }
                        } else {
                            $_SESSION['error'] = " user not found";
                        }

                        // Redirect back to login page if login fails
                        header("Location:index.php");
                        exit();
                    }


                    ?>








                    <p class="text-primary mt-3 mb-0" style="color: rgb(5,103,248);"><a class="text-info small" href="../reset_password/reset_password.php">Forgot your UserName or password?</a></p>





                </div>





            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;assets/img/aldain-austria-316143-unsplash.jpg&quot;);background-size:cover;background-position:center center;">
                <p class="ms-auto small text-dark mb-2"><em>&nbsp;</em></p>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>