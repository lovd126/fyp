<?php 
    require_once "connection/mysqli_conn.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/register.css">
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
        
    </nav>

    <div class = "register-form">
        <h1>Register Form</h1>
        <form action = "" method = "POST">
            <p>Email</p>
            <input type = "text" name = "email" id = "email" placeholder = "Email"  required/>
            <p>Nick name</p>
            <input type = "text" name = "nickname" id = "nickname" placeholder = "Nick name" required/>
            <p>Password</p>
            <input type = "password" name = "pwd" id = "pwd" placeholder = "Password" required/>
            <p>Confimation of password</p>
            <input type = "password" name = "Cpwd" id = "Cpwd" placeholder = "Password" required/>
            <p>Phone number</p>
            <input type = "tel" name = "phoneNum" id = "phoneNum" placeholder = "Phone number" pattern = "[0-9]{8}" required/>
            <p>DOB</p>
            <input type = "date" name = "DOB" id = "DOB" placeholder = "Date of birthday" required/>
            <input type ="submit" name = "submit"/>
        </form>
    </div>
</body>
</html>

<?php

    if(isset($_POST["submit"])){
        if($_POST["pwd"] == $_POST["Cpwd"]){
            $email = $_POST["email"];
            $pwd = $_POST["pwd"];
            $phoneNum = $_POST["phoneNum"];
            $DOB = "".$_POST["DOB"];
            $nickname = $_POST["nickname"];

            $sql1 = "SELECT * FROM user WHERE email = '$email';";
            $rs = mysqli_query($conn,$sql1);
            if(mysqli_num_rows($rs) == 1){
                echo '<script language="javascript">';
                echo 'alert("The account already created \n Please change the user id");';
                echo '</script>';

            }else{
                $sql2 = "INSERT INTO user (email,nickname,password,phoneno,dateofbirth,creditscore) VALUES (
                    '$email',
                    '$nickname',
                    '$pwd',
                    '$phoneNum',
                    '$DOB',
                    0
                )";
                $rs = mysqli_query($conn,$sql2);
                echo '<script language="javascript">';
                echo 'alert("Register complete");';
                echo '</script>';
                $_SESSION["email"] = $email;

            }
        }else{
            echo '<script language="javascript">';
            echo 'alert("The passwords must be match")';
            echo '</script>';
            

        }
    

    }

?>

