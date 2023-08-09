<?php
include_once "dbConnector.php";

header('Content-Type: application/json');

$myJSON = null;

if (array_key_exists("charID", $_GET) == TRUE) {
    $myDbConn = ConnGet();
    $charID = $_GET["charID"];

    $DataSet = RemoveCharacterToDatabase($myDbConn, $charID);
    if ($DataSet) {
        $myJSON = "Character Removed";
    }
    mysqli_close($myDbConn);
}

echo $myJSON;
?>