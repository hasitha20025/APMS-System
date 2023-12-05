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

               <li class="nav-item">
                    <a class="nav-link active" href="/APMS/Lectures_panel/index.php?user_id=' <?php echo $user_id; ?>'">
                         <i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
               </li>


               <li class="nav-item">
                    <a class="nav-link" href="/APMS/Lectures_panel/Lectures_profile/Lec_profile.php?user_id=' <?php echo $user_id; ?>'">
                         <i class="fas fa-user"></i><span>Profile</span></a>
               </li>

               <li class="nav-item">

                    <a class="nav-link" href="/APMS/Lectures_panel//batch_select/select_batch.php?user_id=' <?php echo $user_id; ?>'"><i class="fas fa-table"></i><span>Results</span></a>
                 
                    </a>
               </li>
          </ul>
          <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
     </div>
</nav>


<div class="d-flex flex-column" id="content-wrapper">
     <div id="content">

          <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
               <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>

                    <?php include "C:/xampp/htdocs/APMS/Lectures_panel/parts/searchbar.php" ?>

                    <ul class="navbar-nav flex-nowrap ms-auto">
                         <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                              <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                   <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                             <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                   </form>
                              </div>
                         </li>

                         <li class="nav-item dropdown no-arrow mx-1">

                              <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                         </li>
                         <div class="d-none d-sm-block topbar-divider"></div>
                         <li class="nav-item dropdown no-arrow">
                              <?php include "C:/xampp/htdocs/APMS/Lectures_panel/parts/dropdown.php"; ?>
                         </li>
                    </ul>
               </div>
          </nav>