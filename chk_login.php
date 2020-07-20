<?php
include('data/conn.php');
session_start();

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $que = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
    $re = mysqli_query($conn,$que) or die(mysqli_error());
    $num = mysqli_fetch_assoc($re);
    $_SESSION['status'] = $num['status'];
    if(!$num){  
    echo "  
        <script>
            alert('email and password null');
            window.location = 'login.php';
        </script>
        ";
    }else if($num['status'] == 'admin'){
        $_SESSION['user'] = $num;
        echo "  
        <script>
            alert('wellcom to admin !');
            window.location = 'admin';
        </script>
        ";
    }else if($num['status'] == 'users'){
        $_SESSION['user'] = $num;
        echo "  
        <script>
            alert('wellcom to user !');
            window.location = 'index.php';
        </script>
        ";
    }
   

?>