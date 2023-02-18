     <?php

        include 'include/header.php';
        include 'include/mysql.php';

        $sql = "SELECT *FROM semister";
        $semisters = $connection->query($sql);
        ?>
     <div class="d-flex justify-content-between mb-4">
         <h4>Semister List</h4>
         <a href="add_semister.php" class="btn btn-primary">Add Semister</a>
     </div>
     <table id="datatable" class="table table-bordered table-striped">

         <thead>
             <tr>
                 <th scope="col">SL:</th>
                 <th scope="col">Semister Name</th>
                 <th scope="col">Semister Code</th>
                 <th scope="col">status</th>
                 <th scope="col">Action</th>
             </tr>
         </thead>
         <tbody>
             <?php foreach ($semisters as $key => $semister) : ?>
                 <tr>
                     <td scope="row"><?= $key + 1 ?></td>

                     <td><?= $semister['semister_name'] ?></td>
                     <td><?= $semister['semister_code'] ?></td>
                     <td><?= $semister['status'] ?></td>


                     <td>

                         <?php if ($semister['status'] == 'Active') : ?>
                             <a href="semistermaintain.php?status=Inactive&id=<?= $semister['id'] ?>" class="btn btn-sm btn-warning">Inactive</a>
                         <?php else : ?>
                             <a href="semistermaintain.php?status=Active&id=<?= $semister['id'] ?>" class="btn btn-sm btn-success">Active</a>
                         <?php endif; ?>
                         <a href="semistermaintain.php?delete=ok&id=<?= $semister['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                 </tr>

             <?php endforeach ?>
         </tbody>
     </table>

     <?php

        include 'include/footer.php';
        ?>