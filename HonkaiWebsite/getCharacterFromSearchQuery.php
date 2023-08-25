<?php
include_once "dbConnector";

$charName = "";
$charRarity = "";
$charElement = "";
$charPath = "";
$charAffiliation = "";

$dbConn = ConnGet();
$row = null;
$jsonResult = "";
$json = false;

if (array_key_exists("charaName", $_GET)) {
    $charName = $_GET["charaName"];
}

if (array_key_exists("charaName", $_GET)) {
    $charRarity = $_GET["charaRarity"];
}

if (array_key_exists("charaName", $_GET)) {
    $charRarity = $_GET["charaRarity"];
}

if (array_key_exists("charaName", $_GET)) {
    $charRarity = $_GET["charaRarity"];
}

if (array_key_exists("charaName", $_GET)) {
    $charRarity = $_GET["charaRarity"];
}

$jsonResult = GetCharactersFromSearch($dbConn, $charName, $charRarity, $charRarity, $path, $charAffiliation);

if ($jsonResult) {
    while ($row = mysqli_fetch_array($jsonResult)) {
        $rowArray[] = json_decode($row[0]);
    }

    $json = json_encode($rowArray);
}

mysqli_close($dbConn);

echo $json;
?>