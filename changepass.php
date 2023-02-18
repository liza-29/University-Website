<?php

include 'include/header.php';
?>

<form action="changePasswordMaintain.php" method="POST">
    <legend>Change Password</legend>
    <div class="row row-cols-4">
        <div class="mb-3">
            <label for="">Old Password</label>
            <input required name="old_password" type="password" class="form-control">
            <small class="text-danger"><?= $_GET['olderror'] ?? '' ?></small>
        </div>
        <div class="mb-3">
            <label for="">New Password</label>
            <input required name="new_password" type="password" class="form-control">
            <small class="text-danger"><?= $_GET['newerror'] ?? '' ?></small>
        </div>
        <div class="mb-3">
            <label for="">Confirm New Password</label>
            <input required name="confirm_password" type="password" class="form-control">
        </div>
    </div>
    <button name="change_password" class="btn btn-primary">submit</button>

</form>

<?php

include 'include/footer.php';
?>