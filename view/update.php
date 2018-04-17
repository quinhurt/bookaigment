<?php

include '../modle/DB.php';

$conn = dbConnect();
$contentquery = "SELECT BookID, BookTitle, OriginalTitle, YearofPublication, Genre, MillionsSold, LanguageWritten, AuthorID FROM book ";
$stmt = $conn->prepare($contentquery);
$stmt->execute();
while ($row = $stmt->fetch()){

$BookID  = $row['BookID'];
$BookTitle = $row['BookTitle'];
$OriginalTitle = $row['OriginalTitle'];
$YearofPublication = $row['YearofPublication'];
$Genre = $row['Genre'];
$MillionSold = $row['MillionsSold'];
$LanguageWritten = $row['LanguageWritten'];
$AuthorID = $row['AuthorID'];

}

echo "<form action='../modle/upadteprocess.php' method='post'>";
echo "<input type='text'  value='.$BookTitle.'>";
echo "<input type='text'  value='.$OriginalTitle.'>";
echo "<input type='text'  value='.$YearofPublication.'>";
echo "<input type='text'  value='.$Genre.'>";
echo "<input type='text'  value='.$MillionSold.'>";
echo "<input type='text'  value='.$LanguageWritten.'>";


 ?>


</form>
