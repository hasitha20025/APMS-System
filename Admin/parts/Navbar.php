<?php



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
               <li class="nav-item"><a class="nav-link active" href="/APMS/Admin/index.php?user_id=' <?php echo $user_id; ?>'"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>

               <li class="nav-item"><a class="nav-link" href="/APMS/Admin/profile.php?user_id=' <?php echo $user_id; ?>'"><i class="fas fa-user"></i><span>&nbsp;Profile</span></a></li>

               <li class="nav-item"><a class="nav-link" href="/APMS/Admin/Accdmic_years/Year_show.php?user_id=' <?php echo $user_id; ?>'"><i class="fas fa-table"></i><span>&nbsp;Accedmic Years</span></a>

                    <a class="nav-link" href="/APMS/Admin/Lectuers/Lecture_show.php?user_id=' <?php echo $user_id; ?>'"><i class="far fa-user"></i><span>&nbsp;Lectures</span></a>

                    <a class="nav-link" href="/APMS/Admin/Degree_programmes/Degree_show.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book-fill">
                              <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"></path>
                         </svg><span>&nbsp;Degree Programmes</span></a>
                    <!-- last edith here -->
                    <a class="nav-link" href="/APMS/Admin/Students/batch_details.php"><i class="material-icons"></i><span>&nbsp;Students</span></a>


                    <a class="nav-link" href="/APMS/Admin/Subjects/degrees_subjects.php"><i class="material-icons"></i><span>&nbsp;Subjects</span></a>
               </li>
          </ul>
          <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
     </div>
</nav>
<div class="d-flex flex-column" id="content-wrapper">
     <div id="content">
          <?php include_once("searchandheader.php") ?>