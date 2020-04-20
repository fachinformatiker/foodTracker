<?php

if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $all = file_get_contents('storage.json');
    $all = json_decode($all, true);
    $jsonfile = $all["food"];
    $jsonfile = $jsonfile[$id];

    if ($jsonfile) {
        unset($all["food"][$id]);
        $all["food"] = array_values($all["food"]);
        file_put_contents("storage.json", json_encode($all));
    }
    header("Location: index.php");
}