<?php

include('../data/conn.php');

    $exe = pathinfo(basename($_FILES['image']['name']), PATHINFO_EXTENSION);
    $new_img = 'img_' .uniqid(). ".".$exe;
    $img_path = "../images/";
    $upload_path = $img_path.$new_img;
    $success = move_uploaded_file($_FILES['image']['tmp_name'],$upload_path);
    if($success==FALSE){
        $calback = array(
        'status' => 404,
        'msg' => 'Upload Images False'
        );
    exit();
    }

    $image = $new_img;
    $p_name = $_POST['p_name'];
    $p_detail = $_POST['p_detail'];
    $price = $_POST['price'];
    $cetegoty = $_POST['cetegoty'];
    $p_id = $_POST['p_id'];
    $sql = "UPDATE product SET p_name='$p_name',p_detail='$p_detail',price='$price',p_photo='$image',p_cetegory='$cetegoty'
             WHERE p_id='$p_id'";
    $up = mysqli_query($conn,$sql);
            if($up){
                echo "
                <script>
                    alert('update เรียบร้อย');
                    window.location = 'index.php';
                </script>
                ";
            }else{
                echo "
                <script>
                    alert('ไม่สามารถ update ได้');
                    window.location = 'update.php';
                </script>
                ";
            }
            mysqli_close($conn);
    
?>