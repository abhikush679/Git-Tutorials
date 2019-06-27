<?php
	function test($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
	
include('library.php');
	$companyname=test($_POST["company_name"]);
	$fullname=test($_POST["fullname"]);
	$specialist=test($_POST["specialist"]);
    $email=test($_POST["email"]);
	$username=test($_POST["username"]);
	$password=md5(test($_POST["password"]));
	 $address=test($_POST["address"]);

if($_POST['login']){
	
		
	    $query="SELECT * FROM `doctor_register` WHERE `username`='$username'";
		$data=mysqli_query($abhi,$query);
		
		$row=mysqli_fetch_array($data);
		$num_rows=mysqli_num_rows($data);
	
		
		if($num_rows>0){
			
			?>
				<script type="text/javascript">	
                             alert("User Already Exists");
                            window.location="doctor-register.php";

</script>
			<?php	

		}
	else{
	$query="INSERT INTO `doctor_register`(`clinic_name`,`fullname`,`specialist`,`email`,`password`,`address`,`username`) VALUES('$companyname','$fullname','$specialist','$email','$password','$address','$username')";
	$data=mysqli_query($abhi,$query);
	if($data){	
		?>
		<script type="text/javascript">
		alert("Welcome Doctor You Are Successfully Registered");
		window.location="doctor-login.php";
	</script>
	<?php
	}
	else{
		echo(mysqli_error($abhi));
	}
	}
		}

else{
	
	//header('location:index.php');
}
	
	?>
	
	 



</body>
</html>