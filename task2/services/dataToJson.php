<?php
// Performs a SQL Query
// That incorporates a left outer join
// and returns JSON

// Increase memory limit
ini_set('memory_limit', '512M');

// Insert DB Connect
// Example: include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

try
{
	$sql = 'SELECT numbers FROM data';
	$result = $pdo->query($sql);
}
catch (PDOException $e)
{
	$error = 'Error fetching data: ' . $e->getMessages();
	include 'error.html.php';
	exit();
}

while ($row = $result->fetch())
{
	$data[] = $row;
}

$struct = array("Data" => $data);
print json_encode($struct);

?>