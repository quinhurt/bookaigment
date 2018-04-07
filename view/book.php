
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
         <img src="<?php echo $row['Cover']; ?>"/>
         <?php
       echo "$BookTitle";
?> <br>

<a href='../modle/updateprocess?BookID=<?php echo $user['BookID'];?>'>Edit</a><br>
<a href='../modle/upadteprocess?BookID=<?php echo $user['BookID'];?>'>delete</a><br>
<a href="../modle/updateprocess.php">aa</a><br>

<?php  }?>
