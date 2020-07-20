<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login Page</title>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

    <div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<div class="login-show">
                <h2>LOGIN</h2>
                <form action="chk_login.php" method="POST">
				    <input type="text" name="email" placeholder="Email">
				    <input type="password" name="password" placeholder="Password">
                    <input type="submit" value="Login">
                </form>
				<a href="">Forgot password?</a>
			</div>
			<div class="register-show">
                <h2>REGISTER</h2>
                <form action="chk_regis.php" method="POST">
                    <input type="text" name="name" placeholder="Firs Name">
                    <input type="text" name="last" placeholder="Last Name">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineRadio1">ระบุเพศ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="sex" id="inlineRadio1" value="man">
                        <label class="form-check-label" for="inlineRadio1">ชาย</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="sex" id="inlineRadio1" value="woman">
                        <label class="form-check-label" for="inlineRadio1">หญิง</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="sex" id="inlineRadio1" value="other">
                        <label class="form-check-label" for="inlineRadio1">อื่นๆ</label>
                    </div>
				    <input type="text" name="email" placeholder="Email">
				    <input type="password" name="password" placeholder="Password">
                    <input type="submit" value="Register">
                </form>
			</div>
		</div>
	</div>
    <script src="assets/js/login.js"></script>
</body>
</html>