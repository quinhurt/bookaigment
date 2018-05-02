
<?php   ////register new admin ////

include "header.php";
 ?>



<section class="flex-item-section">
     <article>
       <div class="flex">
          <fieldset>
            <legend>Admin Registration</legend>
         <form action="../modle/register.php"  method="post">
           <label>Username:</label>
           <input class="form-control" type="text" name=username required>
           <label>Password:</label>
           <input class="form-control" type="text" name=password required>
           <label>Name:</label>
           <input class="form-control" type="text" name=name required>
           <label>Surname:</label>
           <input class="form-control" type="text" name=surname required>
            <input type="hidden" name="action_type" value="add"/>
           <input type="submit">submit</input>
         </form>
         </fieldset>
       </div>
     </article>
   </section>
