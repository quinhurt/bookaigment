
<?php
  include 'modle/DB.php';
  //include '../../Model/dbFunctions.php';
  $table = selectData( 'book', array( 'order_by' => 'BookID' ) );
  if ( !empty( $table ) ) {
    $count = 0;
    foreach ( $table as $user ) {
      $count++;
      ?>
      <div class="bookCover">
        <figure>
          <img src="<?php echo $user['Cover']; ?>"/>
          <figcaption>
            <?php echo $user['BookTitle']; ?><br>
            <a href='../../Controller/pdoEdit.php?BookID=<?php echo $user['BookID'];?>'>Edit</a><br>
            <a href='../../Controller/pdoDelete.php?action_type=delete&BookID=<?php echo $user['BookID'];?>'>Delete</a>
          </figcaption>
        </figure>
      </div>
      <?php
    }
  }
 else{ ?>
  <h2>The bookshelf is empty.</h2
  <?php
 }
?>
