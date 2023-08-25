<?php
include_once "MyHeader.php";
if (isset($_GET['image_id'])) {
    $sql = "SELECT imageType,imageData FROM myimages WHERE imageId=?";
    $statement = $myDbConn->prepare($sql);
    $statement->bind_param("i", $_GET['image_id']);
    $statement->execute() or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . $statement->error);
    $result = $statement->get_result();

    $row = $result->fetch_assoc();
    $mystring = $row['imageType'];
    $myimage = $row['imageData'];
    $myType = gettype($myimage);
    //$type = vartype($myimage);
    //$im = imagecreatefrompng($row['imageData']);
    $header = "Content-type: " . $row["imageType"];
    header($header);
    //imagepng($myimage);
    echo $row['imageData'];
    //echo $im;
}

?>