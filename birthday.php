<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<style>
.content{
	margin:10% auto 10% auto;
	border:2px solid #daa520;
	width: 600px;
	height:350px;
	border-radius:10px;
	color:#4682b4;
	font-weight:bold;
}

		</style>
		
	</head>
	<body>

<div class="content">		
<ul>
<li><a href='#'>Birthday</a></li>
<li><a href='view_all_student.php'>View All Student</a></li>
<li><a href='section_a.php'>SECTION A</a></li>
<li><a href='order.php'>Order students</a></li>
<li><a href='negative.php'>GIRL Students Of Negative Blood</a></li>
<li><a href='all.php'>All record</a></li>
</ul>
<br>
<br>
 <?php
 @require 'config.php'; 
$query = mysql_query("SELECT * FROM student WHERE DATE(DOB) = CURDATE()");
$num_rows = mysql_num_rows($query);
?><center><?php echo "Number of students celebrating birthday: " . $num_rows;?></center>
</div>
</body>
</html>