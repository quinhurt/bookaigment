<?php
include "DB.php";

$conn = dbConnect();
$sql = " DELETE  FROM book WHERE BookID=" .$_GET['BookID'] ;
$stmt = $conn->prepare($sql);
$stmt->execute();
echo "this book has been deleted";


 ?>
