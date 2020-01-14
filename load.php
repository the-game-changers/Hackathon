<?php
include("connection/dbconn.php");
include("template/header.html");
$display = array("topleft","topmiddle","topright","left","middle","right","bottomleft","bottommiddle","bottomright");
?>

<div class="w3-container w3-card-4" style="margin-left:17.7%;margin-right:17.7%;padding-top:1%;margin-bottom:1%">

<header class="w3-container w3-text-white" style="height:7%;background-color:#042052">
  <h3 class="w3-half" >Today's Top Stories</h3>
</header>

   <div style="background-color:#ffffff;height:90%;" class="w3-display-container ">
     
	 
	 <?php
	 $query="SELECT * FROM `topstories` order by `ts_id` desc LIMIT 9";
	 $run=mysqli_query($con,$query);
	 $i=0;
	 while($row=mysqli_fetch_assoc($run))
	 {
	 ?>
	 
		<div class="w3-card-4 w3-quarter w3-white  w3-display-<?php echo $display[$i];?>" style="margin-left:1%;margin-right:1%;margin-top:2%;height:25%"  >
	      <div > <img  src="st-image/<?php echo $row['ts_image']?>" width="100%" height="70%"  /></div>
		   <div class="w3-container w3-center"><a href="topstory.php?a=<?php echo $row['ts_id']; ?>"><?php  echo mb_strimwidth($row['ts_comment'], 0, 50, '...')?></a></div>
        </div>
	 
	 <?php 
	 $i++;}
	 ?>
	 
       
         
       
    </div>
	
	
</div>