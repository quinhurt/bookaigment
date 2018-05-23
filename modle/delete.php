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
