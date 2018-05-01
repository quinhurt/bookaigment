<?php
      include "view/nav.php";

?>
<div id="myModal" class="modal">
<div class="modal-content">
    <span class="close">&times;</span>
      <?php include "view/login.php" ?>
      </div>
</div><?php
?>

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
<div >

<?php
      echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['cover'] ).'"/>';

       echo "$BookTitle";
?> <br>


</div>

<?php  }?>


</div>


</div>


<script>

var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
    modal.style.display = "block";
}


span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
