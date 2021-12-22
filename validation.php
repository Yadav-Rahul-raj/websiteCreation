<?php
    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,"getknowledge");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $s = "select * from users where username = '$username' && password='$password'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['username'] = $username;
        header('location:home.php');
    }
    else{
       header('Refresh:1; url=login.php');
    //    echo 'Please enter valid username & password.';
       echo '<script>
        alert("Please enter valid username & password.");
        </script>';
    }
?>