

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html>
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Navbar with Search Box | CodingNepal</title> -->
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/sildeshow.css">
    <link rel="stylesheet" href="css/loginForm.css">
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
      </div>

      <div class="cancel-icon">
      <span class="fas fa-times"></span></div>
        
    </nav>

    <form action="" method="POST">
        <div class = "login-form-container">
            <ul class = "login-list">
            <li style="text-align: center;">Login</li>
            <li><input type = "text" name = "email" placeholder="Email"></li>
            <li><input type = "password" name = "password" placeholder="Password">
                <br><a href="register.php" style="text-align: left;">Sign up an account</a></li>
            <li><input type = "submit" name = "login" value="Login"></li>
            </ul>
        </div>
    </form>

    <?php
    require_once "connection/mysqli_conn.php";
    session_start();
        echo '<script language="javascript">';
        echo '</script>';
        if(isset($_POST["login"])){
          if($_POST["email"]!="" && $_POST["password"] != ""){
              $email = $_POST["email"];
              $password = $_POST["password"];
              $sql = "Select * From user Where email = '$email' And password = '$password';";
              $rs = mysqli_query($conn,$sql);
              if(mysqli_num_rows($rs) == 1){
                  $rc = mysqli_fetch_assoc($rs);
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                  echo '<script language="javascript">';
                  echo 'alert("Login completed");';
                  echo 'window.location.assign("home.php");';
                  echo '</script>';
              }else{
                  echo '<script language="javascript">';
                  echo 'alert("Account not find");';
                  echo 'window.location.assign("login.php");';
                  echo '</script>';
              }
          }
        }
        

    ?>
   

   <script>
    const menuBtn = document.querySelector(".menu-icon span");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = ()=>{
      items.classList.add("active");
      menuBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = ()=>{
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      form.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
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
