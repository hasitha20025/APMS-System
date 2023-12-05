<?php include "c:/xampp/htdocs/APMS/Lectures_panel/parts/header.php"; ?>

<body id="page-top">
     <div id="wrapper">

          <?php include "C:/xampp/htdocs/APMS/Lectures_panel/parts/navp.php"; ?>
          <?php
          $user_id = $_GET['user_id'];
          $batch_id = $_GET['batch_id'];

         // echo $user_id . "/" . $batch_id;



          ?>

          <div>
               <div class="row">
                    <div class="col">
                         <h1 style="padding-bottom: 0px;margin-bottom: 20px;margin-left: 30px;">Select semester</h1>
                    </div>
               </div>
          </div>
          <div class="container" style="margin-top: 20px;">
               <div class="row">
                    <div class="col-md-4 col-lg-2">
                         <p style="text-align: center;font-size: 20px;">1st Year</p>
                    </div>
                    <div class="col-md-4 col-lg-2">
                         <a class="btn btn-primary text-center border rounded-pill" href="/APMS/Lectures_panel/lectures_Result(Show)/Results(Show)1.php?user_id=<?php echo $user_id; ?>&batch_id=<?php echo $batch_id; ?>&semester_id=<?php echo 1; ?>">Semester 1</a>
                    </div>
                    <div class="col-md-4">
                         <a class="btn btn-primary border rounded-pill" href=" /APMS/Lectures_panel/lectures_Result(Show)/Results(Show)2.php?user_id=<?php echo $user_id; ?>&batch_id=<?php echo $batch_id; ?>&semester_id=<?php echo 2; ?>">Semester 2</a>
                    </div>
               </div>
          </div>
          <div class="container" style="margin-top: 20px;">
               <div class="row">
                    <div class="col-md-4 col-lg-2">
                         <p style="text-align: center;font-size: 20px;">2nd Year</p>
                    </div>
                    <div class="col-md-4 col-lg-2 col-xl-2">
                         <a class="btn btn-primary text-center border rounded-pill" href="/APMS/Lectures_panel/lectures_Result(Show)/Results(Show)3.php?user_id=<?php echo $user_id; ?>&batch_id=<?php echo $batch_id; ?>&semester_id=<?php echo 3; ?>">Semester 3</a>
                    </div>
                    <div class="col-md-4">
                         <a class="btn btn-primary border rounded-pill" href="/APMS/Lectures_panel/lectures_Result(Show)/Results(Show)4.php?user_id=<?php echo $user_id; ?>&batch_id=<?php echo $batch_id; ?>&semester_id=<?php echo 4; ?>">Semester 4</a>
                    </div>
               </div>
          </div>
          <div class="container" style="margin-top: 20px;">
               <div class="row">
                    <div class="col-md-4 col-lg-2">
                         <p style="text-align: center;font-size: 20px;">3rd Year</p>
                    </div>
                    <div class="col-md-4 col-lg-2 col-xl-2">
                         <a class="btn btn-primary text-center border rounded-pill" href="/APMS/Lectures_panel/lectures_Result(Show)/Results(Show)5.php?user_id=<?php echo $user_id; ?>&batch_id=<?php echo $batch_id; ?>&semester_id=<?php echo 5; ?>">Semester 5</a>
                    </div>
                    <div class="col-md-4">
                         <a class="btn btn-primary border rounded-pill" href="/APMS/Lectures_panel/lectures_Result(Show)/Results(Show)6.php?user_id=<?php echo $user_id; ?>&batch_id=<?php echo $batch_id; ?>&semester_id=<?php echo 6; ?>">Semester 6</a>
                    </div>
               </div>
          </div>
          <div class="container" style="margin-top: 20px;">
               <div class="row">
                    <div class="col-md-4 col-lg-2">
                         <p style="text-align: center;font-size: 20px;">4th Year</p>
                    </div>
                    <div class="col-md-4 col-lg-2">
                         <a class="btn btn-primary text-center border rounded-pill" href="/APMS/Lectures_panel/lectures_Result(Show)/Results(Show)7.php?user_id=<?php echo $user_id; ?>&batch_id=<?php echo $batch_id; ?>&semester_id=<?php echo 7; ?>">Semester 7</a>
                    </div>
                    <div class="col-md-4">
                         <a class="btn btn-primary border rounded-pill" href="/APMS/Lectures_panel/lectures_Result(Show)/Results(Show)8.php?user_id=<?php echo $user_id; ?>&batch_id=<?php echo $batch_id; ?>&semester_id=<?php echo 8; ?>" a>Semester 8</a>

                    </div>
               </div>
          </div>
     </div>
     <footer class="bg-white sticky-footer">
          <div class="container my-auto">
               <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
          </div>
     </footer>
     </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
     </div>
     <script src="assets/bootstrap/js/bootstrap.min.js"></script>
     <script src="assets/js/theme.js"></script>
</body>

</html>