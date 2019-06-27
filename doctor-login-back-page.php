<?php


if($_POST['login']){
	include('library.php');
	
		
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		
	    $query="SELECT * FROM `doctor_register` WHERE `username`='$username'";
		$data=mysqli_query($abhi,$query);
		
		$row=mysqli_fetch_array($data);
		$num_rows=mysqli_num_rows($data);
		
		if($num_rows>0){
			
			if($row['password']==$password){	
		
				
				echo"welcome ".$row['fullname'];
				
				//header('location:profile.php');
			}
			else{
				?>
				
							<script type="text/javascript">	
                             alert("incorrect username/password");
                            window.location="doctor-login.php";

</script>
		<?php
								}
		}
		else{
			?>
				
							<script type="text/javascript">	
                             alert("incorrect username/password");
                            window.location="doctor-login.php";

</script>
		<?php
		}
		
	}

else{
	
	//header('location:index.php');
}
?>
