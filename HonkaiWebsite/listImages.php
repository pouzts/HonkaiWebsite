<?php
include_once "MyHeader.php";
$sql = "SELECT imageId FROM myimages ORDER BY imageId DESC";
$stmt = $myDbConn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
?>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
<?php ?>
<img src="imageView.php?image_id=<?php echo $row["imageId"];?>" />
<?php
    }
}
?>