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
	width: 1000px;
	height:600px;
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
.button{
	border: 2px solid #4682b4 ;
	color:#daa520;
	border-radius:5px;
	background-color:white;
	font-weight:bold;
}

.button:hover{
	color:#4682b4;
}

		</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
		function getStandard(val) {
	$.ajax({
	type: "POST",
	url: "get_standard.php",
	data:'id='+val,
	success: function(data){
	$("#standard_list").html('<option value="">Select standard</option>');
	var parseData = JSON.parse(data);
	var size = parseData.length;
	for(var i=0; i<size; i++)
	{
		$("#standard_list").append('<option value="'+parseData[i].ID+'">'+parseData[i].Standard_Name+'</option>');
	}
	}
	});
}
</script>
	</head>
	<body>
<form class="form-horizontal" action="#" method="post">
<div class="content">		
<ul>
<li><a href='birthday.php'>Birthday</a></li>
<li><a href='view_all_student.php'>View All Student</a></li>
<li><a href='section_a.php'>SECTION A</a></li>
<li><a href='#'>Order students</a></li>
<li><a href='negative.php'>GIRL Students Of Negative Blood</a></li>
<li><a href='all.php'>All record</a></li>
<li><a href='Index.php'>Registration page</a></li>
</ul>
<br>
<br>

 <label style="padding-left: 150px"  for="schoo_name" >School:</label>
		<select name="school_name" id="school_name"  onChange="getStandard(this.value);">
		<option value="">Select School</option>
		 <?php
	  @require 'config.php';
      $sql = "SELECT * From school";
      $result=mysql_query($sql);
      while($row=mysql_fetch_array($result))
          echo "<option value='" . $row['ID'] . "'>" . $row['School_Name'] . "</option>";
   ?>
		</select>

		
		<label style="padding-left: 310px" for="standard" >Standard:</label>
		<select id="standard_list" name="standard">
		<option value="">Select Standard</option>
		</select>
		<br>
		<br>
		<center><input class="button" type="submit" name="submit"  value="VIEW" ></center>
		

</form>

<?php
@require 'config.php';
if(isset($_POST['submit']))
{
    $school_name=($_POST['school_name']);
	$standard=($_POST['standard']);
	$query = "SELECT * From student where school_id= '".$school_name."' and standard_id = '".$standard."' ORDER BY name";
	$sql = mysql_query($query);
	
	  echo "<br>
	  <table border='1'>
<tr>
<th>NAME</th>
<th>SECTION ID</th>
<th>ROLL NO</th>
<th>DOB</th>
<th>GENDER</th>
<th>BLOOD GROUP</th>
<th>BLOOD TYPE</th>
<th>CONTACT</th>
<th>EMAIL</th>
</tr>";
while($row = mysql_fetch_assoc($sql))
  {
  echo "<tr>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['section'] . "</td>";
					echo "<td>" . $row['roll_no'] . "</td>";
					echo "<td>" . $row['DOB'] . "</td>";
					echo "<td>" . $row['gender'] . "</td>";
					echo "<td>" . $row['blood_group'] . "</td>";
					echo "<td>" . $row['blood_type'] . "</td>";
					echo "<td>" . $row['contact'] . "</td>";
				    echo "<td>" . $row['email'] . "</td>";

	echo "</tr>";
  }
echo "</table>
</center>";
	
	}
?>
</div>
</body>
</html>
