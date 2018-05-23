 <?php

///// new book and author ///

include "header.php";
  ?>



<div class="color">




<div class="block">


<form  action="../modle/newbook.php" method="post"  enctype="multipart/form-data">
  <div class="flex">
  <input  class="form-control" type="text" placeholder="booktitle" name="booktitle" required > <br>
  <input class="form-control" type="text" placeholder="originalTitle" name="originalTitle" required > <br>
  <input class="form-control" type="text" placeholder="genre" name="genre" > <br>
  <input class="form-control" type="text" placeholder="languageWritten" name="languageWritten" required > <br>
  <input class="form-control" type="text" placeholder="millonsSold" name="millonsSold" required > <br>
  <input class="form-control"  type="text" placeholder="yearofpublication" name="yearofpublication" required > <br>
  <input class="form-control" type="file" placeholder="bookcover" name="bookcover" required > <br>
  </div>
  <br>
<div class="flex">
  <input class="form-control" type="text" placeholder="plot" name="plot" required > <br>
  <input class="form-control" type="text" placeholder="plotsource" name="plotsource" required > <br>
  <input class="form-control" type="text" placeholder="bookranking" name="bookranking"  required> <br>
  </div>
  <br>
  <div class="flex">
  <input class="form-control" type="text" placeholder="Name" name="Name" required > <br>
  <input class="form-control"  type="text" placeholder="Surname" name="Surname" required > <br>
  <input class="form-control" type="text" placeholder="nationality" name="nationality" required > <br>
  <input class="form-control" type="text" placeholder="birthYear" name="birthYear" required > <br>
  <input class="form-control" type="text" placeholder="Deathyear" name="Deathyear" required > <br>
  </div>
  <br>
  <input type="submit" name="submit" placeholder="submit" >
</form>

</div>
</div>
