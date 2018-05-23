<?php
    include 'DB.php';
    include 'session.php';

    $login_sql = "SELECT * FROM admin WHERE username = '" . $_POST['username'] . "' AND password = '" .
                  $_POST['password'] . "';";
    $conn = dbConnect();
    $stmt = $conn->prepare($login_sql);
    $stmt->execute();
    $result = $stmt->fetch();
    if($stmt->rowcount() == 0) {
      header('Location: ../index.php');
      $_SESSION['error'] = "Login invalid please try again";



    } else {

      $_SESSION['adminID'] = $result['adminID'];
      $_SESSION['roll'] = $result['roll'];
      $_SESSION['message'] = "Login successful";
      header('Location: ../index.php?');
      $_SESSION['login'] = "login successful";
  }
?>
