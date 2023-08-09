<?php
include_once "MyHeader.php";
?>
<li id="chara-list">
    
</li>
<div id="chara-data">
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
            ret += "<ul><span class='chara-link'>" + data[index].jName +
                ""+"</span></ul>";
        }

        document.getElementById("chara-list").innerHTML = ret;
    }
</script>
<?php
include_once "MyFooter.php"
?>