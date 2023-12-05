<div id="wrapper">
     <?php

     //session_start(); 

     // $user_id will be available here if included from dashboard.php
     if (isset($user_id)) {
          $user_id = $_SESSION['user_id'];
     }
     $user_id = $_SESSION['user_id'];
     ?>
     <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
          <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>APMS</span></div>
               </a>
               <hr class="sidebar-divider my-0">
               <ul class="navbar-nav text-light" id="accordionSidebar">


                    <li class="nav-item">


                         <a class="nav-link active" href="/APMS/student/index.php?user_id='<?php echo $user_id; ?>'">
                              <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
                         </a>

                    </li>



                    <li class="nav-item">
                         <a class="nav-link" href="/APMS/student/Student_profile/Std_profile.php?user_id='<?php echo $user_id; ?>'">
                              <i class="fas fa-user"></i><span>&nbsp;Profile</span>
                         </a>
                    </li>

                    <li class="nav-item">
                         <div class="nav-item dropdown" style="color: rgb(255,255,255);margin-left: 5px;">
                              <a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgb(255,255,255);margin-left: 12px;font-size: 13px;">
                                   <i class="far fa-list-alt"></i>&nbsp;Semesters</a>

                              <div class="dropdown-menu">
                                   <a class="dropdown-item" href="/APMS/student/Student_Semester/Semester_1.php?user_id='<?php echo $user_id; ?>'">Semester 1</a>
                                   <a class="dropdown-item" href="/APMS/student/Student_Semester/Semester_2.php?user_id='<?php echo $user_id; ?>'">Semester 2</a>
                                   <a class="dropdown-item" href="/APMS/student/Student_Semester/Semester_3.php?user_id='<?php echo $user_id; ?>'">Semester 3</a>
                                   <a class="dropdown-item" href="/APMS/student/Student_Semester/Semester_4.php?user_id='<?php echo $user_id; ?>'">Semester 4</a>
                                   <a class="dropdown-item" href="/APMS/student/Student_Semester/Semester_5.php?user_id='<?php echo $user_id; ?>'">Semester 5</a>
                                   <a class="dropdown-item" href="/APMS/student/Student_Semester/Semester_6.php?user_id='<?php echo $user_id; ?>'">Semester 6</a>
                                   <a class="dropdown-item" href="/APMS/student/Student_Semester/Semester_7.php?user_id='<?php echo $user_id; ?>'">Semester 7</a>
                                   <a class="dropdown-item" href="/APMS/student/Student_Semester/Semester_8.php?user_id='<?php echo $user_id; ?>'">Semester 8</a>
                              </div>
                         </div>

                    </li>
               </ul>
               <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
          </div>
     </nav>