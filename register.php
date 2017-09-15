 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<style>
.content{
	margin:10% auto 10% auto;
	border:2px solid white;
	width: 600px;
	height:350px;
	border-radius:10px;
	color:white;
	font-weight:bold;
}

		</style>
		
	</head>
	<body>

<div class="content">	
</center>
 <?php
@require 'config.php';
if(isset($_POST['submit']))
{
    $name=($_POST['name']);
	$roll_no=($_POST['roll_no']);
	$school_name=($_POST['school_name']);
	$section=($_POST['section']);
	$standard=($_POST['standard']);
	$DOB=($_POST['DOB']);
	$gender=($_POST['gender']);
	$blood_group=($_POST['blood_group']);
	$blood_type=($_POST['blood_type']);
	$contact=($_POST['contact']);
    $email=($_POST['email']);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		 echo "Invalid Email Format ";
     }
	 else
	 {
			$sql=mysql_query("INSERT INTO `reportbee`.`student` (`name`, `section`, `standard_id`, `roll_no`, `school_id`, `DOB`, `gender`, `blood_group`, `blood_type`, `contact`, `email`) VALUES ('$name','$section',$standard,'$roll_no','$school_name','$DOB','$gender','$blood_group','$blood_type',$contact,'$email')");  
            echo "You have been successfully registered";			
  
	 }
} 
?>
</center>
</div>
</body>
</html>
