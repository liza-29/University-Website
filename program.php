     <?php

        include 'include/header.php';
        include 'include/mysql.php';

        $sql = "SELECT program.*, department.department_name FROM program INNER JOIN department ON program.department_id =department.id ";
        $programs = $connection->query($sql);
        ?>
     <div class="d-flex justify-content-between mb-4">
         <h4>Program List</h4>
         <a href="add_program.php" class="btn btn-primary">Add Program</a>
     </div>
     <table id="datatable" class="table table-bordered table-striped">

         <thead>
             <tr>
                 <th scope="col">SL:</th>


                 <th scope="col">Program Name</th>
                 <th scope="col">Program Code</th>
                 <th scope="col">Department Id</th>

                 <th scope="col">Action</th>
             </tr>
         </thead>
         <tbody>
             <?php foreach ($programs as $key => $program) : ?>
                 <tr>
                     <td scope="row"><?= $key + 1 ?></td>
                     <td><?= $program['program_name'] ?></td>

                     <td><?= $program['program_code'] ?></td>
                     <td><?= $program['department_name'] ?></td>
                     <td>


                         <a href="ProgramMaintain.php?delete=ok&id=<?= $program['id'] ?>" class="btn btn-sm btn-danger">Delete</a>


                     </td>
                 </tr>

             <?php endforeach ?>
         </tbody>
     </table>

     <?php

        include 'include/footer.php';
        ?>