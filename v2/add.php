<center>
<form action="add.php" method="POST">
    <input type="text" name="name" size="50" placeholder="name"/>
<br>
    <input type="text" name="quantity" size="50" maxlength="2" placeholder="quantity"/>
<br>
    <input type="text" name="kcal" size="50" maxlength="4" placeholder="kcal"/>
<br>
    <input type="text" name="notes" size="50" placeholder="notes"/>
<br>
    <input type="text" name="time" size="50" placeholder="D.M.Y-H:M">
<br>
    <input type="submit" name="add"/>
</form>
</center>
<?php
$time = date("d.m.Y-H:i");
if (isset($_POST["add"])) {
    $file = file_get_contents('storage.json');
    $data = json_decode($file, true);
    unset($_POST["add"]);
    $data["food"] = array_values($data["food"]);
    array_push($data["food"], $_POST);
    file_put_contents("storage.json", json_encode($data, JSON_PRETTY_PRINT));
    header("Location: index.php");
}
?>
