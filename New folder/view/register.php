<section class="flex-item-section">
     <article>
       <div class="sampleFormBox">
          <fieldset>
            <legend>Admin Registration</legend>
         <form action="control\register_process.php"  method="post">
           <label>Username:</label>
           <input type="text" name=username required>
           <label>Password:</label>
           <input type="text" name=password required>
           <label>Name:</label>
           <input type="text" name=name required>
           <label>Surname:</label>
           <input type="text" name=surname required>
           <label>Role:</label>
           <input type="text" name=role required>
            <input type="hidden" name="action_type" value="add"/>
           <input type="submit">
         </form>
         </fieldset>
       </div>
     </article>
   </section>
