<?php
include './include/mysql.php';
$programs = "select *from program";
$programs = $connection->query($programs);

$semesters = "select *from semister where status='Active'";
$semesters = $connection->query($semesters);

?>

<?php include "./front/inc/header.php"; ?>

    <section id="admission" class="my-5">
        <div class="container">
            <form action="admissionmaintain.php" method="POST" enctype="multipart/form-data">
                <legend>Admission Form</legend>
                <p>Please fill up the admission form carefully. </p>
                <hr>
                <div class="row row-cols-4 g-3">
                    <div>
                        <label for="">Select Program <span class="text-danger">*</span></label>
                        <select required name="program" class="form-select">
                            <option value="">Select Program</option>
                            <?php foreach ($programs as $program) : ?>
                                <option value="<?= $program['id'] ?>"><?= $program['program_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div>
                        <label for="">Select Semester <span class="text-danger">*</span></label>
                        <select required name="semester" class="form-select">
                            <option value="">Select Semester</option>
                            <?php foreach ($semesters as $semester) :  ?>
                                <option value="<?= $semester['id'] ?>"><?= $semester['semister_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <legend class="mt-4">Personal Information</legend>
                <div class="row row-cols-4 g-3">
                    <div>
                        <label for="">Applicant Full Name <span class="text-danger">*</span></label>
                        <input required type="text" name="full_name" class="form-control">
                    </div>

                    <div>
                        <label for="">Father's Name <span class="text-danger">*</span></label>
                        <input required type="text" name="father_name" class="form-control">
                    </div>

                    <div>
                        <label for="">Mothers's Name <span class="text-danger">*</span></label>
                        <input required type="text" name="mother_name" class="form-control">
                    </div>
                    <div>
                        <label for="">Gender</label>
                        <select required name="gender" class="form-select">
                            <option value="">Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div>
                        <label for="">Contact Number <span class="text-danger">*</span></label>
                        <input required type="text" name="contact" class="form-control">
                    </div>

                    <div>
                        <label for="">Date of Birth <span class="text-danger">*</span></label>
                        <input required name="date_of_birth" type="date" class="form-control">
                    </div>

                    <div>
                        <label for="">Email Address</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div>
                        <label for="">Blood Group</label>
                        <select  name="blood" class="form-select">
                            <option value="">Select Blood Group</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                        </select>
                    </div>

                    <div>
                        <label for="">Photo <span class="text-danger">*</span></label>
                        <input required type="file" name="photo" class="form-control">
                    </div>
                </div>

                <legend class="mt-4">Educational Information</legend>
                <div class="row row-cols-5 g-3">
                    <div>
                        <label for="">SSC / Equavalant <span class="text-danger">*</span></label>
                        <select required name="ssc_name" class="form-select">
                            <option value="">Select</option>
                            <option>SSC</option>
                            <option>SSC Equavalant</option>
                            <option>Dakhil</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Board <span class="text-danger">*</span></label>
                        <select required name="ssc_board" class="form-select">
                            <option value="">Select</option>
                            <option value="">Select</option>
                            <option>Barisal</option>
                            <option>Chittagong</option>
                            <option>Comilla</option>
                            <option>Dhaka</option>
                            <option>Dinajpur</option>
                            <option>Jessore</option>
                            <option>Mymensingh</option>
                            <option>Rajshahi</option>
                            <option>Sylhet</option>
                            <option>Madrasah</option>
                            <option>BTEB</option>
                            <option>DIBS (Dhaka)</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Group / Department <span class="text-danger">*</span></label>
                        <input required type="text" name="ssc_dept" class="form-control">
                    </div>
                    <div>
                        <label for="">Passing Year <span class="text-danger">*</span></label>
                        <input required type="text" name="ssc_passing_year" class="form-control">
                    </div>

                    <div>
                        <label for="">Result <span class="text-danger">*</span></label>
                        <input required type="text" name="ssc_result" class="form-control">
                    </div>
                    <div>
                        <label for="">HSC / Equavalant <span class="text-danger">*</span></label>
                        <select required name="hsc_name" class="form-select">
                            <option value="">Select</option>
                            <option>HSC</option>
                            <option>HSC Equavalant</option>
                            <option>Alim</option>
                            <option>Diploma</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Board <span class="text-danger">*</span></label>
                        <select required name="hsc_board" class="form-select">
                            <option value="">Select</option>
                            <option>Barisal</option>
                            <option>Chittagong</option>
                            <option>Comilla</option>
                            <option>Dhaka</option>
                            <option>Dinajpur</option>
                            <option>Jessore</option>
                            <option>Mymensingh</option>
                            <option>Rajshahi</option>
                            <option>Sylhet</option>
                            <option>Madrasah</option>
                            <option>BTEB</option>
                            <option>DIBS (Dhaka)</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Group / Department <span class="text-danger">*</span></label>
                        <input required type="text" name="hsc_dept" class="form-control">
                    </div>
                    <div>
                        <label for="">Passing Year <span class="text-danger">*</span></label>
                        <input required type="text" name="hsc_year" class="form-control">
                    </div>

                    <div>
                        <label for="">Result <span class="text-danger">*</span></label>
                        <input required type="text" name="hsc_result" class="form-control">
                    </div>
                </div>
                <button name="admission" class="mt-3 btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <?php include "./front/inc/footer.php"; ?>