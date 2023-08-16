<?php
include_once "MyHeader.php";
?>

<div class="manageCharacters">
Input Character ID to change: &nbsp;
<input type="number" id="charID" value="" placeholder="" title="theInput" />
Character's Name : &nbsp;
<input type="text" id="charName" value="" placeholder="name" />
Character's Rarity : &nbsp;
<input type="number" id="charRarity" value="" placeholder="1" />
Character's Element : &nbsp;
<input type="text" id="charElement" value="" placeholder="Null" />
Character's Path : &nbsp;
<input type="text" id="charPath" value="" placeholder="The Path" />
Character's Affiliation : &nbsp;
<input type="text" id="charAffiliation" value="" placeholder="Honkai" />
</div>

<center class="manageButtons">
<button name="addButton" onclick="onAddButtonClick()">Add New</button>
<button name="editButton" onclick="onEditButtonClick()">Edit</button>
<button name="removeButton" onclick="onRemoveButtonClick()">Remove</button>
</center>

<p id="jsonData"></p>
<p id="tableData"></p>

<script>
    var request = new XMLHttpRequest();

    $(document).ready(function() {
        loadData();
    });

    function loadData() {
        request.open("GET", "../getCharacterTableQuery.php");
        request.onload = loadTable;
        request.send();
    }

    function onAddButtonClick() {
        addCharacter(document.getElementById("charName").value, document.getElementById("charRarity").value, document.getElementById("charElement").value, document.getElementById("charPath").value, document.getElementById("charAffiliation").value);
    }

    function onEditButtonClick() {
        editCharacter(document.getElementById("charID").value, document.getElementById("charName").value, document.getElementById("charRarity").value, document.getElementById("charElement").value, document.getElementById("charPath").value, document.getElementById("charAffiliation").value);
    }

    function onRemoveButtonClick() {
        removeCharacter(document.getElementById("charID").value);
    }

    function addCharacter(charName, charRarity, charElement, charPath, charAffiliation) {
        request.open('GET', 'addCharacterQuery.php?charName=' + charName + '&charRarity=' + charRarity + '&charElement=' + charElement + '&charPath=' + charPath + '&charAffiliation=' + charAffiliation);
        document.getElementById("jsonData").innerHTML = "Character Added";
        request.send();
    }

    function editCharacter(charID, charName, charRarity, charElement, charPath, charAffiliation) {
        request.open('GET', 'editCharacterQuery.php?charID=' + charID + '&charName=' + charName +  '&charRarity=' + charRarity + '&charElement=' + charElement + '&charPath=' + charPath + '&charAffiliation=' + charAffiliation);
        document.getElementById("jsonData").innerHTML = "Character Edited";
        request.send();
    }

    function removeCharacter(charID) {
        request.open('GET', 'removeCharacterQuery.php?charID=' + charID);
        document.getElementById("jsonData").innerHTML = "Character Removed";
        request.send();
    }

    function loadTable(evt) {
        var myResponse;
        var myData;
        var myReturn = "<table><tr><td>ID &nbsp;  &nbsp; </td><td>Name &nbsp;  &nbsp; </td><td>Rarity &nbsp;  &nbsp; </td><td>Element &nbsp;  &nbsp; </td><td>Path &nbsp;  &nbsp; </td><td>Affiliation &nbsp;  &nbsp; </td><td>Is Active &nbsp;  &nbsp; </td></tr>";

        myResponse = request.responseText;
        //alert("A: " + myResponse); // Use for debugging
        //document.getElementById("A").innerHTML = myResponse; // Display the json for debugging
        myData = JSON.parse(myResponse);

        //alert(myData);

        // Loop through each json record and create the HTML
        for (index in myData) {
            myReturn += "<tr><td>" + myData[index].jId + "</td><td>" +
                myData[index].jName + "</td><td>" +
                myData[index].jRarity + "</td><td>" +
                myData[index].jElement + "</td><td>" +
                myData[index].jPath + "</td><td>" +
                myData[index].jAffiliation + "</td><td>" +
                myData[index].jIsActive + "</td></tr>";

        }
        myReturn += "</table>";
        document.getElementById("tableData").innerHTML = myReturn; // Display table
    }

</script>

<?php
include_once "MyFooter.php";
?>