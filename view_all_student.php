<!DOCTYPE html>
<html>
<head>
<style>
.table
{
border:1px solid #4682b4;
border-width:1px;
border-color:#daa520;

}
.content
{
	width: auto;
	height:auto;
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
<div class="content">		
<ul>
<li><a href='birthday.php'>Birthday</a></li>
<li><a href='#'>View All Student</a></li>
<li><a href='section_a.php'>SECTION A</a></li>
<li><a href='order.php'>Order students</a></li>
<li><a href='negative.php'>GIRL Students Of Negative Blood</a></li>
<li><a href='all.php'>All record</a></li>
</ul>
<br>
<br>
<?php
@require 'config.php';
 
$result = mysql_query("SELECT * FROM student");
 
echo "<table border='1'>
<tr>
<th>NAME</th>
<th>SECTION ID</th>
<th>STANDARD ID</th>
<th>ROLL NO</th>
<th>SCHOOL ID</th>
<th>DOB</th>
<th>GENDER</th>
<th>BLOOD GROUP</th>
<th>BLOOD TYPE</th>
<th>CONTACT</th>
<th>EMAIL</th>
</tr>";
 
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['section'] . "</td>";
					echo "<td>" . $row['standard_id'] . "</td>";
					echo "<td>" . $row['roll_no'] . "</td>";
					echo "<td>" . $row['school_id'] . "</td>";
					echo "<td>" . $row['DOB'] . "</td>";
					echo "<td>" . $row['gender'] . "</td>";
					echo "<td>" . $row['blood_group'] . "</td>";
					echo "<td>" . $row['blood_type'] . "</td>";
					echo "<td>" . $row['contact'] . "</td>";
				    echo "<td>" . $row['email'] . "</td>";

	echo "</tr>";
  }
echo "</table>";
 
?>
<br>
<br>
</div>
</body>
</html>