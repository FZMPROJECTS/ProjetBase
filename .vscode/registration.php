<?php
require 'config.php';
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $username=$_POST["username"];
    $email =$_POST["email"];
    $password=$_POST["password"];
    $confirmPassword=$_POST["confirmpassword"];
    $duplicate= mysqli_query($conn , "SELECT * FROM tb_user WHERE username= '$username' OR email='$email' ");
    if(mysqli_num_rows($duplicate)>0)
    {
        echo
        "<script> alert ('Username or Email Has Already Taken'); </script>";
    }
    else
    {
       if($password ==$configpassword)
       {
        $query ="INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
        mysqli_query($conn ,$query);
        echo
        "<script> alert('Registration Successful'); </script>";
       }
    }
    else
    {
      echo
      "<script> alert('Password Does Not Match'); </script>";

    }

}
<!DOCTYPE html>
<html lang="en" dir="ltr"> 
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    <h2> Registration </h2>
    <form class="" action="" method="post" autocomplete="off">
        <label for="name"> Name : </label>
        <input type="text" name="name" id="name" requierd value=""> <br>
        <label for="username"> username : </label>
        <input type="text" name="username" id="username" requierd value=""> <br>
        <label for="email"> email : </label>
        <input type="text" name="email" id="email" requierd value=""> <br>
        <label for="Password"> Password : </label>
        <input type="text" name="Password" id="Password" requierd value=""> <br>
        <label for="ConfirmPassword"> Confirm Password : </label>
        <input type="text" name="ConfirmPassword" id="ConfirmPassword" requierd value=""> <br>
        <button type="submit" name="submit" > Register</button>
    </form>
    <br>
    <a href="login.php">Login</a>
</body>
</html>