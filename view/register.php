
<?php   ////register new admin ////  ?>



<section class="flex-item-section">
     <article>
       <div class="sampleFormBox">
          <fieldset>
            <legend>Admin Registration</legend>
         <form action="modle\register.php"  method="post">
           <label>Username:</label>
           <input type="text" name=username required>
           <label>Password:</label>
           <input type="text" name=password required>
           <label>Name:</label>
           <input type="text" name=name required>
           <label>Surname:</label>
           <input type="text" name=surname required>
            <input type="hidden" name="action_type" value="add"/>
           <input type="submit">submit</input>
         </form>
         </fieldset>
       </div>
     </article>
   </section>
