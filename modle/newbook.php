<?php

///new book////

include "DB.php";
/*

}

*/







if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["bookcover"]["tmp_name"]);
    if($check !== false){
        $bookcover = $_FILES['bookcover']['tmp_name'];
        $bookcoverContent = addslashes(file_get_contents($bookcover));


$conn = DBconnect();
$sql = "INSERT INTO author
VALUES ( 'authorID', '".$_POST['Name']."', '".$_POST['Surname']."', '".$_POST['nationality']."', '".$_POST['birthYear']."', '".$_POST['Deathyear']."' );
SET @lastw = LAST_INSERT_ID();
INSERT INTO book
VALUES ('bookID','".$_POST['booktitle']."', '".$_POST['originalTitle']."', '".$_POST['yearofpublication']."', '".$_POST['genre']."',
  '".$_POST['millonsSold']."', '".$_POST['languageWritten']."', '$bookcoverContent', LAST_INSERT_ID(@lastw));
SET @lastb = LAST_INSERT_ID();
INSERT INTO bookranking
VALUES ('bookrankingID', '".$_POST['bookranking']."', LAST_INSERT_ID(@lastb));
INSERT INTO bookplot
VALUES (`BookPlotID`, '".$_POST['plot']."', '".$_POST['plotsource']."', LAST_INSERT_ID(@lastb));";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':Name', $Name);
$stmt->bindParam(':Surname', $Surname);
$stmt->bindParam(':nationality', $nationality);
$stmt->bindParam(':birthYear', $birthYear);
$stmt->bindParam(':Deathyear', $Deathyear);
$stmt->bindParam(':BookTitle', $Booktitle);
$stmt->bindParam(':originalTitle', $orginalTitle);
$stmt->bindParam(':yearofpublication', $yearofpublication);
$stmt->bindParam(':genre', $genre);
$stmt->bindParam(':millonsSold', $millonSold);
$stmt->bindParam(':bookranking', $bookranking);
$stmt->bindParam(':plot', $plot);
$stmt->bindParam(':plotsource', $plotsource);
        $stmt->execute();
header('location: ../view/main.php');

}
}

 ?>
