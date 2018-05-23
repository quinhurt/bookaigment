
<nav class="nav">
  <div class="float">
    <a href="view/new.php" class="btn btn-primary" >New Book</a>
    <a href="view/register.php"  class="btn btn-primary" >New Admin</a>
    <a  href="modle/logout.php"  class="btn btn-primary" >Logout</a>
  </div>
</nav>

<div class="color">


<div class="flex">
<?php
include 'modle/DB.php';
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
<a href='../modle/delete.php?BookID=<?php echo $BookID;?>'>Delete</a><br>

</div>


<?php  }?>
</div>
</div>
