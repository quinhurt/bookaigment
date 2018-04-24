<?php
include "DB.php";



$login_sql = "SELECT * FROM login WHERE username = '" . $_POST['username'] . "' AND password = '" .
              $_POST['password'] . "';";
$conn = dbConnect();
$stmt = $conn->prepare($login_sql);
$stmt->execute();
$result = $stmt->fetch();
if($stmt->rowcount() == 0) {
  header('Location:../index.php');
  $_SESSION['error'] = "Login invalid please try again";

      } else {
          header('Location: ../view/book.php');
    }
 ?>
