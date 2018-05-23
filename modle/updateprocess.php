<?php


//// updateing book////

include "DB.php";

$conn = dbConnect();
$sql = "UPDATE book SET BookTitle ='".$_POST['BookTitle']."',
 OriginalTitle = '".$_POST['OriginalTitle']."',  YearofPublication = '".$_POST['YearofPublication']."',
Genre = '".$_POST['Genre']."', MillionsSold = '".$_POST['MillionSold']."', LanguageWritten = '".$_POST['LanguageWritten']."'
 WHERE BookID = ". $_GET['BookID'];
 $stmt = $conn->prepare($sql);
 $stmt->execute();
header('location: ../index.php');

 echo "done";
 ?>
