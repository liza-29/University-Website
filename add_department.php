     <?php

        include 'include/header.php';
        include 'include/mysql.php';

        $sql = "SELECT *FROM faculty";
        $faculties = $connection->query($sql);

        ?>

     <form action="./departmentmaintain.php" method="POST">
         <legend>Add New Department</legend>
         <div class="row row-cols-4">
             <div class="mb-3">
                 <label for="">New Department</label>
                 <input name="name" type="text" class="form-control">


             </div>

             <div class="mb-3">
                 <label for="">Faculty</label>
                 <select name="faculty_id" class="form-select">
                     <option value="">Select</option>
                     <?php foreach ($faculties as $faculty) : ?>
                         <option value="<?= $faculty['id'] ?>"><?= $faculty['faculty_name'] ?></option>
                     <?php endforeach; ?>
                 </select>

             </div>
         </div>

         <button name="add_department" class="btn btn-primary">submit</button>

     </form>

     <?php

        include 'include/footer.php';
        ?>