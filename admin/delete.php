<?php
    include('../data/conn.php');
    $p_id = $_GET['p_id'];
    $De = mysqli_query($conn,"DELETE FROM product WHERE p_id='$p_id' LIMIT 1");
    if($De){
        echo "
            <script>
                alert('ลบเรียบร้อยแล้ว');
                window.location = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('error เกิดข้อผิดพลาด');
                window.location = 'index.php';
            </script>
        ";
    }
    mysqli_close($conn);

?>