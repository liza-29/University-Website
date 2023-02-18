<?php

include 'include/header.php';
include 'include/mysql.php';

$sql = "SELECT *FROM admin";
$admins = $connection->query($sql);
?>
<div class="d-flex justify-content-between mb-4">
    <h4>Admin List</h4>
    <a href="add_admin.php" class="btn btn-primary">Add Admin</a>
</div>
<table id="datatable" class="table table-bordered table-striped">

    <thead>
        <tr>
            <th scope="col">Sl. No.</th>
            <th scope="col">Admin Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($admins as $key => $admin) : ?>
            <tr>
                <td scope="row"><?= $key + 1 ?></td>
                <td><?= $admin['name'] ?></td>
                <td><?= $admin['email'] ?></td>
                <td>
                    <a href="adminMaintain.php?delete=ok&id=<?= $admin['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>

<?php

include 'include/footer.php';
?>