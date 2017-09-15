<?php
@require("config.php");
	$query ="SELECT * FROM standard WHERE School_ID = '" . $_POST["id"] . "'";
	$results = mysql_query($query);
	$result_arr = array();
	while($row = mysql_fetch_assoc($results))
	{
		$result_arr[] = $row;
	}
	echo json_encode($result_arr);
?>