<nav>

aetjetkz
</nav>

<?php

$contentquery = "SELECT * FROM book;";
$conn = new PDO( "mysql:host=localhost;dbname=mybooks", 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare($contentquery);
$stmt->execute();
$result = $stmt->fetchAll();

 ?>

 /*

 <?php
 $dbusername = "root";
 $dbpassword = "";
 try {
     $conn = new PDO("mysql:host=localhost;dbname=mybooks", $dbusername,$dbpassword);
     // set attributes
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 	$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
     }
 catch(PDOException $e)
 	{
 	$error_message = $e->getMessage();
 	?>
 	<h1>Database Connection Error</h1>
 	<p>There was an error connecting to the database.</p>
 	<!-- display the error message -->
 	<p>Error message: <?php echo $error_message; ?></p>
 	<?php
 	die();
 	}

 //sanitise data sent via POST and SEND




 function test_user_input($data) {
 	$data = trim($data);
 	$data= stripslashes($data);
 	$data = htmlspecialchars($data);
 	return $data;
 }

 ?>


 <?php
 /*
 include 'modle/DB.php';


 function{
   $conn =dbConnect();
   $sql = 'SELECT * FROM book';
   $statement = $conn->prepare($sql);
   $statement-> execute();
   $result = $statement-> fetchAll();
   $statement-> closeCursor();
   return $result;
  foreach ($result as $row):


 }
  ?>

 <div class="book">


   <?php

 /*

   echo $row['BookTitle'];
   echo $row['OriginalTitle'];
    ?>
 <img src="<?php //echo $row['Cover']; ?>"/>


 <?php //endforeach; ?>

  <br>
  </div>
