<?php
    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,"getknowledge");

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['birthday'];
    

    $s = "select * from users where username = '$username' or email='$email' or phone='$phone'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num >= 1){
        //echo "Username Already Taken";
        header('Refresh:1; url=register.php');
        echo '<script>alert("Username,email or phone-number Already Taken")</script>';
    }
    else{
        $reg = "insert into users(username, email, phone, password, gender, dob) values ('$username','$email', '$phone', '$password', '$gender', '$dob')";
        mysqli_query($con, $reg);
        $_SESSION['username'] = $username;
        header('Refresh:2; url=home.php');
        echo "Registrations done Successful enjoy now.";
        // echo '<script>
        // alert("Registrations done Successfully");
        // </script>';
    }
?>