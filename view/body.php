
<?php
function get_products()
{
  global $conn;
  $sql = 'SELECT * FROM book';
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
  echo $row['BookTitle'];
  echo $row['OriginalTitle'];
   ?>
<img src="<?php echo $row['Cover']; ?>"/>

 //
//  echo ;
<?php endforeach; ?>

 <br>
 </div>
