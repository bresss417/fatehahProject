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
 $photo = $new_img;
 $p_name = $_POST['p_name'];
 $p_detail = $_POST['p_detail'];
 $price = $_POST['price'];
 $cetegoty = $_POST['cetegoty'];

 $sql = "INSERT INTO product(p_name,p_detail,price,p_photo,p_cetegory)
        VALUES('$p_name','$p_detail','$price','$photo','$cetegoty')";
 $query = mysqli_query($conn,$sql);
 if($query){
    echo "  
    <script>
        alert('เพื่ม สินค้าเรียบร้อยแล้ว');
        window.location = 'index.php';
    </script>
    ";
 }else{
    echo "  
    <script>
        alert('ไม่สามารถเพิ่มสินค้าได้');
        window.location = 'add_product.php';
    </script>
    ";
 }
 mysqli_close($conn);
?>