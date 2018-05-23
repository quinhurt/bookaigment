
<?php  ////   display for a admin////   ?>


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
<div>

<?php
      echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['cover'] ).'"/>';

       echo "$BookTitle";
?> <br>

<a href='update.php?BookID=<?php echo $BookID;?>'>Edit</a><br>


<a href='../modle/delete.php?BookID=<?php echo $BookID;?>'>Delete</a><br>
</div>

<?php  }?>

</div>
