<?php

include 'include/header.php';
include 'include/mysql.php';

$sql = "SELECT *FROM department";
$departments = $connection->query($sql);

?>

<form action="adminMaintain.php" method="POST">
    <legend>Add New Admin</legend>
    <div class="row row-cols-4">
        <div class="mb-3">
            <label for="">Admin Name</label>
            <input name="name" type="text" class="form-control">


        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input name="email" type="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Password</label>
            <input name="password" type="password" class="form-control">
        </div>
    </div>

    <button name="add_admin" class="btn btn-primary">submit</button>

</form>

<?php

include 'include/footer.php';
?>