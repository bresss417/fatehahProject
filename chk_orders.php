<?php
    session_start();
    include('data/conn.php');

    $u_id = $_POST['u_id'];
    $p_id = $_POST['p_id'];

    $name = $_POST['name'];
    $last = $_POST['last'];

    $h_id = $_POST['h_id'];
    $villa_ge = $_POST['villa_ge'];
    $dis_tric = $_POST['dis_tric'];
    $city = $_POST['city'];
    $pro_vince = $_POST['pro_vince'];
    $posta_code = $_POST['posta_code'];

    $users = join(array($name," ",$last));
    $address = join(array($h_id," ",$villa_ge," ",$dis_tric," ",$city," ",$pro_vince," ",$posta_code));
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date_now = date('Y-m-d');

    $in_sert = "INSERT INTO orders(username,address,email,phone,date_now,u_id,pro_id)
                VALUES('$users','$address','$email','$phone','$date_now','$u_id','$p_id')";
    $result = mysqli_query($conn,$in_sert);
    if($result){
        echo "
        <script>
            alert('สั่งซื้อเรียบร้อยแล้ว');
            window.location = 'index.php';
        </script>"; 
          
    }else{
        echo "
        <script>
            alert('ไม่สามารถสั่งซื่อได้');
            window.location = 'orders.php';
        </script>";
        
    }
?>