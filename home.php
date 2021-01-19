<?php session_start(); ?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html>
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Navbar with Search Box | CodingNepal</title> -->
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/sildeshow.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    
    
  </head>



  <body>
    <nav>
      <div class="menu-icon">
        <span class="fas fa-bars"></span>
      </div>

      <div class="logo">
        In-book
      </div>

      <div class="nav-items">
        <li><a href="home.php">Home</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="login.php">SignIn</a></li>

      </div>
      
      <div class="search-icon">
        <img src="shoppingCart.png" width= "40px"/>
      </div>

      <div class="cancel-icon">
      <span class="fas fa-times"></span></div>

    </nav>
    
    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img class = "sildeImg" src="book1.jpg">
        <img class = "sildeImg" src="book2.jpg">
        
        
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img class = "sildeImg" src="book2.jpg">
        
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img class = "sildeImg" src="book3.jpg" >
        
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
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = ()=>{
      items.classList.add("active");
      menuBtn.classList.add("hide");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = ()=>{
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      searchBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      form.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = ()=>{
      form.classList.add("active");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
  </script>
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


  </body>
</html>
