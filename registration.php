<?php

session_start();

$username = "";
$email = "";
$errors= array();

// DB CONNECTION
$db = mysqli_connect('localhost','root','','registration');

// Register The Usfe

if(isset($_POST['regis']))
{
$username = mysqli_real_escape_string($db,$_POST['name']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$password_1 = mysqli_real_escape_string($db,$_POST['password1']);
$password_2 = mysqli_real_escape_string($db,$_POST['password2']);

// Validation
if($password_1 != $password_2) { array_push($errors,"The password do not match");}

$check = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
$run_check = mysqli_query($db,$check);
$fetch_result = mysqli_fetch_assoc($run_check);

if($fetch_result)
{
    if($fetch_result['username'] === $username)
    {
        array_push($errors,"Username already exists");
        
    }

    if($fetch_result['email']  === $email)
    {
        echo "<p>Email is already registered.</p>";

        array_push($errors,"Email already registered");      
    }

}

if(count($errors) == 0)
{
    $password = md5($password_1);

    $query="INSERT INTO users (username,email, password) VALUES('$username','$email','$password')";

    mysqli_query($db,$query);

    $_SESSION['name'] = $username;
   $_SESSION['sucess'] = "you are now logged in";
   header('location: login-form.php');
}



}
?>