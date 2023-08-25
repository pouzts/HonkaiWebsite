<?php
include_once "dbConnector.php";

header('Content-Type: application/json');

$dbConn = ConnGet();
$jsonResult = GetAllCharacterDataJson($dbConn);

$json = null;
$row = null;

if ($jsonResult) {
    while ($row = mysqli_fetch_array($jsonResult)) {
        $rowArray[] = json_decode($row[0]);
    }

    $json = json_encode($rowArray);
}

mysqli_close($dbConn);

echo $json;
?>