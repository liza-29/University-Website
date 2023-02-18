     <?php

        include 'include/header.php';
        include 'include/mysql.php';

        $sql = "SELECT *FROM department";
        $departments = $connection->query($sql);

        ?>

     <form action="ProgramMaintain.php" method="POST">
         <legend>Add New Program</legend>
         <div class="row row-cols-4">
             <div class="mb-3">
                 <label for="">Program Name</label>
                 <input name="program_Name" type="text" class="form-control">


             </div>
             <div class="mb-3">
                 <label for="">Program Code</label>
                 <input name="program_code" type="text" class="form-control">


             </div>

             <div class="mb-3">
                 <label for="">Select Department</label>
                 <select name="department_id" class="form-select">
                     <option value="">Select</option>
                     <?php foreach ($departments as $department) : ?>
                         <option value="<?= $department['id'] ?>"><?= $department['department_name'] ?></option>
                     <?php endforeach; ?>
                 </select>

             </div>
         </div>

         <button name="add_program" class="btn btn-primary">submit</button>

     </form>

     <?php

        include 'include/footer.php';
        ?>