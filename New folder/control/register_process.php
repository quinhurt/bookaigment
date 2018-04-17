
<?php

include_once("../Model/DB.php");
include_once("../Model/dbFunctions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	//input sanitation
	$username = !empty($_POST['username'])? test_user_input(($_POST['username'])): null;
	$password2 = !empty($_POST['password'])? test_user_input(($_POST['password'])): null;
	$name = !empty($_POST['name']) ? test_user_input(($_POST['name'])): null;
	$surname = !empty($_POST['surname'])? test_user_input(($_POST['surname'])): null;
	$role = !empty($_POST['role']) ? test_user_input(($_POST['role'])): null;

	// PASSWORD_HASH
	$password= password_hash($password2, PASSWORD_DEFAULT);


	try
	{
		if($_REQUEST['action_type'] == 'add'){
        $data = array(
            'username' => $username,
            'password' => $password,
            'name' => $name,
			'surname' => $surname,
            'role' => $role
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
}
?>
