<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<style>
.table
{
border:1px solid #4682b4;
border-width:1px;
border-color:#daa520;

}
.content
{
	width: 600px;
	height:400px;
	margin:10% auto 10% auto;
	border:2px solid #daa520;
	border-radius:10px;
	color:#4682b4;
	font-weight:bold;
	overflow:scroll;
	
}
th{
	padding:3px 12px;
	text-align:center;
	font-size:15px;
	font-style:italic;
	color:#daa520;
	background-color:#4682b4;
	border: 2px solid #daa520;
}
td{
	font-weight:bold;
	border:2px solid #daa520;
	text-align:center;
	padding:3px 3px;
	
}


		</style>
		
	</head>
	<body>

<div class="content">		
<ul>
<li><a href='birthday.php'>Birthday</a></li>
<li><a href='view_all_student.php'>View All Student</a></li>
<li><a href='section_a.php'>SECTION A</a></li>
<li><a href='order.php'>Order students</a></li>
<li><a href='#'>GIRL Students Of Negative Blood</a></li>
<li><a href='all.php'>All record</a></li>
</ul>
<br>
<br>
<?php
@require 'config.php';
 echo "<center><table border='1'>
<tr>
<th>name</th>
<th>School ID</th>
<th>Standard ID</th>
<th>Section</th>
</tr>";
 $query = mysql_query("SELECT * FROM student WHERE gender = 'Female' and  standard_id = '7' and blood_type = ''-''");
while($row=mysql_fetch_array($query))
  {
   echo "<tr>";
   echo "<td>" . $row['name'] . "</td>";
   echo "<td>" . $row['school_id'] . "</td>";
   echo "<td>" . $row['standard_id'] . "</td>";
   echo "<td>" . $row['section'] . "</td>";
   echo "</tr>";
  }
echo "</table></center>";
 
?>
</div>
</body>
</html>
