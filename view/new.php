 <?php

///// new book and author ///

include "header.php";
  ?>
<div class="color">


<form  action="../modle/newbook.php" method="post"  enctype="multipart/form-data">
  <div class="flex">
  <input type="text" placeholder="booktitle" name="booktitle" required >
  <input type="text" placeholder="originalTitle" name="originalTitle" required >
  <input type="text" placeholder="genre" name="genre" >
  <input type="text" placeholder="languageWritten" name="languageWritten" required >
  <input type="text" placeholder="millonsSold" name="millonsSold" required >
  <input type="text" placeholder="yearofpublication" name="yearofpublication" required >
  <input type="file" placeholder="bookcover" name="bookcover" required >
  </div>
  <br>
<div class="flex">
  <input type="text" placeholder="plot" name="plot" required >
  <input type="text" placeholder="plotsource" name="plotsource" required >
  <input type="text" placeholder="bookranking" name="bookranking"  required>
  </div>
  <br>
  <div class="flex">
  <input type="text" placeholder="Name" name="Name" required >
  <input type="text" placeholder="Surname" name="Surname" required >
  <input type="text" placeholder="nationality" name="nationality" required >
  <input type="text" placeholder="birthYear" name="birthYear" required >
  <input type="text" placeholder="Deathyear" name="Deathyear" required >
  </div>
  <input type="submit" name="submit" placeholder="submit" >
</form>
</div>
