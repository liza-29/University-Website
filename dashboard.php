<?php
include 'include/header.php';
include 'include/mysql.php';
$faculty = "select count(*) as total from faculty";
$faculty = $connection->query($faculty);
$faculty = mysqli_fetch_array($faculty);
$faculty = $faculty['total'];

$department = "select count(*) as total from department";
$department = $connection->query($department);
$department = mysqli_fetch_array($department);
$department = $department['total'];

$program = "select count(*) as total from program";
$program = $connection->query($program);
$program = mysqli_fetch_array($program);
$program = $program['total'];

$semister = "select count(*) as total from semister";
$semister = $connection->query($semister);
$semister = mysqli_fetch_array($semister);
$semister = $semister['total'];


$total_student = "select count(*) as total from student_information";
$total_student = $connection->query($total_student);
$total_student = mysqli_fetch_array($total_student);
$total_student = $total_student['total'];

$total_pending = "select count(*) as total from student_information where status=0";
$total_pending = $connection->query($total_pending);
$total_pending = mysqli_fetch_array($total_pending);
$total_pending = $total_pending['total'];

$total_approved = "select count(*) as total from student_information where status=1";
$total_approved = $connection->query($total_approved);
$total_approved = mysqli_fetch_array($total_approved);
$total_approved = $total_approved['total'];

$total_rejected = "select count(*) as total from student_information where status=2";
$total_rejected = $connection->query($total_rejected);
$total_rejected = mysqli_fetch_array($total_rejected);
$total_rejected = $total_rejected['total'];

$admission_cancel = "select count(*) as total from student_information where status=3";
$admission_cancel = $connection->query($admission_cancel);
$admission_cancel = mysqli_fetch_array($admission_cancel);
$admission_cancel = $admission_cancel['total'];

$total_admin = "select count(*) as total from admin";
$total_admin = $connection->query($total_admin);
$total_admin = mysqli_fetch_array($total_admin);
$total_admin = $total_admin['total'];

?>




<div class="row g-3">
   <div class="col-lg-3 col-md-6 ">
      <div class="ibox bg-info color-white widget-stat">
         <div class="ibox-body p-2">
            <h2 class="m-b-5 font-strong text-light"><?= $total_student  ?></h2>
            <div class="m-b-5 text-light">Total Student</div>
            <i class="fas fa-school widget-stat-icon"></i>
            <div class="down_box">
               <a href="all_student.php" class="text-light">
                  <small class="">More Info</small>
                  <i class="fas fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>

   <div class="col-lg-3 col-md-6 ">
      <div class="ibox bg-success color-white widget-stat">
         <div class="ibox-body p-2">
            <h2 class="m-b-5 font-strong text-light"><?= $total_pending  ?></h2>
            <div class="m-b-5 text-light">Total Pending</div>
            <i class="fas fa-school widget-stat-icon"></i>
            <div class="down_box">
               <a href="all_student.php" class="text-light">
                  <small class="">More Info</small>
                  <i class="fas fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-3 col-md-6 ">
      <div class="ibox bg-warning color-white widget-stat">
         <div class="ibox-body p-2">
            <h2 class="m-b-5 font-strong text-light"><?= $total_approved  ?></h2>
            <div class="m-b-5 text-light">Total Approved</div>
            <i class="fas fa-school widget-stat-icon"></i>
            <div class="down_box">
               <a href="all_student.php" class="text-light">
                  <small class="">More Info</small>
                  <i class="fas fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>

   <div class="col-lg-3 col-md-6 ">
      <div class="ibox bg-danger color-white widget-stat">
         <div class="ibox-body p-2">
            <h2 class="m-b-5 font-strong text-light"><?= $total_rejected  ?></h2>
            <div class="m-b-5 text-light">Total Rejected</div>
            <i class="fas fa-school widget-stat-icon"></i>
            <div class="down_box">
               <a href="all_student.php" class="text-light">
                  <small class="">More Info</small>
                  <i class="fas fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>

   <div class="col-lg-3 col-md-6 ">
      <div class="ibox bg-danger color-white widget-stat">
         <div class="ibox-body p-2">
            <h2 class="m-b-5 font-strong text-light"><?= $admission_cancel  ?></h2>
            <div class="m-b-5 text-light">Total Admission Cancel</div>
            <i class="fas fa-school widget-stat-icon"></i>
            <div class="down_box">
               <a href="all_student.php" class="text-light">
                  <small class="">More Info</small>
                  <i class="fas fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>

   <div class="col-lg-3 col-md-6 ">
      <div class="ibox bg-danger color-white widget-stat">
         <div class="ibox-body p-2">
            <h2 class="m-b-5 font-strong text-light"><?= $total_admin  ?></h2>
            <div class="m-b-5 text-light">Total Admin</div>
            <i class="fas fa-school widget-stat-icon"></i>
            <div class="down_box">
               <a href="admin.php" class="text-light">
                  <small class="">More Info</small>
                  <i class="fas fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>


</div>


<div class="row mt-3 g-3">
   <div class="col-lg-3 col-md-6 ">
      <div class="ibox bg-info color-white widget-stat">
         <div class="ibox-body p-2">
            <h2 class="m-b-5 font-strong text-light"><?= $faculty  ?></h2>
            <div class="m-b-5 text-light">Total Faculty</div>
            <i class="fas fa-school widget-stat-icon"></i>
            <div class="down_box">
               <a href="faculty.php" class="text-light">
                  <small class="">More Info</small>
                  <i class="fas fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-3 col-md-6 ">
      <div class="ibox bg-success color-white widget-stat">
         <div class="ibox-body p-2">
            <h2 class="m-b-5 font-strong text-light"><?= $department  ?></h2>
            <div class="m-b-5 text-light">Total Department</div>
            <i class="fas fa-school widget-stat-icon"></i>
            <div class="down_box">
               <a href="department.php" class="text-light">
                  <small class="">More Info</small>
                  <i class="fas fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-3 col-md-6 ">
      <div class="ibox bg-warning color-white widget-stat">
         <div class="ibox-body p-2">
            <h2 class="m-b-5 font-strong text-light"><?= $program  ?></h2>
            <div class="m-b-5 text-light">Total Program</div>
            <i class="fas fa-school widget-stat-icon"></i>
            <div class="down_box">
               <a href="program.php" class="text-light">
                  <small class="">More Info</small>
                  <i class="fas fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-3 col-md-6 ">
      <div class="ibox bg-danger color-white widget-stat">
         <div class="ibox-body p-2">
            <h2 class="m-b-5 font-strong text-light"><?= $semister  ?></h2>
            <div class="m-b-5 text-light">Total Semister</div>
            <i class="fas fa-school widget-stat-icon"></i>
            <div class="down_box">
               <a href="semister.php" class="text-light">
                  <small class="">More Info</small>
                  <i class="fas fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>


<?php
include 'include/footer.php';
?>