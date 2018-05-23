<?php
include 'view/header.php';
include 'modle/session.php'

 ?>


 <?php
 switch($_SESSION['roll']) {
   case '1':
           include 'view/view.php';
      break;
 case '2':
         include 'view/view.php';
    break;
default:
    include 'view/home.php';
 break;
  }
?>

<?php


include "view/footer.php";

?>
