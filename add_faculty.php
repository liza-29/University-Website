     <?php

        include 'include/header.php';
        ?>

     <form action="./facultymaintain.php" method="POST">
         <legend>Add New Faculty</legend>
         <div class="row row-cols-4">
             <div class="mb-4">
                 <label for="">New Faculty</label>
                 <input name="name" type="text" class="form-control">
             </div>
         </div>
         <button name="add_faculty" class="btn btn-primary">submit</button>

     </form>

     <?php

        include 'include/footer.php';
        ?>