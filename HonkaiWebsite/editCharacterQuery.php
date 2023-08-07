<?php
include_once "dbConnector.php";

header('Content-Type: application/json');

$myJSON = null;

if (array_key_exists("charID", $_GET) == TRUE) {
    $myDbConn = ConnGet();
    $charID = $_GET["charID"];
    $charName = $_GET["charName"];
    $charRarity = $_GET["charRarity"];
    $charElement = $_GET["charElement"];
    $charPath = $_GET["charPath"];
    $charAffiliation = $_GET["charAffiliation"];

    $DataSet = EditDataForCharacter($myDbConn, $charID, $charName, $charRarity, $charElement, $charPath, $charAffiliation);
    if ($DataSet) {
        $myJSON = "Character Edited";
    }
    mysqli_close($myDbConn);
}

echo $myJSON;
?>