<?php
    session_start();
    include('data/conn.php');

    $sql = "SELECT * FROM product";
    $que = mysqli_query($conn,$sql);

    if (isset($_POST['remove'])){
        if ($_GET['action'] == 'remove'){
            foreach ($_SESSION['cart'] as $key => $value){
                if($value["product_id"] == $_GET['p_id']){
                    unset($_SESSION['cart'][$key]);
                    echo "<script>alert('ลบสินค้าเรียบร้อยแล้ว')</script>";
                    echo "<script>window.location = 'cart.php'</script>";
                }
            }
        }
      }
?>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
<!------ Include the above in your HEAD tag ---------->
<style>
    @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
    .navbar{
        background-color:#1f2d30;
        height:75px;
        border-radius:0%;
    }
    
</style>
</head>
<body>
<nav class="navbar">
    <div class="container">
        <a href="index.php" class="nav-link" style="">
            <i class="fa fa-arrow-circle-o-left" aria-hidden="true" style="font-size: 420%; color: whitesmoke;margin-top:6px;"></"></i>
        </a>
    </div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-xs-9">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<a href="index.php" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> shopping ต่อ
                                </a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
                       
<?php
$total = 0;
    if (isset($_SESSION['cart'])){
        $product_id = array_column($_SESSION['cart'], 'product_id');
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            foreach ($product_id as $id){
                if ($row['p_id'] == $id){
?>
                     <div class="col-md-12">
                      <form action="cart.php?action=remove&p_id=<?php echo $row['p_id']; ?>"method="POST">
                        <div class="col-xs-2">
                            <img class="img-responsive" src="images/<?php echo $row['p_photo']; ?>">
                        </div>
                        <div class="col-xs-4">
                            <h4 class="product-id">ID : <?php echo $row['p_id']; ?></h4>
                            <h4 class="product-name"><strong><?php echo $row['p_name']; ?></strong></h4>
                            <h4><small><?php echo $row['p_detail']; ?></small></h4>
                        </div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>ราคา : <?php echo $row['price']; ?><span class="text-muted">฿</span></strong></h6>
							</div>
							<div class="col-xs-4">
                            <a href="orders.php?p_id=<?php echo $row['p_id']; ?>" class="btn btn-success btn-block">
								จ่าย
							</a>
							</div>
							<div class="col-xs-2">
								<button type="submit" class="btn btn-link btn-xs" name="remove">
                                <i class="fa fa-trash" aria-hidden="true" style="font-size:26px;color:red;"></i>
								</button>
							</div>
						</div>
                      </form>
                     </div>
                    
<?php
                    $total = $total + (int)$row['price'];
                }
            }
        }
    }else{

        echo"<div class=\"card-header animated \">
                <h3 class=\"text-center text-info\">ยังไม่มีสินค้า</h3>
            </div>";              

    }
?>
					</div><hr>

					
				
				
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-3">
<?php
     if (isset($_SESSION['cart'])){
        $count  = count($_SESSION['cart']); 

                      echo "<h4 class=\"text-right\">รวมราคา<strong>($count ชิ้น)</strong></h4>";
                      echo $row['p_id'];

         }else{
            echo "<h4 class=\"text-right\">ไม่มีสินค้า</h4>";
         }    
?>
                        </div>
                        <div class="col-xs-6">
                            <h4 class="text-right">ราคา :<strong>฿<?php echo $total; ?> บาท</strong</h4>
                        </div>
<?php
    if (isset($_SESSION['cart'])){
        $product_id = array_column($_SESSION['cart'], 'product_id');
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            foreach ($product_id as $id){
                if ($row['p_id'] == $id){
?>
						<div class="col-xs-3">
							<a href="orders.php?p_id=<?php echo $row['p_id']; ?>" class="btn btn-success btn-block">
								จ่าย
							</a>
                        </div>
<?php
                    return;
                }
            }
        }
    }else{
?>
                        <div class="col-xs-3">
							<button type="button" class="btn btn-success btn-block">
								ไม่สามารถจ่าย
							</button>
                        </div>
<?php
    }
?>
					</div>
				</div>
			</div>
        </div>
        
    </div>
    
</div>
</body>
</html>