<?php

include 'include/header.php';
include 'include/mysql.php';

$id = $_GET['id'];
$student = "select student_information.*, semister.semister_name, program.program_name from student_information inner join program on program.id = student_information.Program inner join semister on semister.id = student_information.Semester where student_information.id=$id";

$student = $connection->query($student);
$student = mysqli_fetch_array($student);


?>
<button type="button" id="printBtn" class="btn btn-info">Print</button>
<div id="printArea">

    <div class="d-flex justify-content-between mb-4">
        <h4>Student Details Information</h4>
    </div>


    <table class="table ">
        <tr>
            <td width="200">Admission Status</td>
            <td width="30" class="text-center">:</td>
            <td style="font-weight: bold;">
                <?php if ($student['status'] == 0) : ?>
                    <span class="badge bg-warning text-dark">Pending</span>
                <?php elseif ($student['status'] == 1) : ?>
                    <span class="badge bg-success">Approved</span>
                <?php elseif ($student['status'] == 2) : ?>
                    <span class="badge bg-danger">Rejected</span>
                <?php elseif ($student['status'] == 3) : ?>
                    <span class="badge bg-secondary">Admission Canceled</span>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td width="200">Photo</td>
            <td width="30" class="text-center">:</td>
            <td style="font-weight: bold;">
                <img src="<?= $student['photo'] ?>" width="120" alt="Not Uploaded">
            </td>
        </tr>
        <tr>
            <td width="200">Roll No</td>
            <td width="30" class="text-center">:</td>
            <td style="font-weight: bold;"><?= $student['roll'] ?></td>
        </tr>
        <tr>
            <td width="200">Semester</td>
            <td width="30" class="text-center">:</td>
            <td style="font-weight: bold;"><?= $student['semister_name'] ?></td>
        </tr>
        <tr>
            <td width="200">Program</td>
            <td width="30" class="text-center">:</td>
            <td style="font-weight: bold;"><?= $student['program_name'] ?></td>
        </tr>
        <tr>
            <td width="200">Full Name</td>
            <td width="30" class="text-center">:</td>
            <td style="font-weight: bold;"><?= $student['Full_name'] ?></td>
        </tr>
        <tr>
            <td width="200">Father's Name</td>
            <td width="30" class="text-center">:</td>
            <td style="font-weight: bold;"><?= $student['Father_name'] ?></td>
        </tr>
        <tr>
            <td width="200">Mother's Name</td>
            <td width="30" class="text-center">:</td>
            <td style="font-weight: bold;"><?= $student['Mother_name'] ?></td>
        </tr>
        <tr>
            <td width="200">Gender</td>
            <td width="30" class="text-center">:</td>
            <td style="font-weight: bold;"><?= $student['gender'] ?></td>
        </tr>
        <tr>
            <td width="200">Contact Number</td>
            <td width="30" class="text-center">:</td>
            <td style="font-weight: bold;"><?= $student['Contact'] ?></td>
        </tr>
        <tr>
            <td width="200">Date of Birth</td>
            <td width="30" class="text-center">:</td>
            <td style="font-weight: bold;"><?= $student['Date_Of_Birth'] ?></td>
        </tr>
        <tr>
            <td width="200">Email Address</td>
            <td width="30" class="text-center">:</td>
            <td style="font-weight: bold;"><?= $student['Email'] ?></td>
        </tr>
        <tr>
            <td width="200">Blood Group</td>
            <td width="30" class="text-center">:</td>
            <td style="font-weight: bold;"><?= $student['Blood'] ?></td>
        </tr>
        <tr>
            <td width="200">Educational Information</td>
            <td width="30" class="text-center">:</td>
            <td>
                <table class="table table-bordered">
                    <tr>
                        <td style="font-weight: bold;">SL</td>
                        <td style="font-weight: bold;">Exam</td>
                        <td style="font-weight: bold;">Board</td>
                        <td style="font-weight: bold;">Group / Department</td>
                        <td style="font-weight: bold;">Passing Year</td>
                        <td style="font-weight: bold;">Result</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td><?= $student['SSC_name']  ?></td>
                        <td><?= $student['ssc_board']  ?></td>
                        <td><?= $student['SSC_dept']  ?></td>
                        <td><?= $student['SSC_passing_year']  ?></td>
                        <td><?= $student['SSC_result']  ?></td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td><?= $student['HSC_name']  ?></td>
                        <td><?= $student['hsc_board']  ?></td>
                        <td><?= $student['hsc_dept']  ?></td>
                        <td><?= $student['hsc_year']  ?></td>
                        <td><?= $student['hsc_result']  ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

<?php if ($student['status'] == 0) : ?>
    <a href="admissionmaintain.php?approve=ok&id=<?= $student['ID'] ?>" class="btn btn-sm btn-success">Approve</a>
    <a href="admissionmaintain.php?reject=ok&id=<?= $student['ID'] ?>" class="btn btn-sm btn-warning">Reject</a>
<?php elseif ($student['status'] == 1) : ?>
    <a href="admissionmaintain.php?cancel=ok&id=<?= $student['ID'] ?>" class="btn btn-sm btn-warning">Admission Cancel</a>
<?php endif; ?>
<?php

include 'include/footer.php';
?>