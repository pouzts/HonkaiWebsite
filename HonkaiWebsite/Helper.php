<?php
 include_once "dbConnector.php";
?>

<?php
// //////////////////////////////////////////////////
function MenuDisplay($dataset) {

// &nbsp; &nbsp;<a href="ContactUs.php">

    if ($dataset){
        // per.Fname, per.Lname, cel.Cell_Id, cel.CellNumber
        while($row = mysqli_fetch_array($dataset)){
            echo ' &nbsp; &nbsp; <a class="menuItems" href="Index.php?PageId=' . $row['id'] .  '" >' . $row['Title'] . '</a>';
        }
    } // End if
    else {
        echo "No menu items<br />";
        //echo mysqli_error($myDbConn);
    }

}
// /////////////////
function PageDisplay($PageData) {

    if ($PageData){
        // per.Fname, per.Lname, cel.Cell_Id, cel.CellNumber
        $row = mysqli_fetch_array($PageData);

        echo ' &nbsp; &nbsp; <h2> ' . $row['Header1'] .  ' </h2> <br />';
        echo ' &nbsp; &nbsp; <p> ' . $row['Text1'] .  '</p> <br />';

    } // End if
    else {
        echo "No Page data to display <br />";
    }

}


?>