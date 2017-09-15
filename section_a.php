
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
<li><a href='birthday.php'>Birthday</a></li>
<li><a href='view_all_student.php'>View_all_student</a></li>
<li><a href='#'>SECTION A</a></li>
<li><a href='order.php'>Order students</a></li>
<li><a href='negative.php'>GIRL students of negative blood</a></li>
<li><a href='all.php'>All record</a></li>
</ul>
<br>
<br>
 <?php
	@require 'config.php'; 

 $query = mysql_query("SELECT * FROM student WHERE section = '1 ' or  section =  '8' or section = '12' or section = '4' ");
$num_rows = mysql_num_rows($query);
?><center><?php echo "Number of students studying in section A from all schools: " . $num_rows;?></center>
</div>
</body>
</html>
