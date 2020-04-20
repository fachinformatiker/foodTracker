<?php
if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $getfile = file_get_contents('storage.json');
    $jsonfile = json_decode($getfile, true);
    $jsonfile = $jsonfile["food"];
    $jsonfile = $jsonfile[$id];
}

if (isset($_POST["id"])) {
    $id = (int) $_POST["id"];
    $getfile = file_get_contents('storage.json');
    $all = json_decode($getfile, true);
    $jsonfile = $all["food"];
    $jsonfile = $jsonfile[$id];

    $post["name"] = isset($_POST["name"]) ? $_POST["name"] : "";
    $post["quantity"] = isset($_POST["quantity"]) ? $_POST["quantity"] : "";
    $post["kcal"] = isset($_POST["kcal"]) ? $_POST["kcal"] : "";
    $post["notes"] = isset($_POST["notes"]) ? $_POST["notes"] : "";
    $post["time"] = isset($_POST["time"]) ? $_POST["time"] : "";



    if ($jsonfile) {
        unset($all["food"][$id]);
        $all["food"][$id] = $post;
        $all["food"] = array_values($all["food"]);
        file_put_contents("storage.json", json_encode($all));
    }
    header("Location: index.php");
}
?>
<?php if (isset($_GET["id"])): ?>
    <form action="edit.php" method="POST">
        <input type="hidden" value="<?php echo $id ?>" name="id"/>
        <input type="text" value="<?php echo $jsonfile["name"] ?>" name="name"/>
        <input type="text" value="<?php echo $jsonfile["quantity"] ?>" name="quantity"/>
        <input type="text" value="<?php echo $jsonfile["kcal"] ?>" name="kcal"/>
        <input type="text" value="<?php echo $jsonfile["notes"] ?>" name="notes"/>
        <input type="text" value="<?php echo $jsonfile["time"] ?>" name="time"/>
        <input type="submit"/>
    </form>
<?php endif; ?>
