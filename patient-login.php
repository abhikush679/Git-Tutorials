<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Patient's Login</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="patient-login.css">
<script src="js/ajaxjquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/validation.js"></script>
</head>

<body>
<div class="container-fluid top">
	<img src="images/thefamilydoctor-logo6.png" class="img-responsive banner"width="600px">
</div>

<div class="container-fluid logg">
    	<div class="row">
	 <div class="col-md-6 col-md-offset-3">
            <div class="login-box log">
                   
                   
                    <form action="patient-login-back-page.php" method="post">
                        <legend class="text-center">Log In</legend>
                        <div class="form-group">
                            <input value="" tabindex="1" name="username" required placeholder="Username" type="text" class="form-control" />
                        </div>
                        
                        
                        <div class="form-group">
                            <input id="password" value='' tabindex="2"  required placeholder="Password" name="password" type="password" class="form-control" />
                        </div>
                        
                        
                        
                        	<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
								<label for="remember"> Remember Me</label>
						</div>
                        
                        
                        <div class="form-group">
                            <input type="submit" tabindex="4" name="login" class="btn btn-default btn-login-submit btn-block" value="Login" />
                        </div>
                        
                        
                       	<div class="form-group">
                       	<div class="row">
						<div class="col-lg-12">
						<div class="text-center">
						<a href="patient-forgot-password.php" tabindex="5" class="forgot-password">Forgot Password?</a>
						</div>
						</div>
						</div>
						</div>
                       
                        
                        
                        <div class="form-group">
                            <p class="text-center">Do not have an account?</p> 
                            <a href="patient-register-1.php" class="btn btn-default btn-block">Create an account</a>
                        </div>
                        
                           <div class="form-group">
                            <a href="index.php" class="btn btn-default btn-block">Home</a>
                        </div>
                        
                        
                    </form>
                
            </div>
        </div>
	
		</div>
	</div>
</body>
</html>