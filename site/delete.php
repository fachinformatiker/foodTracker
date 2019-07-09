<?php
// http://185.230.162.140/foodtracker/delete.php?ID=1

include 'db_connection.php';

//echo "Connected Successfully";

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
} else {
    // Fallback behaviour goes here
}

if (isset($ID)) {
    $sql = "DELETE FROM data where ID='$ID'";
} else {
    echo "Please pass ID - ?ID=";
}

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
