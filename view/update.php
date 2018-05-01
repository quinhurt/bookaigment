

<?php  ////update a book /// ?>

<?php
include "header.php";
 ?>
<div class="flex">
<?php

include '../modle/DB.php';

$conn = dbConnect();
$contentquery = "SELECT BookID, BookTitle, OriginalTitle, YearofPublication, Genre, MillionsSold, LanguageWritten, AuthorID
FROM book WHERE BookID=" .$_GET['BookID'];
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
echo '<form action="../modle/updateprocess.php?BookID='.$BookID.'" method="post">';
echo '<input class="input" type="text" name="BookTitle" value="'.$BookTitle.'">';
echo '<input class="input" type="text" name="OriginalTitle"  value="'.$OriginalTitle.'">';
echo '<input class="input" type="text" name="YearofPublication"  value="'.$YearofPublication.'">';
echo '<input class="input" type="text" name="Genre"  value="'.$Genre.'">';
echo '<input class="input" type="text" name="MillionSold"  value="'.$MillionSold.'">';
echo '<input class="input" type="text" name="LanguageWritten"  value="'.$LanguageWritten.'">';
echo ' <input type="submit" name="updat">';
 ?>
 </div>




</form>
</div>
