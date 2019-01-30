<?php

session_start();

$db = mysqli_connect('localhost','root','','registration');

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_md = mysqli_real_escape_string($db,$_POST['password']);
    $password = md5($password_md);
    echo $password;
    $sql = "SELECT id from users WHERE email='$email' and password='$password'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);
    if($count == 1)
    {
        echo "veru1 good";
       # session_register("username");
        $_SESSION['login_user'] = $username;

        header("location: index.html");

    }
    else
    {
        $error = "Passwod is incorretc";
        echo "veru good";
    }

}

?>