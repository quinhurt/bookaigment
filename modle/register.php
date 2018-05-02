<?php

//// neww book////

include "DB.php";

$conn = dbConnect();
$password = password_hash(':password', PASSWORD_DEFAULT);
$sql = "INSERT INTO admin
VALUES ('adminID', '".$_POST['name']."', '".$_POST['surname']."', '".$_POST['username']."' , '".$_POST['password']."' , '2' );";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':surname', $surename );
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

 ?>
