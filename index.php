<?php
include("connection/dbconn.php");
include("template/header.html");
?>

	
	<style>
    .w3-myfont
	 {
       font-family: "Comic Sans MS", cursive, sans-serif;
     }
	 .mySlides {display:none;
	             width:65%;
                 height:65%	;
                 margin-top:1%
				 }
	 .w3-left, .w3-right, .w3-badge {cursor:pointer}
     .w3-badge {height:13px;width:13px;padding:0}			 
				 
  
 
 
 </style>
 
                  <!-- slide bar-->
				  
				  
<div class="w3-content w3-display-container w3-mobile">
  <img class="mySlides w3-animate-fading" src="images/ss1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/ss2.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/ss3.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/ss4.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/ss5.jpg" style="width:100%">
  

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
  
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
	<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
	<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
  </div>
  
  
  
</div>



                                    <!-- news-->
									
									
<div class="w3-card-4" style="margin-left:17.7%;margin-right:17.7%;margin-top:1%;margin-bottom:1 %">

<header class="w3-container w3-text-white" style="height:10%;background-color:#042052">
  <h3 class="w3-half" >Today's Top Stories</h3>
  <a href="load.php" class="w3-button w3-right w3-red w3-quater" style="margin-top:1%">LOAD MORE</a>
</header>

   <div style="background-color:#ffffff;margin-bottom:1%" class="w3-container ">
     
	 
	 <?php
	 $query="SELECT * FROM `topstories` order by `ts_id` desc LIMIT 3 ";
	 $run=mysqli_query($con,$query);
	 while($row=mysqli_fetch_assoc($run))
	 {
	 ?>
	 
		<div class="w3-card-4 w3-quarter w3-image w3-padding w3-white" style="margin-left:6%; margin-top:1%"  >
	      <div> <img  src="st-image/<?php echo $row['ts_image']?>" width="100%" height="25%"/></div>
		   <div class="w3-container w3-center"><a href="topstory.php?a=<?php echo $row['ts_id']; ?>"><?php  echo mb_strimwidth($row['ts_comment'], 0, 50, '...')?></a></div>
        </div>
	 
	 <?php 
	 }
	 ?>
	 
       
         
       
    </div>
	
	
</div>

									
    



<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}
function currentDiv(n) {
  showDivs(slideIndex = n);
}


function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
     dots[i].className = dots[i].className.replace(" w3-white", "");	 
  }
  x[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " w3-white";  
}
 
setInterval(function(){ plusDivs(1)},6000); 
</script> 
 
 
 
 
 
 
  
 </body>
</html>