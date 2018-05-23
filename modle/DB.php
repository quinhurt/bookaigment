


<?php


function dbConnect() {
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mybooks2";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
}


function test_user_input($input_string) {
    $input_string = trim($input_string);
    $input_string = htmlspecialchars($input_string, ENT_IGNORE, 'utf-8');
    $input_string = strip_tags($input_string);
    $input_string = stripslashes($input_string);
    return $input_string;

}

?>
