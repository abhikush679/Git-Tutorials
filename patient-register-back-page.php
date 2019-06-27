





<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>

<?php 
	include('library.php');
	
	
	$age=$_POST['age'];
	$mob_number=$_POST['mob_number'];
	$alt_mob_number=$_POST['alt_mob_number'];
	$gender=$_POST['gender'];
	$username=$_POST['username'];
	$fullname=$_POST["fullname"];
    $email=$_POST["email"];
	$password=md5($_POST["password"]);
	$address=$_POST["address"];
	$fathername=$_POST['father'];
	$mothername=$_POST['mother'];
	$dob=$_POST['dob'];
	$blood_group=$_POST['blood_group'];
	
	
	$img=$_FILES['image']['name'];
$tmp_name=$_FILES['image']['tmp_name'];

$data=move_uploaded_file($_FILES['image']['tmp_name'],'uploads/'.$img);
	
	
	$query="INSERT INTO `patient_register`(`fullname`,`email`,`password`,`address`,`username`,`blood_group`,`dob`,`mother_name`,`father_name`,`age`,`mob_number`,`alt_mob_number`,`gender`,`image`) VALUES('$fullname','$email','$password','$address','$username','$blood_group','$dob','$mothername','$fathername','$age','$mob_number','$alt_mob_number','$gender','$img')";
	$data=mysqli_query($abhi,$query);
	if($data){
		 
		
		?>
		<script type="text/javascript">
		alert("Patient Successfully Registered");
		window.location="patient-login.php";
	</script>
	<?php

	
		
		
		
	}
	else{
		echo(mysqli_error($abhi));
	}
		

	
	
?>
</body>
</html>