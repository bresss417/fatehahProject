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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('data/link.php'); ?>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a href="index.php" class="nav-link">
            <i class="fa fa-arrow-circle-o-left" aria-hidden="true" style="font-size: 330%; color:white;"></"></i>
        </a>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
	    <div class="col-md-6">
            <div class="card">
              <header class="card-header">
	            <h4 class="card-title mt-2">กรอกข้อมูลการสั่งซื่อ</h4>
              </header>
              <article class="card-body">
              
                <form action="chk_orders.php" method="POST" role="form">
                    <input type='hidden' name='p_id' value='<?php echo $_GET["p_id"]; ?>'>
    <?php if(isset($_SESSION['user'])){ ?>
                    <input type='hidden' name='u_id' value='<?php echo $_SESSION["user"]["id"]; ?>'>   
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6" style="margin">
                            <div class="form-group">
			                    <input type="text" name="name" class="form-control input-sm" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 mr-auto" >
			    		    <div class="form-group">
			    	          <input type="text" name="last" class="form-control input-sm" style="" placeholder="Last Name">
			                </div>
	  		            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3" >
			    		            <div class="form-group">
			    				          <input type="text" name="h_id" id="last_name" class="form-control input-sm" style="" placeholder="บ้านเลขที่">
			    			          </div>
                        </div>
                        <div class="col-md-3" >
			    		            <div class="form-group">
			    				          <input type="text" name="villa_ge" class="form-control input-sm" style="" placeholder="หมู่บ้าน">
			    			          </div>
                        </div>
                        <div class="col-md-3" >
			    		    <div class="form-group">
			    				<input type="text" name="dis_tric" class="form-control input-sm" style="" placeholder="ตำบล">
			    			</div>
                        </div>
                        <div class="col-md-3" >
			    		    <div class="form-group">
			    				<input type="text" name="city" class="form-control input-sm" style="" placeholder="อำเภอ">
			    			</div>
                        </div>
                        <div class="col-md-3" >
			    		    <div class="form-group">
			    				<input type="text" name="pro_vince" class="form-control input-sm" style="" placeholder="จังหวัด">
			    			</div>
                        </div>
                        <div class="col-md-3" >
			    		    <div class="form-group">
			    				<input type="text" name="posta_code" class="form-control input-sm" style="" placeholder="รหัสไปร์ษณีย์">
			    			</div>
			    		</div>
                    </div>
                    <div class="form-group">
			    	    <input type="email" name="email" class="form-control input-sm" value="<?php echo $_SESSION['user']['email']; ?> ">
                    </div>
    <?php   }   ?>
                    <div class="form-group">
			    		<input type="text" name="phone" class="form-control input-sm" placeholder="เบอร์โทร">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="ตกลง"> 
                    </div>
                    
                </form>
              
              </article>
            </div>
        </div>
    </div>
</div>
</body>
</html>