<?php
    session_start();
    include('data/conn.php');

        if(!isset($_SESSION['user'])){
            echo "<script>
              alert('กรุณาเข้าสู่ระบบก่อน');
              window.location.href = 'login.php';
              </script>";
    
            exit();
        }
    
    $sql = "SELECT * FROM product 
            INNER JOIN orders ON product.p_id = orders.pro_id
            LEFT JOIN user ON user.id = orders.u_id";
    $query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <?php require('data/link.php'); ?>
    <title>List Product Fukking</title>
    <style>
        .purple-grad {
            background: #8200fb;
            background: -webkit-linear-gradient(left top,#8200fb,#c000ff);
            background: -o-linear-gradient(bottom right,#8200fb,#c000ff);
            background: -moz-linear-gradient(bottom right,#8200fb,#c000ff);
            background: linear-gradient(to bottom right,#8200fb,#c000ff);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            
            <a href="index.php" class="nav-link">
                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 340%; color:yellow;"></i> 
                 <span class="sr-only">(current)</span>
            </a>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <div class="collapse navbar-collapse" id="">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="fa fa-home" aria-hidden="true" style="font-size: 100%; color:white;"></i> 
                        Home <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">
                        <i class="fa fa-shopping-basket" aria-hidden="true" style="font-size: 100%; color:white;"></i>  
                        ตะกร้าสินค้า <span class="sr-only">(current)</span>
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
                <li class="nav-item">
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
    <div class="container">
        <div class="card">

<?php

    if(isset($_SESSION["user"])){   //check users
        $id_log = $_SESSION['user']['id'];  //variable = id of table user
        while($wow = mysqli_fetch_assoc($query)){   //loop database of table product
            $u_id = $wow['u_id'];   //variable = u_id of table orders
            if($_SESSION['user']['id'] == $wow['u_id']){   //check ค่า id ของ users ว่าตรงกับ ค่า u_id ใน orders รึป่าว
?>
            <table class="table table-borderless table-shopping-cart bg-light" style="border:none">
                <tbody>
                    <tr>
                        <td>
                          <figure class="itemside align-items-center">
                            <div class="aside">
                                <img src="images/<?php echo $wow['p_photo']; ?>" alt=""  width="100" height="100" class="rounded mt-2">
                            </div>
                          </figure>
                        </td>
                        <td>
                           <h4 class="purple-text text-uppercase mt-5" style="font-size:15px;"> สินค้า : <?php echo $wow['p_name']; ?></h4>
                    </td>
                        <td>
                           <h5 class="purple-text text-uppercase mt-5" style="font-size:15px;"> รายละเอียด :<?php echo $wow['p_detail']; ?> </h5>
                     </td>
                        <td>
                            <h5 class="purple-text text-uppercase mt-5" style="font-size:15px;"> ราคา : ฿<?php echo $wow['price']; ?> บาท </h5>
                     </td>
                     <td>
                        <h5 class="purple-text text-uppercase mt-5" style="font-size:15px;">จำนวน : 1 ชิ้น</h5>
                     </td>
                        <td>
                            <h5 class="purple-text text-uppercase mt-5" style="font-size:15px;"> วันที่ซื่อ : <?php echo $wow['date_now']; ?> </h5>
                        </td>
                        <td>
                            <a href="delete.php?o_id=<?php echo $wow['o_id']; ?>" class="btn btn-danger btn-sm" style="margin-top:35px">
                                <i class="fa fa-trash" aria-hidden="true" style="font-size:21px;color:black;"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
    
<?php
            }else{
                   
            }
            
        }
    }else{
        echo "no user";
    }
    
?>
        
    </div>
</body>
</html>