<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>doctor's register</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="doctor-register.css">
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
<div class="col-md-6 col-md-offset-3 box">

<form action="doctor-register-back-page.php" method="post">
<legend class="text-center">Registration</legend>

<div class="form-group">
  <input name="company_name" type="text" placeholder="Clinic Name / Hospital Name" class="form-control" tabindex="1" required="">
</div>

<div class="form-group">                     
    <textarea class="form-control" name="address" placeholder="Address" required="" tabindex="2"></textarea>
</div>


<div class="form-group"> 
<input name="fullname" type="text" placeholder="Full Name" class="form-control" tabindex="3" required="">
</div>


<div class="form-group">
 <select  class="form-control" tabindex="4" name="specialist" required="" >
    <option value="" disabled selected>Specialist In</option>
    <option value="Heart">Heart</option>
      <option value="Stomach">Stomach</option>
        <option value="Legs">Legs</option>
          <option value="Hands">Hands</option>
            <option value="Liver">Liver</option>
	 <option value="Fingers">Fingers</option>
  </select>
  </div>


<div class="form-group"> 
  <input id="mail" name="email" type="text" placeholder="Email" class="form-control" tabindex="5" required="">
</div>

<div class="form-group"> 
  <input name="username" type="text" placeholder="Username" class="form-control" tabindex="6" required="">
</div>



<div class="form-group">
    <input name="password" type="password" placeholder="Password" class="form-control" tabindex="6" required="">
</div>

<div class="form-group">
    <input name="Password-Again" type="password" placeholder="Re enter Password"  tabindex="7" class="form-control" required="">
</div>

   
  <div class="form-group">
      <input type="submit" name="login" class="btn btn-default btn-login-submit btn-block" value="Next" />
  </div>
  
   <div class="form-group">
     <div class="col-md-6">
      <a href="doctor-login.php" class="btn btn-default btn-block">Back</a>
      </div>
      </div>
            
             <div class="form-group">
     <div class="col-md-6">
      <a href="index.php" class="btn btn-default btn-block">Home</a>
      </div>
      </div>
  
  
  </form>


</div>
</div>
</div>

</body>
</html>