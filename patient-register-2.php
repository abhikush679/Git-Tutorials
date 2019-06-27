


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Complete Profile</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="patient-register-2.css">
<script src="js/ajaxjquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/validation.js"></script>
</head>

<body>

<?php
	function test($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
	
include('library.php');
	
	$fullname=test($_POST["fullname"]);
    $email=test($_POST["email"]);
	$password=(test($_POST["password"]));
	 $address=test($_POST["address"]);
	 $username=test($_POST["username"]);
	
	
if($_POST['login']){
	
	
	    $query="SELECT * FROM `patient_register` WHERE `username`='$username'";
		$data=mysqli_query($abhi,$query);
		
		$row=mysqli_fetch_array($data);
		$num_rows=mysqli_num_rows($data);
	
		
		if($num_rows>0){
			
			?>
				<script type="text/javascript">	
                             alert("User Already Exists");
                            window.location="patient-register-1.php";

</script>
			<?php	

		}
	else{		
		
	?>
<div class="container-fluid top">
	<img src="images/thefamilydoctor-logo6.png" class="img-responsive banner"width="600px">
</div>


<div class="container-fluid register">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="profile-box">


<form action="patient-register-back-page.php" method="post" enctype="multipart/form-data">
<legend class="text-center">Complete Your Profile</legend>

	<div class="form-group">
		<input name="image" type="file" tabindex="1" title="Upload Your Photo" data-toggle="tooltip" class="form-control" required="">
</div>

<div class="form-group">
		<input name="father" type="text" tabindex="2" class="form-control" placeholder="Father's Name" required="">
</div>

 <input type="hidden" name="username" value="<?php echo $username; ?>" >
 <input type="hidden" name="fullname" value="<?php echo $fullname; ?>" >
  <input type="hidden" name="email" value="<?php echo $email; ?>">
  <input type="hidden" name="password" value="<?php echo $password; ?>">
  <input type="hidden" name="address" value="<?php echo $address; ?>"> 


<div class="form-group">
		<input name="mother" tabindex="3" type="text" class="form-control" placeholder="Mother's Name" required="">
</div>
 
 <div class="row">
<div class="col-md-6">
<div class="form-group">
 	 <input name="mob_number" type="number" placeholder="Mobile No." class="form-control" tabindex="4" required="">
</div>
</div>
	
	
<div class="col-md-6">
<div class="form-group">
 	 <input name="alt_mob_number" type="number" placeholder="Alternate Mobile No." class="form-control" tabindex="5" required="">
</div>
</div>
</div>

 <div class="row">
  <div class="col-md-6">
	 <div class="form-group">
 	 <input name="age" type="number" placeholder="Age" class="form-control" tabindex="6" required="">
 	 
</div>
	 </div>
 
 
	<div class="col-md-6">
	<div class="form-group">
	 <input name="dob" type="date" title="Date Of Birth" data-toggle="tooltip" class="form-control" tabindex="7" required="">	
	</div>
</div>
	</div> 
 
 
<div class="row">
	<div class="col-md-3">
	<div class="form-group">
	<div class="radio">
	<label><input name="gender" type="radio" value="male" tabindex="8" required="">Male</label>
	</div>	
	</div>
	</div>

	<div class="col-md-3">
	<div class="form-group">
	<div class="radio">
	<label><input name="gender" type="radio" value="female" tabindex="9" required="">Female</label>
	</div>	
	</div>
</div>

	<div class="col-md-6">
  <select class="form-control" tabindex="10" name="blood_group" required >
    <option value="" disabled selected>Blood Group</option>
    <option value="A+">A+</option>
      <option value="A-">A-</option>
        <option value="B+">B+</option>
          <option value="B-">B-</option>
            <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
  </select>
	</div>
</div>
 
   
  <div class="form-group">
     	  <input type="submit" name="login" tabindex="11" class="btn btn-default btn-login-submit btn-block" value="Complete Registration" />   
  </div>


	</form>
</div>	
	</div>
	</div>	
	</div>
	
<?php
	}
}
	else{}
	?>
	
</body>
</html>