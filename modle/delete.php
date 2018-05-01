<?php


///  deleting book with get ////


include "DB.php";

$conn = dbConnect();
$sql = " DELETE  FROM book WHERE BookID=" .$_GET['BookID'] ;
$stmt = $conn->prepare($sql);
$stmt->execute();
header('location: ../view/main.php');
echo "this book has been deleted";


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
