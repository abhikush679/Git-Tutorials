



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Patient's Registration</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="patient-register-1.css">
<script src="js/ajaxjquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/validation.js"></script>
</head>

<body>
<div class="container-fluid top">
	<img src="images/thefamilydoctor-logo6.png" class="img-responsive banner"width="600px">
</div>


<div class="container-fluid register">
<div class="row">
<div class="col-md-6 col-md-offset-3 com">

<form action="patient-register-2.php" method="post">
<legend class="text-center">Registration</legend>


<div class="form-group"> 
<input name="fullname" type="text" placeholder="Full Name" class="form-control" tabindex="1" required="">
</div>

<div class="form-group"> 
  <input id="mail" name="email" type="text" placeholder="Email" class="form-control" tabindex="2" required="">
</div>

<div class="form-group"> 
<input name="username" type="text" placeholder="Username" class="form-control" tabindex="3" required="">
</div>

<div class="form-group">
    <input name="password" type="password" placeholder="Password" class="form-control" tabindex="4" required="">
</div>

<div class="form-group">
    <input name="Password-Again" type="password" placeholder="Re enter Password"  tabindex="5" class="form-control" required="">
</div>

  <div class="form-group">                     
    <textarea class="form-control" name="address" placeholder="Address" required="" tabindex="6"></textarea>
</div>
     
     <div class="form-group">
      <input type="submit" name="login" tabindex="7" class="btn btn-default btn-login-submit btn-block" value="Next" />
  </div>
  
   <div class="form-group">
    <div class="row">
     <div class="col-md-6">
      <a href="patient-login.php"  tabindex="8" class="btn btn-default btn-block">Back</a>
      </div>
   
     <div class="col-md-6">
      <a href="index.php" tabindex="9" class="btn btn-default btn-block">Home</a>
      </div>
      </div>
      </div>
                    
  </form>



</div>
</div>
</div>

</body>
</html>