
<?php
function get_products()
{
  global $conn;
  //query the database to select all data from the book table
  $sql = 'SELECT * FROM book';
  //use a prepared statement to enhance security
  $statement = $conn->prepare($sql);
  $statement-> execute();
  $result = $statement-> fetchAll();
  $statement-> closeCursor();
  return $result;
}
 ?>

<div class="book">


  <?php
  $result = get_products();

 foreach ($result as $row):
  echo $row['BookTitle'], $row['cover'];
 // echo $row['OriginalTitle'];
//  echo ;
endforeach;
 ?><br>
 </div>
<?php
//echo "<button type="button" name="update">update</button>";
 ?>
