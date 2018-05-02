

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
echo '<form action="../modle/updateprocess.php?BookID='.$BookID.'" method="post">';?><br><?php
echo '<input class="form-control" type="text" name="BookTitle" value="'.$BookTitle.'">';?><br><?php
echo '<input class="form-control" type="text" name="OriginalTitle"  value="'.$OriginalTitle.'">';?><br><?php
echo '<input class="form-control" type="text" name="YearofPublication"  value="'.$YearofPublication.'">';?><br><?php
echo '<input class="form-control" type="text" name="Genre"  value="'.$Genre.'">';?><br><?php
echo '<input class="form-control" type="text" name="MillionSold"  value="'.$MillionSold.'">';?><br><?php
echo '<input class="form-control" type="text" name="LanguageWritten"  value="'.$LanguageWritten.'">';?><br><?php
echo ' <input class="form-control" type="submit" name="updat">';
 ?>

 </div>


</form>
</div>
