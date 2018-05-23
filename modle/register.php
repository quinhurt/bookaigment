<?php

//// neww book////

include "DB.php";

$conn = dbConnect();




$username = !empty($_POST['username'])? test_user_input(($_POST['username'])): null;
$password = !empty($_POST['password'])? test_user_input(($_POST['password'])): null;
$name = !empty($_POST['name']) ? test_user_input(($_POST['name'])): null;
$surname = !empty($_POST['surname'])? test_user_input(($_POST['surname'])): null;




$password2 = password_hash('$password', PASSWORD_DEFAULT);

$sql = "INSERT INTO admin
    VALUES ('adminID', '$name', 'surename', 'username' , '$password2' , '2' );";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
header('location: ../view/main.php');

try
{
  if($_REQUEST['action_type'] == 'add'){
      $data = array(
          'username' => $username,
          'password' => $password,
          'name' => $name,
    'surname' => $surname,
      );
  $table="userstaff";
  //function call
  insertData($table,$data);
  header('location:../index.php');
  }
}
  catch(PDOException $e)
  {
    echo "Error: ".$e -> getMessage();
    die();
  }

?>



 ?>
