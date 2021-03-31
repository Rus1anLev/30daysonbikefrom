<?php 
include "../wp-config.php";
include "lang.php";

// Create connection
$mysqli = new mysqli(DB_HOST, DB_NAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$arrFrom = [
	"MINSK" => "Минск",
	"MINSKOBL" => "Минская область",
	"BRESTOBL" => "Брест и область",
	"VITEBSKOBL" => "Витебск и область",
	"GOMELOBL" => "Гомель и область",
	"GRODNOOBL" => "Гродно и обласать",
	"MOGILEVOBL" => "Могилев и область"
];

$totalCount = $mysqli->query("SELECT count(*) as COUNT FROM `30days_registers`")->fetch_assoc()["COUNT"];

$res = $mysqli->query("SELECT `FROM`, count(*) as COUNT FROM `30days_registers` GROUP BY `FROM`;");


$result = $res->fetch_all();
$result[] = [0 => "TOTAL", 1 => $totalCount];

$counters = [];

foreach ($result as $key => $item) {
	$counters[$item[0]] = $item[1];
}


 ?>