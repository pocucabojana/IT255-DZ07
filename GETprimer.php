<?php
		header("Content-type: application/json");
		$json_array = array (
		'Name' => 'Benedict',
		'Age' => '26',
		'Gender' => 'male',
		);
		echo json_encode($json_array);
	
?>