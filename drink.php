<?php
    include('data/conn.php');
    session_start();
    require_once('data/component.php');
    require_once('data/CreateDB.php');



    $sql ="SELECT * FROM product WHERE p_cetegory='เครื่องดื่ม'";
    $que = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/test.css">
    <?php require('data/link.php'); ?>
    <title>home page</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
      <div class="container">
        <a href="index.php" class="nav-link">
            <i class="fa fa-home" aria-hidden="true" style="font-size: 350%; color:white;"></i> 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <div class="collapse navbar-collapse" id="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="fa fa-home" aria-hidden="true" style="font-size: 100%; color:white;"></i> 
                        Home <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ประเภทสินค้า </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="food.php">อาหาร</a>
                            <a class="dropdown-item" href="drink.php">เครื่องดืม</a>
                            <a class="dropdown-item" href="ob_ject.php">สิ่งของเครื่องใช้</a>
                        </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">
                        <i class="fa fa-shopping-basket" aria-hidden="true" style="font-size: 100%; color:white;"></i>  
                        ตะกร้าสินค้า <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="buy.php" class="nav-link">
                    <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 100%; color:white;"></i>
                        สินค้าที่ซื้อแล้ว <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
<?php if(isset($_SESSION["user"])){ ?>
                <li class="nav-item active" style="color:whitesmoke;margin-top:15px;">
                    <p class="" style="font-family: Arial, Helvetica, sans-serif;" >
                        <?php echo $_SESSION["user"]["name"]; ?>&nbsp; <?php echo $_SESSION["user"]["last"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </p>
                </li>
                <li class="nav-item ">
                    <a class="btn btn-default btn-outline btn-circle" href="logout.php">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;
                        logout <span class="sr-only">(current)</span>
                    </a>
                </li>
<?php }else{ ?>
                <li class="nav-item ">
                    <a class="btn btn-default btn-outline btn-primary" href="login.php">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;
                        login <span class="sr-only">(current)</span>
                    </a>
                </li>
<?php } ?>
            </ul>
        </div>
      </div>
    </nav>
    
<section class="our-publication mt-3 pb-70">
    <div class="container">
        <div class="section-header">
            <i class="fa fa-product-hunt"></i>
        </div>
        <div class="row">        
<?php while($row = mysqli_fetch_assoc($que)){ 
        products($row['p_name'],$row['p_detail'],$row['price'],$row['p_photo'],$row['p_id']);
      } 
?>    
        </div>
    </div>
</section>

</body>
</html>
<?php

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('เพิ่มสินค้าเรียบร้อย')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>