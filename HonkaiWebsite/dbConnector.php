<?php

// Create constants
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', 'password'); //Change to your password
DEFINE ('DB_SERVER', 'localhost');
DEFINE ('DB_NAME', 'mytestdb');

// ///////////////////////////////////////////////////
// Get db connection
function ConnGet() {
    // $dbConn will contain a resource link to the database
    // @ Don't display error
    $dbConn = @mysqli_connect(DB_SERVER, DB_USER, DB_PSWD, DB_NAME, 3306)
    OR die('Failed to connect to MySQL ' . DB_SERVER . '::' . DB_NAME . ' : ' . mysqli_connect_error()); // Display messge and end PHP script

    return $dbConn;
}
// ///////////////////////////////////////////////////
// Get Select records based on the Parent Id
function MyPagesGet($dbConn, $Parent=0) {
    $query = "SELECT id, Title, Header1, Text1 FROM MyWebDocs where isActive = 1 and ParentPage = " . $Parent . " order by ParentPage asc, SortOrder Asc;";
    // SELECT id, Title, Header1, Text1 FROM MyWebDocs where isActive = 1 and ParentPage = " . $Parent . " order by ParentPage asc, SortOrder Asc;

    return @mysqli_query($dbConn, $query);
}
// ///////////////////////////////////////////////////
// Get all the page records
function MyPagesAllGet($dbConn) {
    $query = "SELECT id, Title, Header1, Text1, ParentPage, SortOrder, isActive FROM MyWebDocs order by ParentPage asc, SortOrder Asc;";

    return @mysqli_query($dbConn, $query);
}
// ///////////////////////////////////////////////////
// Get Select page
function PageContentGet($dbConn, $Id) {
    $return = null;

    $query = "SELECT id, Title, Header1, Text1 FROM MyWebDocs where isActive = 1 and id = " . $Id;
    $return = @mysqli_query($dbConn, $query);

    if ((!$return) || ($return->num_rows < 1)){
        // return a defaul fault page
        $query = "SELECT id, Title, Header1, Text1 FROM MyWebDocs where isActive = 1 order by SortOrder asc limit 1;";

        $return = @mysqli_query($dbConn, $query);
    }

return $return;
}

// ///////////////////////////////////////////////////
// Get all the page records
function MyPageremove($dbConn, $Id) {

    // Never delete a page. set it to incative
    $query = "Update FROM MyWebDocs set isActive = 0 where id = " . $Id;

    return @mysqli_query($dbConn, $query);
}

function GetCharacterDataByID($dbConn, $Id){
    $query = "select * from mycharacters where id = " . $Id . ";";

    return @mysqli_query($dbConn, $query);
}

function AddCharacterToDatabase($dbConn, $charName, $charRarity, $charElement, $charPath, $charAffiliation){
    $query = "INSERT INTO `mytestdb`.`mycharacters` (`name`, `rarity`, `element`, `path`, `affiliation`) VALUES ('" . $charName . "', '" . $charRarity . "', '" . $charElement . "', '" . $charPath . "', '" . $charAffiliation . "');";

    return @mysqli_query($dbConn, $query);
}

function RemoveCharacterToDatabase($dbConn, $Id){
    $query = "Update `mytestdb`.`mycharacters` set isActive = 0 where id = " . $Id;

    return @mysqli_query($dbConn, $query);
}

function EditDataForCharacter($dbConn, $Id, $charName, $charRarity, $charElement, $charPath, $charAffiliation){
    $query = "UPDATE `mytestdb`.`mycharacters` SET `name` = '" . $charName . "', `rarity` = '" . $charRarity . "', `element` = '" . $charElement . "', `path` = '" . $charPath . "', `affiliation` = '" . $charAffiliation . "' WHERE (`id` = '" . $Id . "');";

    return @mysqli_query($dbConn, $query);
}

?>


