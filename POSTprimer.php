<?php
$type = $_POST['type'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

	if($type == "json"){
		header("Content-type: application/json");
		$json_array = array (
		'Name' => $name,
		'Age' => $age,
		'Gender' => $gender,
		
		);
		echo json_encode($json_array);
	}else {	
		header("Content-type: text/xml");
		$xml_array = array (
		$name => 'Name',
		$age => 'Age',
		$gender => 'Gender',
		
		);
		$xml = new SimpleXMLElement('<root/>');
		array_walk_recursive($xml_array, array ($xml, 'addChild'));
		print $xml->asXML();
}
?>