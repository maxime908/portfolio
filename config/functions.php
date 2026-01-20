<?php 
    function comparison ($project) {
        return isset($_GET["id"]) && $_GET["id"] == $project["id"];
    }

    function verifBack () {
        return isset($_GET["update"]) || isset($_GET["addCategorie"]) || isset($_GET["updateCategorie"]) || isset($_GET["addProject"]);
    } 

    function verifSave () {
        return isset($_GET["addCategorie"]) || isset($_GET["updateCategorie"]);
    }

    function verifCategories ($categorieId) {
        return isset($_GET['updateCategorie']) && isset($_GET['id']) && $_GET['id'] == $categorieId;
    }

    function detailUpdate ($AdminProjectsDetail) {
        return isset($_GET['id']) && $_GET['id'] == $AdminProjectsDetail['id'];
    }

    function updateDetailActif () {
        return isset($_GET['updateProjectDetail']);
    }
?>