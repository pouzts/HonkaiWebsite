<?php
include_once "MyHeader.php";
?>
<div>
    <center>
    <div class="chara-search">
        <form class="search-bar">
            <label for="chara-name-search">Name</label>
            <input type="text" name="chara-name-search" id="chara-name-search" value="" />
            <label for="chara-rarity-search">5 Star</label>
            <input type="radio" id="chara-rarity-search" name="chara-rarity-search" value="5"/>
            <label for="chara-rarity-search">4 Star</label>
            <input type="radio" id="chara-rarity-search" name="chara-rarity-search" value="4"/>
            <label for="chara-element-search">Element</label>
            <select name="chara-element-search" id="chara-element-search">
                <option value="None">None</option>
                <option value="Physical">Physical</option>
                <option value="Fire">Fire</option>
                <option value="Ice">Ice</option>
                <option value="Lightning">Lightning</option>
                <option value="Wind">Wind</option>
                <option value="Quantium">Quantium</option>
                <option value="Imaginary">Imaginary</option>
            </select>
            <label for="chara-path-search">Path</label>
            <select name="chara-path-search" id="chara-path-search">
                <option value="None">None</option>
                <option value="Physical">Physical</option>
                <option value="Fire">Fire</option>
                <option value="Ice">Ice</option>
                <option value="Lightning">Lightning</option>
                <option value="Wind">Wind</option>
                <option value="Quantium">Quantium</option>
                <option value="Imaginary">Imaginary</option>
            </select>
            <label for="chara-affiliation-search">Affiliation</label>
            <input type="text" name="chara-affiliation-search" id="chara-affiliation-search" value=""/>
            <button id="search-button" onclick="searchCharacters()">Search</button>
        </form>
    </div>
    </center>
    <div class="charData" id="chara-data">
        <h3 id="chara-name"></h3>
        <h3 id="chara-rarity"></h3>
        <h3 id="chara-element"></h3>
        <h3 id="chara-path"></h3>
        <h3 id="chara-affiliation"></h3>
    </div>
    <li class="charaList" id="chara-list"></li>
</div>

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

    function searchCharacters() {
        let name = document.getElementById("chara-name-search").value;
        let element = document.getElementsByName("chara-element-search").value;
        let rarity = "";
        let path = document.getElementsByName("chara-path-search").value;
        let affiliaton = document.getElementsByName("chara-affiliation-search").value;

        // Go through the radio buttons.
        let rarities = document.getElementsByName("chara-rarity-search");
        for (let i = 0; i < rarities.length; i++) {
            if (rarities[i].checked) {
                rarity = rarities[i].value;
            }
        }
        
        request.open("GET", "../getAllCharactersQuery.php?charaName=" + name + "&charaRarity=" + rarity + "&charaElement=" + element
            + "&charaPath=" + path + "&charaAffiliation=" + affiliaton);
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
        //alert("On Character Click");
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