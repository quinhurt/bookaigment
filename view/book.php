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

      echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['cover'] ).'"/>';

       echo "$BookTitle";
?> <br>

<a href='update.php'>Edit</a><br>
<a href='../modle/upadteprocess?BookID=<?php echo $user['BookID'];?>'>delete</a><br>
]

<?php  }?>
