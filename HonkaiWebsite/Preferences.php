<?php
include_once "MyHeader.php";

// Use this page to change the value of
// $_COOKIE["MyStyle"] or such

?>
<center class="preferenceButtons">
    <form method="post">
    <button type="submit" name="preferencesSet" value="1" onclick="preferenceSet()">Preference 1</button>
    <button type="submit" name="preferencesSet" value="2" onclick="preferenceSet()">Preference 2</button>
    <button type="submit" name="preferencesSet" value="3" onclick="preferenceSet()">Preference 3</button>
    <button type="submit" name="preferencesSet" value="4" onclick="preferenceSet()">Preference 4</button>
    </form>            
</center>

<script>
    function preferenceSet(val) {
        setcookie("MyStyle", val, time() + 3600);
    }
</script>

<?php
include_once "MyHeader.php";
?>

