     <?php

        include 'include/header.php';
        ?>

     <form action="./semistermaintain.php" method="POST">
         <legend>Add New Semister</legend>
         <div class="row row-cols-4">
             <div class="mb-4">
                 <label for="">New Semester</label>
                 <input name="semister_name" type="text" class="form-control">
             </div>
             <div class="mb-4">
                 <label for="">Semester Code</label>
                 <input name="semister_code" type="text" class="form-control">
             </div>
             <div class="mb-4">
                 <label for="">Status</label>
                 <select name="status" id="" class="form-select">
                     <option value="">Select Status</option>
                     <option value="Active">Active</option>
                     <option value="Inactive">Inactive</option>
                 </select>
             </div>
         </div>
         <button name="add_semister" class="btn btn-primary">submit</button>

     </form>

     <?php

        include 'include/footer.php';
        ?>