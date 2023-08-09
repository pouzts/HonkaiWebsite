<?php
include_once "MyHeader.php";
?>
<div id="chara-data">
    <h3 id="chara-name"></h3>
    <h3 id="chara-rarity"></h3>
    <h3 id="chara-element"></h3>
    <h3 id="chara-path"></h3>
    <h3 id="chara-affiliation"></h3>
</div>
<li id="chara-list">
    
</li>

<script>
    var request = new XMLHttpRequest();

    $(document).ready(function() {
        loadData();
    });

    function loadData() {
        request.open("GET", "../getAllCharactersQuery.php");
        request.onload = loadCharacters;
        request.send();
    }

    function loadCharacters(evt) {
        let ret = "";
        let response = request.responseText;
        let data = JSON.parse(response);

        for (index in data) {
            ret += '<ul><spawn class="chara-link"><button onclick="onCharacterClick(\'' + data[index].jName + '\',' + data[index].jRarity + ',\'' + data[index].jElement + '\',\'' +
                data[index].jPath + '\',\'' + data[index].jAffiliation + '\')">' + data[index].jName + '</button></span></ul>';
        }

        document.getElementById("chara-list").innerHTML = ret;
    }

    function onCharacterClick(name, rarity, element, path, affiliation) {
        alert("On Character Click");
        document.getElementById("chara-name").innerHTML = "Character: " + name;
        document.getElementById("chara-rarity").innerHTML = "Rarity: " + rarity;
        document.getElementById("chara-element").innerHTML = "Element: " + element;
        document.getElementById("chara-path").innerHTML = "Path: " + path;
        document.getElementById("chara-affiliation").innerHTML = "Affiliation: " + affiliation;
    }
</script>
<?php
include_once "MyFooter.php"
?>