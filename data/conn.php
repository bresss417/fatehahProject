<?php
    $conn = new mysqli('localhost','root','','fatehah');
    mysqli_set_charset($conn,'utf8');
    if(!$conn){
        echo "not work !";
    }
?>