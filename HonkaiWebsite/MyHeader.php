<?php
session_start(); // Must be first, prior to any HTML. Session will expire

include_once "DbConnector.php";
include_once "Helper.php";

?>

<?php

$myStyle = "1";

// Check for Priv setting
if (isset($_SESSION["isAdmin"]) == false) {
    $_SESSION["isAAdmin"] = 0; // Set default
} else{
    $_SESSION["isAAdmin"] = 1;
}
//set style
if (isset($_POST['preferencesSet'])) {
    $myStyle = $_POST['preferencesSet'];

    //You make me sad...
    setcookie("MyStyle", $_POST['preferencesSet']);
}
 //Check for style setting
if (isset($_COOKIE["MyStyle"]) == true) {
    $myStyle = $_COOKIE["MyStyle"];
} else {
    // Set default style
    $_COOKIE["MyStyle"] = $myStyle;
}

$myTitle = "HSR Team Builder";
$MyHeader = "HSR Team Builder";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta content="text/html; charset=ISO-8859-1"  http-equiv="content-type">
  <title><?php echo $myTitle ?></title>
  <script src="Scripts/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@400;500;600;700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <?php
    // Set style page
    switch ($myStyle) {
        case "1":
            echo '<link rel="stylesheet" type="text/css"  href="/styles/myStyle1.css">';
            break;
        case "2":
            echo '<link rel="stylesheet" type="text/css"  href="/styles/myStyle2.css">';
            break;
        case "3":
            echo '<link rel="stylesheet" type="text/css"  href="/styles/myStyle3.css">';
            break;
        case "4":
            echo '<link rel="stylesheet" type="text/css"  href="/styles/myStyle4.css">';
            break;
        default:
            echo '<link rel="stylesheet" type="text/css"  href="/styles/myStyle1.css">';
            break;
    }
    ?>

    <!-- 
  <link rel="stylesheet" type="text/css"  href="/MyStyle.php">
    -->
</head>
<body>
    <center>
<h1 class="pageHeader"><?php echo $MyHeader ?></h1>
    </center>

<br />
    <div class="navBar">
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
    &nbsp; &nbsp;<a class="menuItems" href="Preferences.php">My Preferences </a>

<?php

// Add a Admin link if. . . 
// $_SESSION["isAdmin"] = 1; // Cheat - Do not do this in your code. 
if ($_SESSION["isAAdmin"] == 1) {
    echo '  &nbsp; &nbsp;<a class="menuItems" href="CharactersPage.php">View Characters</a>';
    echo '  &nbsp; &nbsp;<a class="menuItems" href="ManageCharacterPage.php">Manage Characters</a>';
    echo '  &nbsp; &nbsp;<a class="menuItems" href="addImages.php">Manage Images</a>';
    echo '  &nbsp; &nbsp;<a class="menuItems" href="Login.php">Login</a>';
} else {
    echo '  &nbsp; &nbsp;<a class="menuItems" href="CharactersPage.php">View Characters</a>';
    echo '  &nbsp; &nbsp;<a class="menuItems" href="Login.php">Login</a>';
}
?>
    </div>
<br />
<br />

