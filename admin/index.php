<?php
    include('../data/conn.php');
    require_once('../data/component.php');
    session_start();
    if(!isset($_SESSION['user'])){
        echo "
            <script>
                alert('login now');
                window.location = 'login.php';
            </script>
        ";
    }
    $sql = mysqli_query($conn,"select * from product");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require('../data/link.php'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/test.css">
    <title> Admin Document</title>
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
                <li class="nav-item">
                    <a href="list_orders.php" class="nav-link">
                    <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 100%; color:white;"></i>
                        สินค้าที่ผู้คนสั่งซื้อ <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
<?php if(isset($_SESSION["user"])){ ?>
                <li class="nav-item active" style="color:whitesmoke;margin-top:15px;">
                    <p class="yellow-text" style="font-family: Arial, Helvetica, sans-serif;" >
                     <?php echo $_SESSION["user"]["name"]; ?>&nbsp; <?php echo $_SESSION["user"]["last"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </p>
                </li>
                <li class="nav-item ">
                    <a class="btn btn-default btn-outline btn-circle" href="../logout.php">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;
                        logout <span class="sr-only">(current)</span>
                    </a>
                </li>
<?php }else{ ?>
                <li class="nav-item ">
                    <a class="btn btn-default btn-outline btn-primary" href="../login.php">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;
                        login <span class="sr-only">(current)</span>
                    </a>
                </li>
<?php } ?>
            </ul>
        </div>
      </div>
    </nav>
    <br>
<div class="container">
    <div class="ml-auto d-flex">
        <h4 class="card-title purple-text md-3"><a href="add_product.php" class="btn btn-outline-success"> + เพิ่มสินค้า</a> &nbsp;รายการสินค้า</h4>
    </div>
</div>
<section class="our-publication mt-3 pb-70">
    <div class="container">
        <div class="row">
<?php
    while($rows = mysqli_fetch_assoc($sql)){
        proaddmins($rows['p_name'],$rows['p_detail'],$rows['price'],$rows['p_photo'],$rows['p_id']);
    }
?>
        </div>
    </div>
</section>
</body>
</html>