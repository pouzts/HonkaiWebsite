<?php
include_once "dbConnector.php";

header('Content-Type: application/json');

$json = "";
$row = null;
$charId = "";

if (array_key_exists("charId", $_GET)) {
    $dbConn = ConnGet();
    $charId = $_GET["charId"];
    $dataSet = GetCharacterDataById($dbConn, $charId);

    if ($dataSet) {
        if ($row = mysqli_fetch_array($dataSet)) {
            $json = '[{"jName":"' . $row['Name'] . '","jRarity":"' . $row['Rarity'] . '","jElement":"' . $row['Element'] . '","jPath":"' . $row['Path'] . '","jAffiliation":"'. $row['Affiliation'] .'"}]';
        }
    }
    mysqli_close($dbConn);
}

echo $json;

?>