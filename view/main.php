<?php include "header.php";

?>

<nav class="nav">
  <a href="new.php" class="a">new book</a>
  <a href="register.php" class="a">new admin</a>
  <a >logout</a>
</nav>

<div class="flex">

<?php
include '../modle/DB.php';
$conn = dbConnect();
$contentquery = "SELECT BookID, BookTitle, cover from book ";
$stmt = $conn->prepare($contentquery);
$stmt->execute();
while ($row = $stmt->fetch())
   {
       $BookID = $row['BookID'];
       $BookTitle = $row['BookTitle'];
       $cover  =$row['cover'];
?>
<div >

<?php
      echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['cover'] ).'"/>';

       echo "$BookTitle";
?> <br>

<a href='update.php?BookID=<?php echo $BookID;?>'>Edit</a><br>
<a href='../modle/delete.php?BookID=<?php echo $BookID;?>'>delete</a><br>
</div>

<?php  }?>

</div>
<?php
include "footer.php";
 ?>




 switch($_SESSION['roll']) {
   case '1':
         include 'view/adminnav.php';
     break;
 case '2':
         include 'book.php';
     break;
 //default:
   //header ('location: ../index.php');
 break;
  }
