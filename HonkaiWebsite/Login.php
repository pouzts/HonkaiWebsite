<?php
include_once "MyHeader.php";

// Use this page to change the value of
// $_SESSION["isAdmin"] or such

?>
<form method="post" action="" name="signup-form">
    <br />                                                                
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <br />
    <div class="form-element">
        <label>Email</label>
        <input type="email" name="email" required />
    </div>
    <br />                        
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <br />
    <button type="submit" name="register" value="register">Register</button>
</form>


<?php
include_once "MyHeader.php";
?>

