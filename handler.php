<?php 
if (!empty($_GET)) {

	if (empty($_GET["name"]) || empty($_GET["from"]) || !array_key_exists($_GET["from"], $arrFrom)) {

		die(json_encode(
			[
				"status" => "error", 
				"headline" => $lang["ERROR_REGISTER_HEADLINE"], 
				"text" => $lang["ERROR_REGISTER_TEXT"]
			]
		));

	}

	$name = $_GET["name"];
	$from = $_GET["from"];
	
	$sqlInsert = "INSERT INTO `30days_registers` (`ID`, `NAME`, `FROM`, `DATE`) VALUES (NULL, '$name', '$from', current_timestamp());";

	$res = $mysqli->query($sqlInsert);
	
	if ($res) {

		die(json_encode(
			[
				"status" => "success", 
				"headline" => $lang["SUCCESS_REGISTER_HEADLINE"], 
				"text" => $lang["SUCCESS_REGISTER_TEXT"]
			]
		));

	} else {

		die(json_encode(
			[
				"status" => "error", 
				"headline" => $lang["ERROR_OURSIDE_HEADLINE"], 
				"text" => $lang["ERROR_OURSIDE_TEXT"]
			]
		));

	}

}
?>