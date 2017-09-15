
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>STUDENTS RECORD</title>
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
function getsection(val) {
	$.ajax({
	type: "POST",
	url: "get_section.php",
	data:'id='+val,
	success: function(data){
	$("#section_id_list").html('<option value="">Select section</option>');
	var parseData = JSON.parse(data);
	var size = parseData.length;
	for(var i=0; i<size; i++)
	{
		$("#section_id_list").append('<option value="'+parseData[i].ID+'">'+parseData[i].Section_Name+'</option>');
	}
	}
	});
}
function checkLength(el) {
  if (el.value.length != 10) {
    alert(" contact length must be 6-10 characters")
  }
}
</script>
<style>

body
{
background-image :url("Niit University.jpg");
background-repeat:no-repeat;  
max-width: 100%;
height: auto;
position: relative;
background-size: 100% 100%;
background-attachment:fixed;  
}

h1
{ 
font-size: 100px;
text-align :center;
color: #990000;

margin-top: 25px;
text-shadow: -2px -2px 1px #666666,
                       1px 1px 3px #FFFFFF;

}

h3
{ 
font-size: 50px;
text-align :center;
color: #990000;

margin-top: 25px;
text-shadow: -2px -2px 1px #666666,
                       1px 1px 3px #FFFFFF;

}
.form-horizontal
{
width: 100%;
height: 100%;
background-color: rgba(0, 26,0,0.4);
padding-top: 10px;
padding-left: 50px;
padding-bottom:30px;
border-radius: 15px;
-webkit-border-radius:15px;
-o-border-radius:15px;
-moz-border-radius:15px;
colour:white;
font-weight: bolder;
box-shadow: inset -4px -4px rgba(0,0,0,0.5);
font-size: 28px;
color:#CCCCCC;
}

input,select{
width: 300px;
height: 40px;
padding-left:5px;
border:1;
border-radius: 5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
}
.button{
	border: 2px solid ;
	color:#990000;
	border-radius:5px;
	background-color:white;
	font-weight:bold;
}

.button:hover{
	color:#4682b4;
}

</style>
</head>
<body> 
<h1>Student Records</h1>
<form class="form-horizontal" action="register.php" method="post">

<!-- Form Name -->
<h3><legend>Registration Form</legend></h3>
 
  <label  for="name">Name:</label>  
 <div>
  <input id="name" name="name" type="varchar" placeholder="Enter the name" required="">
   
  </div>
<br>


  
  <label for="schoo_name" >School:</label>
  <div>
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
		</div>
        <br>
	
		<label for="standard" >Standard:</label>
		<div>
		<select id="standard_list" name="standard" onchange="getsection(this.value);"  >
		<option value="">Select Standard</option>
		</select>
		</div>
		<br>
  
  
  <label for="section" >Section:</label>
		<div>
		<select id="section_id_list" name="section">
		<option value="">Select Section</option>
		</select>
		</div>
		<br>
		
		<label  for="roll_no">ROLL NUMBER:</label>  
  <div>
  <input id="roll_no" name="roll_no" type="varchar"  placeholder="Section ID-roll_no"  required="">
  </div>
  <br>
  
		<label  for="DOB">DOB:</label>  
  <div>
  <input id="DOB" name="DOB" type="DATE" placeholder="Enter date of birth" required="">
   </div> 
 <br>
 
   <label for="gender">GENDER:</label>
  <div >
    <select id="gender" name="gender">
      <option value="-1">Select</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
	   <option value="Others">Others</option>
    </select>
    </div>
  <br>
  
<label for="blood_group">BLOOD GROUP:</label>
   <div>
    <select id="blood_group" name="blood_group">
      <option value="-1">Select</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="AB">AB</option>
      <option value="O">O</option>
    </select>
    </div>
<br>

<label for="blood_type">BLOOD TYPE:</label>
   <div>
    <select id="blood_type" name="blood_type">
      <option value="-1">Select</option>
      <option value="'+'">POSITIVE</option>
      <option value="'-'">NEGATIVE</option>
    </select>
    </div>
<br>

  <label for="contact">Contact No:</label>  
  <div>
  <input id="contact" name="contact" type="number" onblur="checkLength(this)" placeholder="Enter your contact no." class="form-control input-md" required="">
 </div>
 
 <br>
 <label  for="email"> Email Address:</label>  
  <div>
  <input id="email" name="email" type="varcahr" placeholder="Enter your email id"  required="">
   </div>		
   
   <br>
  

   
   <center>  <input class="button" type="submit" name="submit"  value="REGISTER" > </center>
</form>
</body>
</html>