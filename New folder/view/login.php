<section class="flex-item-section">
     <article>
       <div class="sampleFormBox">
          <fieldset>
            <legend>Admin login</legend>
         <form action="control\register_process.php"  method="post">
           <label>Username:</label>
           <input type="text" name=username required>
           <label>Password:</label>
           <input type="text" name=password required>
            <input type="hidden" name="action_type" value="add"/>
           <input type="submit">
         </form>
         </fieldset>
       </div>
     </article>
   </section>
