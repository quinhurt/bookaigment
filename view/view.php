
<nav class="nav">
  <a href="new.php" class="a">new book</a>
  <a href="register.php" class="a">new admin</a>
  <a href="../modle/logout.php" >logout</a>
</nav>
<div class="color">


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
      echo '<img class"pic" src="data:image/jpeg;base64,'.base64_encode( $row['cover'] ).'"/>';?><br><?php
       echo "$BookTitle";
?> <br>

<a href='update.php?BookID=<?php echo $BookID;?>'>Edit</a><br>
<a href='../modle/delete.php?BookID=<?php echo $BookID;?>'>delete</a><br>

</div>


<?php  }?>
</div>
</div>
