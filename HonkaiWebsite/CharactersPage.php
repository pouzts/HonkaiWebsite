<?php
include_once "MyHeader.php";
?>
<div class="charaThings">
    <div class="charaData" id="chara-data">
        <img id="chara-img" src="" />
        <h3 id="chara-name"></h3>
        <h3 id="chara-rarity"></h3>
        <h3 id="chara-element"></h3>
        <h3 id="chara-path"></h3>
        <h3 id="chara-affiliation"></h3>
        <img id="element-image" src="" />
        <img id="path-image" src="" />
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
        document["chara-img"].src = "img/" + name + "_Profile_Small.png";
        document["element-image"].src = "img/PNG_Type_" + element + ".png";
        document["path-image"].src = "img/PNG_Path_" + path + ".png";
    }
</script>
<?php
include_once "MyFooter.php"
    ?>