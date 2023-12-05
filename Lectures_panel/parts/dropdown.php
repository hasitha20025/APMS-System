<div class="nav-item dropdown no-arrow">
     <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">

          <?php

          $sql = "SELECT * from  tbl_lecturer WHERE lec_id =$user_id ";

          $res = mysqli_query($conn, $sql);
          if ($res == TRUE) {
               $count = mysqli_num_rows($res);
               if ($count > 0) {

                    while ($rows = mysqli_fetch_assoc($res)) {


                         $name = $rows["name"];

                         $image = $rows["image"];
                    }
               }
          }
          ?>


          <span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo $name ?></span>

          <img class="border rounded-circle img-profile" src="/APMS/images/lecturers/<?php echo $image ?> "></a>

     <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">

          <a class="dropdown-item" href="/APMS/Lectures_panel/Lectures_profile/Lec_profile.php?user_id=' <?php echo $user_id; ?>'"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>



          <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="/APMS/Login/logout/logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>

     </div>
</div>