<?php
    include('data/conn.php');

    $name = $_POST['name'];
    $last = $_POST['last'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $status = "users";

    $chk = "SELECT email FROM user WHERE email='$email' ";
    $que = mysqli_query($conn,$chk);
    $num = mysqli_num_rows($que);
    if($num > 0){
        echo "  
        <script>
            alert('email นี้มีผู้ใช้งานเเล้ว');
            window.location = 'login.php';
        </script>
        ";
    }else{
        $insert = "INSERT INTO user(name,last,email,password,sex,status) 
                            VALUES('$name','$last','$email','$pass','$sex','$status')";
        $result = mysqli_query($conn,$insert);
        if($result){
            echo "  
            <script>
                alert('สมัคสมาชิกเรียบร้อยแล้ว');
                window.location = 'login.php';
            </script>
            ";
        }else{
            echo "  
            <script>
                alert('ไม่สามารถ สมัคสมาชิก ได้ กรุณาสมัคใหม่');
                window.location = 'login.php';
            </script>
            ";
        }
    }
    exit();

?>