     <?php

        include 'include/header.php';
        include 'include/mysql.php';

        $sql = "SELECT *FROM faculty";
        $faculties = $connection->query($sql);
        ?>
     <div class="d-flex justify-content-between mb-4">
         <h4>Faculty List</h4>
         <a href="add_faculty.php" class="btn btn-primary">Add Faculty</a>
     </div>
     <table id="datatable" class="table table-bordered table-striped">

         <thead>
             <tr>
                 <th scope="col">SL:</th>

                 <th scope="col">Faculty Name</th>

                 <th scope="col">Action</th>
             </tr>
         </thead>
         <tbody>
             <?php foreach ($faculties as $key => $faculty) : ?>
                 <tr>
                     <td scope="row"><?= $key + 1 ?></td>

                     <td><?= $faculty['faculty_name'] ?></td>


                     <td>


                         <a href="facultymaintain.php?delete=ok&id=<?= $faculty['id'] ?>" class="btn btn-sm btn-danger">Delete</a>


                     </td>
                 </tr>

             <?php endforeach ?>
         </tbody>
     </table>

     <?php

        include 'include/footer.php';
        ?>