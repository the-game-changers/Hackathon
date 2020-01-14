<?php
include("connection/dbconn.php");
include("template/header.html");

$id=$_GET["a"];
$query="SELECT * FROM `topstories` WHERE ts_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
?>
<div class="w3-card-4 " style="margin-left:17.7%;margin-right:17.7%;margin-top:1%;">
<img  style="height:50%;width:100%" class="w3-image" src="st-image/<?php echo $row['ts_image'] ?>" />

<div class="w3-container w3-center"><h2><?php echo $row['ts_comment']?></h2></div>
<div class="w3-container"><p><h6><?php echo $row['ts_description']?></h6></p></div>



</div>