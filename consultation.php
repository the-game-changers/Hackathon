<?php
include("connection/dbconn.php");
include("template/header.html");

$id=$_GET["a"];
$query="SELECT * FROM `consultation` WHERE con_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
?>


<div class="w3-card-4 w3-text-black w3-white " style="margin-left:17.7%;margin-right:17.7%;margin-bottom:1%;margin-top:1%;color:#ffffff;">


<div class="w3-container w3-center "><h2 class=" w3-text-white" style="background-color:#042052"><?php echo $row['f_hd']?></h2></div>
<div class="w3-container"><p><h6> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp<?php echo $row['f_p']?></h6></p></div>

<div class="w3-container w3-center"><h2 class=" w3-text-white" style="background-color:#042052"><?php echo $row['s_hd']?></h2></div>
<div class="w3-container"><pre><h6><?php echo $row['s_p']?></h6></pre></div>

<div class="w3-container w32-center "><h2 class=" w3-text-white" style="background-color:#042052"><?php echo $row['t_hd']?></h2></div>
<div class="w3-container"><p><h6><?php echo $row['t_p']?></h6></p></div>



</div>