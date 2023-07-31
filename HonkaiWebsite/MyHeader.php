<?php
session_start(); // Must be first, prior to any HTML. Session will expire

include_once "DbConnector.php";
include_once "Helper.php";

?>

<?php 

$myStyle = "1";

// Check for Priv setting
if (isset($_SESSION["isAdmin"]) == false) {
    $_SESSION["isAdmin"] = 0; // Set default
}
// Check for style setting
if (isset($_COOKIE["MyStyle"]) == true) {
    $myStyle = $_COOKIE["MyStyle"];
}
else
{
    // Set default style
    $_COOKIE["MyStyle"] = $myStyle;
}

$myTitle = "my title";
$MyHeader = "My Header";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta content="text/html; charset=ISO-8859-1"  http-equiv="content-type">
  <title><?php echo $myTitle ?></title>

    <!--
        <script src="/Scripts/jquery-ui-1.11.1.Redmond/jquery.js"></script>
        <script src="/Scripts/jquery-ui-1.11.1.Redmond/jquery-ui.js"></script>
        <link href="/Scripts/jquery-ui-1.11.1.Redmond/jquery-ui.css" rel="stylesheet" />
        -->
    <?php
    // Set style page
    switch ($myStyle) {
        case "1":
            echo '<link rel="stylesheet" type="text/css"  href="/css/myStyle1.css">';
            break;
        case "2":
            echo '<link rel="stylesheet" type="text/css"  href="/css/myStyle2.css">';
            break;
        case "3":
            echo '<link rel="stylesheet" type="text/css"  href="/css/myStyle3.css">';
            break;
        default:
            echo '<link rel="stylesheet" type="text/css"  href="/css/myStyle1.css">';
            break;
    }
    ?>

    <!-- 
  <link rel="stylesheet" type="text/css"  href="/MyStyle.php">
    -->
</head>
<body>

<h1><?php echo $MyHeader ?></h1>

<br />
    <!-- Get the menu items -->
<?php
$myDbConn = ConnGet();

// $recordset = MyPagesAllGet($myDbConn); 
$recordset = MyPagesGet($myDbConn, 0); 
// Display the main menu
MenuDisplay($recordset);
mysqli_free_result($recordset);

?>
    <!-- Add a link for the custom settings -->
    &nbsp; &nbsp;<a href="Preferences.php">My Preferences </a>

<?php

// Add a Admin link if. . . 
// $_SESSION["isAdmin"] = 1; // Cheat - Do not do this in your code. 
if ($_SESSION["isAdmin"] == 1) {
    echo '  &nbsp; &nbsp;<a href="ManagePages.php">Manage Pages</a>';
}
else {
    echo '  &nbsp; &nbsp;<a href="Login.php">Login</a>';
}


?>
<br />
<br />

