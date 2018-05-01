<?php

//// neww book////

include "DB.php";

$conn = dbConnect();
$sql = "INSERT INTO login
VALUES ( 'loginID'  ,'".$_POST['username']."' , '".$_POST['password']."');
SET @lastw = LAST_INSERT_ID();
INSERT INTO admin
VALUES ('adminID', '".$_POST['name']."', '".$_POST['surname']."', '2' , LAST_INSERT_ID(@lastw));";
$stmt = $conn->prepare($sql);
        $stmt->execute();






 ?>
 <?php
 switch($_SESSION['roll']) {
   case '1':
         include 'view/adminnav.php';
     break;
 case '2':
         include 'book.php';
     break;
 default:
   header ('location: ../index.php');
 break;
  }
 ?>
