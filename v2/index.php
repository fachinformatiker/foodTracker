<?php
$getfile = file_get_contents('storage.json');
$jsonfile = json_decode($getfile);
?>
<a href="add.php">Add</a>
<table align="center">
    <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Kcal</th>
        <th>Notes</th>
        <th>Time</th>
        <th></th>
    </tr>
    <tbody>
    <?php foreach ($jsonfile->food as $index => $obj): ?>
        <tr>
            <td><?php echo $obj->name; ?></td>
            <td><?php echo $obj->quantity; ?></td>
            <td><?php echo $obj->kcal; ?></td>
            <td><?php echo $obj->notes; ?></td>
            <td><?php echo $obj->time; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $index; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $index; ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>