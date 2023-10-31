<?php
	require_once(__LIB_PATH . "html.php");
	$html = new HTML();
	$galeria = new CTR_galeria(); //variable del Controlador



?>
<!-- Container for the image gallery -->
<div class='container'>
<?php
$caja="";
$cont=0;

foreach ($galeria->cargarIMG() as $value) {
$caja.="<div class='mySlides'>
    <div class='numbertext'>".$value[0]."/".$value[0]." </div>
      <img src='app_core/resources/images/".$value[2]."' style='width:90%'>
  </div>


  <div class='row'>
    <div class='column'>
      <img class='demo cursor' src='app_core/resources/images/".$value[2]."' style='width:100%'  style= 'height:20%' onclick='currentSlide(".$value[0].")' alt='".$value[1]."'>
	  
	  </div>";

}
echo $caja;

 ?>
</div>
 <!-- Next and previous buttons-->

   <div class='caption-container'>
     <p id='caption'></p>
   </div>
 <a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
 <a class='next' onclick='plusSlides(1)'>&#10095;</a>


<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n)
{
showSlides(slideIndex += n);
}

function currentSlide(n)
	{
showSlides(slideIndex = n);
}

function showSlides(n)
{
var i;
var slides = document.getElementsByClassName('mySlides');
var dots = document.getElementsByClassName('demo');
var captionText = document.getElementById('caption');
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
	slides[i].style.display = 'none';
}
for (i = 0; i < dots.length; i++) {
	dots[i].className = dots[i].className.replace('active', '');
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

