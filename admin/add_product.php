<?php
session_start();
include_once('../data/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/add_product.css">
    <?php require('../data/link.php'); ?>
    <title>Add Product</title>
    <style>
      #preview_image { 
        width: 200px; 
        height:200px;
        border : 1px solid black;
      } 
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a href="index.php" class="nav-link">
            <i class="fa fa-arrow-circle-o-left" aria-hidden="true" style="font-size: 330%; color:white;"></"></i>
        </a>
        <div class="collapss navbar-collapse">
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
    <div class="container">
        <div class="form-wrap">
            <div class="form-wrap-inn">
                <div class="frame">
                    <div class="form-content">
                        <div class="header">
                        
                            <h2>Add Product</h2>
                        </div>
                        <div class="login-form">
                            <form action="chk_add_product.php" method="POST" enctype="multipart/form-data" class="form">
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <input type="file" name="image" class="form-control">
                                    <button type="button" class="btn btn-primary btn-sm" id="add_image">เลือกรูปภาพ</button>
                                    <div class="mb-2">
                                        <img src="" alt="" id="preview_image" class="img-fluid">
                                    </div>
                                    <button type="button" class="btn btn-info btn-sm" id="edit_image">แก้ไขรูปภาพ</button>
                                    <button type="button" class="btn btn-danger btn-sm" id="delete_image">ลบรูปภาพ</button>
                                </div>
                            </div>
                                <div class="form-group">
			                        <input type="text" name="p_name" class="form-control input-sm" placeholder="ชื่อสินค้า">
                                </div>
                                <div class="form-group">
			                        <input type="text" name="p_detail" class="form-control input-sm" placeholder="รายละเอียดสินค้า">
                                </div>
                                <div class="row">
                                  <div class="col-md-3" style="">
                                    <div class="form-group">
			                           <input type="number" name="price" class="form-control input-sm" placeholder="ราคา">
                                    </div>
                                  </div>
                                  <div class="col-md-2">                  
			                           <p class="mt-4">บาท</p>
                                  </div>
                                  <div class="col-md-5">
                                   <select class="browser-default custom-select custom-select-sm mb-2 mt-3" name="cetegoty">
                                    
                                    <option selected>อาหาร</option>
                                    <option selected>เครื่องดื่ม</option>
                                    <option selected>สิ่งของเครื่องใช้</option>
                                   </select>
                                  </div>
                                </div>  
                                <div class="form-group">
                                    <input type="submit" class="btn btn-outline-primary btn-block" value="ตกลง"> 
                                </div>                             
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/add_product.js"></script>
</body>
</html>