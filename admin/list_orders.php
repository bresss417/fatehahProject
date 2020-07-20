<?php
    include('../data/conn.php');
    session_start();

    $sql ="SELECT * FROM orders LEFT JOIN product ON orders.pro_id = product.p_id";
    $re = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/list_orders.css">
    <?php require_once('../data/link.php'); ?>
    <title>Document</title>
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

	<div class="container col-11">
		<div class="row">
			<div class="col-12">
			    
			    <div class="table-box">
			        <div class="table-responsive">
        				<table class="table table-striped">
        					<thead>
        						<tr>
        							<th scope="col">ชื่อ</th>
        							<th scope="col">สินค้า</th>
									<th scope="col">ราคา</th>
        							<th scope="col">ที่อยู่</th>
									<th scope="col">เบอร์โทร</th>
									<th scope="col">email</th>
        							<th scope="col">วันที่ซื่อ</th>
        							<th scope="col">รูปภาพ-สินค้า</th>
        						</tr>
        					</thead>
        					<tbody>
<?php
	while($rows = mysqli_fetch_assoc($re)){		
?>
        						<tr>
        							<th scope="row">
        								<div class="d-flex align-items-center">
        									<div class="mr-auto">
        										<div class="task strong">
        											ID : <?php echo $rows['o_id']; ?>
        										</div>
        										<div class="users strong">
        											<span> ชื่อ-สกุล : </span> <?php echo $rows['username']; ?>
        										</div>
        									</div>
        								</div>
        							</th>
        							<td class="project strong "> 
										<div class="mt-4">
											<?php echo $rows['p_name']; ?>
										</div>
									</td>
									<td class="project strong ">
										<div class="mt-4">
											฿.<?php echo $rows['price']; ?> บาท
										</div>
									</td>
        							<td class="project-description">
										<div class="mt-4">
											<?php echo $rows['address']; ?>
										</div>
									</td>
        							<td>
        								<div class="date strong mt-4">
        									<?php echo $rows['phone']; ?>
        								</div>
        								
									</td>
									<td>
        								<div class="date strong mt-4">
        									<?php echo $rows['email']; ?>
        								</div>
        								
        							</td>
        							<td>
        								<div class="date strong mt-4">
        									<?php echo $rows['date_now']; ?>
        								</div>
        	
        							</td>
        							<td class="assigned strong">
										<img src="../images/<?php echo $rows['p_photo']; ?>" alt="" width="100" height="100" srcset="">
									</td>
        						</tr>
<?php	}	?>
        					</tbody>
        				</table>
        			</div>
				
				</div>
			</div>
		</div>
	</div>
</body>
</html>