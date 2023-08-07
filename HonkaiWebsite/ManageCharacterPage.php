<?php
include_once "MyHeader.php";
?>

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
\n
<button name="addButton" onclick="onAddButtonClick()">Add New</button>
<button name="editButton" onclick="">Edit</button>
<button name="removeButton" onclick="">Remove</button>
<p id="jsonData"></p>

<script>
    var request = new XMLHttpRequest();

    function onAddButtonClick() {
        addCharacter(document.getElementById("charName").value, document.getElementById("charRarity").value, document.getElementById("charElement").value, document.getElementById("charPath").value, document.getElementById("charAffiliation").value);
    }

    function addCharacter(charName, charRarity, charElement, charPath, charAffiliation) {
        request.open('GET', 'gameAPIQuery.php?charName=' + charName + ' charRarity=' + charRarity + ' charElement=' + charElement + ' charPath=' + charPath + ' charAffiliation=' + charAffiliation);
        document.getElementById("jsonData").innerHTML = "Character Added";
        request.send();
    }

</script>

<?php
include_once "MyFooter.php";
?>