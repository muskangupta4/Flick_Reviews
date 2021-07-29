<?php 
session_start();

	include("connection.php");
	include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Jockey+One&family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Dancing+Script&display=swap" rel="stylesheet">
    <title>Flick Reviews</title>
    <div class="topnav">
    <a href="signup.php" target="blank">Sign Up</a>
    <a href="login.php" target="blank">Login</a>
        <a href="about.html" target="blank">Contact us</a>
  
        <a href="movies.html" target="blank">Latest Movies</a>
        <a href="webseries.html" target="blank">Web Series </a>
        
        <a href="index.php" >Home</a>

      </div>
    <img src="images/tenor.gif" id="popcorn" ></img>
    <h1>Flick Reviews</h1>
  
</head>
<body>
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="images/slide1.jpg" style="width:100%">
      <div class="text">The best website for awesome reviews</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="images/image7.jpg" style="width:100%">
      <div class="text"> The best website for awesome reviews</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="images/slide3.jpg" style="width:100%">
      <div class="text">The best website for awesome reviews</div>
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
    </div>
    <br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
  var slideIndex = 1;
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
  }
  </script>
  <br>
  <p id="trending">Trending!</p>
  <div class="conatiner">
    <div class="row">
  <img id='one' src="images/1.jpg" height="370px" width="250px"></img>
  <img id="two" src="images/dark_season_3_trailer_the2.jpg" height="370px" width="250px"></img>
  <img id='three' src="images/3.jpg" height="370px" width="250px"></img>
  <img id="four" src="images/4.jpg" height="370px" width="250px"></img>
  <img id="five" src="images/image8.jpg" height="370px" width="250px"></img>
</div>
</div>
</body>
<link rel="stylesheet" href="css/style.css">
<footer><p>&copy;Muskan Gupta</p></footer>
</html>