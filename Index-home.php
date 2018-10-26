<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/index-home.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script type="text/javascript" src="js/index-home.js"></script>
</head>

<body>
	<div class="container">
<div class="slideshow-container">


  
  <?php
  require_once(dirname(dirname(__FILE__)).'\SJI\db_config.php');
  $conn = new db();

$data=$conn->getAll("select name,path from event where del=0 and feature=1");
$html='';
foreach ($data as $key => $value) {
	$html.="<div class='mySlides fade'><img src='".$value['path']."' style='width:100%'>
  <div class='text'>'".$value['name']."'</div>
</div>";

}

echo $html;

  ?>
  





<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">

	<?php

$ctr=1;
$radiotoggle='';
	foreach ($data as $key => $value) {
	$radiotoggle.="<span class='dot' onclick='currentSlide(".$ctr++.")'></span> ";

}
echo $radiotoggle;

	?>
  
</div>

<br><br>
<hr>
	<form  id="searchbar">
  <input type="text" name="search" value='' id="searchtext" placeholder="Search.."> <button type="button" onclick="render();" id='search' ><i class="fa fa-search"></i></button>
</form>

</div>



<div class='container' id='list'>
	
</div>

</body>


<script type="text/javascript">var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}</script>
</html>