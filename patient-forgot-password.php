<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Get your Password</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="patient-forgot-password.css">
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
                   
                   
                    <form action="patient-forgot-password-back-page.php" method="post">
                        <legend class="text-center">Reset Your Password</legend>
                       
                       <div class="form-group">
                            <input value="" tabindex="1" name="username" required placeholder="Username" type="text" class="form-control" />
                        </div>
                  
                      <div class="form-group">
                      <label>Enter Your Date Of Birth:</label>
	 <input name="dob" type="date" title="Date Of Birth" data-toggle="tooltip" class="form-control" tabindex="7" required="">	
	</div>
                        
                        
                        <div class="form-group">
                            <input value='' tabindex="3"  required placeholder="New Password" name="new_password" type="password" class="form-control" />
                        </div>
                        
                           <div class="form-group">
                            <input value='' tabindex="4"  required placeholder="Confirm Password" name="confirm_password" type="password" class="form-control" />
                        </div>
                        
                      
                        
                        <div class="form-group">
                            <input type="submit"  tabindex="5" name="login" class="btn btn-default btn-login-submit btn-block" value="Reset" />
                        </div>
                    
                       
    <div class="form-group">
    <div class="row">
     <div class="col-md-6">
      <a href="patient-login.php"  tabindex="6" class="btn btn-default btn-block">Back</a>
      </div>
   
     <div class="col-md-6">
      <a href="index.php" tabindex="7" class="btn btn-default btn-block">Home</a>
      </div>
      </div>
      </div>
                        
                  
                        
                    </form>
                
            </div>
        </div>
	
		</div>
	</div>

</body>
</html>