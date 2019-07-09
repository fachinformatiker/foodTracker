<?php
// http://185.230.162.140/foodtracker/get.php?ID=1

include 'db_connection.php';

//echo "Connected Successfully";

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
} else {
    // Fallback behaviour goes here
}

if (isset($ID)) {
    $sql = "SELECT * FROM data where ID='$ID'";
    $result = $conn->query($sql);
} else {
    echo "Please pass ID - ?ID=";
}

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"] . "<br>";
	echo "Date: " . $row["Date"] . "<br>";
        echo "Category: " . $row["Category"] . "<br>";
        echo "Name: " . $row["Name"] . "<br>";
        echo "Amount: " . $row["Amount"];
    }
} else {
    echo "0 results";
}

$conn->close();
?>
