<?php
include 'db_connection.php';

//echo "Connected Successfully";

$sql = "SELECT * FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Datum</th><th>Kategorie</th><th>Name</th><th>Anzahl</th><th>Bild</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" .$row["ID"]. "</td><td>" .$row["Date"]. "</td><td>" .$row["Category"]. "</td><td>" .$row["Name"]. "</td><td>" .$row["Amount"]. "</td><td>" .$row["Image"]. "</td></tr>";
   }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>