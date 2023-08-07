<?php
include_once "dbConnector.php";

header('Content-Type: application/json');

$myJSON = null;

    if(array_key_exists("charName", $_GET) == TRUE){
        $myDbConn = ConnGet();
        $charName = $_GET["charName"];
        $charRarity = $_GET["charRarity"];
        $charElement = $_GET["charElement"];
        $charPath = $_GET["charPath"];
        $charAffiliation = $_GET["charAffiliation"];

        $DataSet = AddCharacterToDatabase($myDbConn, $charName, $charRarity, $charElement, $charPath, $charAffiliation);
        if ($DataSet) {
            $myJSON = "Character Added";
        }
    mysqli_close($myDbConn);
    }

echo $myJSON;
?>