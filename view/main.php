<?php include "header.php";
include 'DB.php';
?>

<?php

switch($_SESSION['roll']) {
  case '2':
        include 'view.php';
    break;
default:
      header ('location: ../index.php');
    break;
 }
 ?>




<?php
include "footer.php";
 ?>
