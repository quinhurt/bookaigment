<section class="flex-item-section">
     <article>
       <div class="sampleFormBox">
          <fieldset class="col-xs-1" align="center">
            <legend>Admin login</legend>
         <form action="modle\loginprocess.php"  method="post">
           <label>Username:</label>
           <input type="text" name=username required>
           <label>Password:</label>
           <input type="password" name=password required>
            <input type="hidden" name="action_type" value="add"/>
           <input type="submit">
         </form>
         </fieldset>
       </div>
     </article>
   </section>
