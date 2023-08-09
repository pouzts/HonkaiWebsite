<?php
include_once "MyHeader.php";

// Use this page to change the value of
// $_SESSION["isAdmin"] or such
//$dbConn = new mysqli($host, $username, $password, $database);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $dbConn = ConnGet(); // Get a database connection using the function from dbConnector.php

    // Perform SQL query to check user credentials
    $query = "SELECT * FROM myusers WHERE First_Name = '$username' AND Pswd = '$password'";
    $result = mysqli_query($dbConn, $query); // Use the database connection for the query

    if ($result && mysqli_num_rows($result) == 1) {
        // Login successful
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php"); // Redirect to dashboard or home page
        exit();
    } else {
        $error_message = "Invalid username or password";
    }

    mysqli_close($dbConn); // Close the database connection
}

//$dbConn->close();
?>
<center class="loginPage">
<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button class="loginButton" type="submit" name="login" value="login">Log In</button>
    <?php if (isset($error_message)) { echo "<p>$error_message</p>"; } ?>
</form>
</center>


<?php
include_once "MyHeader.php";
?>

