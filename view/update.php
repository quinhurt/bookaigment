<?php
include "header.php";
 ?>
<div class="flex">
<?php

include '../modle/DB.php';

$conn = dbConnect();
$contentquery = "SELECT BookID, BookTitle, OriginalTitle, YearofPublication, Genre, MillionsSold, LanguageWritten, AuthorID
FROM book WHERE BookID=" .$_GET['BookID'] ;
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
?>

<div>
<?php
echo "<form action='../modle/upadteprocess.php' method='post'>";
echo "<input class='input' type='text'  value='.$BookTitle.'>";
echo "<input class='input' type='text'  value='.$OriginalTitle.'>";
echo "<input class='input' type='text'  value='.$YearofPublication.'>";
echo "<input class='input' type='text'  value='.$Genre.'>";
echo "<input class='input' type='text'  value='.$MillionSold.'>";
echo "<input class='input' type='text'  value='.$LanguageWritten.'>";

 ?>



 </div>

</form>
</div>
