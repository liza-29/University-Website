     <?php

        include 'include/header.php';
        include 'include/mysql.php';

        $sql = "SELECT department.*, faculty.faculty_name FROM department INNER JOIN faculty ON department.faculty_id=faculty.id";
        $departments = $connection->query($sql);
        ?>
     <div class="d-flex justify-content-between mb-4">
         <h4>Department List</h4>
         <a href="add_department.php" class="btn btn-primary">Add Department</a>
     </div>
     <table id="datatable" class="table table-bordered table-striped">

         <thead>
             <tr>
                 <th scope="col">SL:</th>


                 <th scope="col">Department Name</th>
                 <th scope="col">Faculty Name</th>

                 <th scope="col">Action</th>
             </tr>
         </thead>
         <tbody>
             <?php foreach ($departments as $key => $department) : ?>
                 <tr>
                     <td scope="row"><?= $key + 1 ?></td>
                     <td><?= $department['department_name'] ?></td>

                     <td><?= $department['faculty_name'] ?></td>

                     <td>


                         <a href="departmentmaintain.php?delete=ok&id=<?= $department['id'] ?>" class="btn btn-sm btn-danger">Delete</a>


                     </td>
                 </tr>

             <?php endforeach ?>
         </tbody>
     </table>

     <?php

        include 'include/footer.php';
        ?>