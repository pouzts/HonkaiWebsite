<?php
include_once "dbConnector.php";

header('Content-Type: application/json');

$dbConn = ConnGet();

$charName = "";
$charRarity = "";
$charElement = "";
$charPath = "";
$charAffiliation = "";

if (array_key_exists("chara-name-search", $_GET)) {
    $charName = $_GET["chara-name-search"];
}

if (array_key_exists("chara-rarity-search", $_GET)) {
    $charRarity = $_GET["chara-rarity-search"];
}

if (array_key_exists("chara-element-search", $_GET)) {
    $charElement = $_GET["chara-element-search"];
}

if (array_key_exists("chara-path-search", $_GET)) {
    $charPath = $_GET["chara-path-search"];
}

if (array_key_exists("chara-affiliation-search", $_GET)) {
    $charAffiliation = $_GET["chara-affiliation-search"];
}

$jsonResult = GetCharactersFromSearch($dbConn, $charName, $charRarity, $charRarity, $path, $charAffiliation);
$row = null;
$json = null;

if ($jsonResult) {
    while ($row = mysqli_fetch_array($jsonResult)) {
        $rowArray[] = json_decode($row[0]);
    }

    $json = json_encode($rowArray);
}

mysqli_close($dbConn);

echo $json;
?>