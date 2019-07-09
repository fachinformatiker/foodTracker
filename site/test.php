<?php
include("config/config.php");
include("templates/$template/header.html");
?>

<div style="overflow-x:auto;">
<table id="foodlist">
<tr>
      <th>&nbsp;</th>
      <th>ID</th>
      <th>Datum</th>
      <th>Kategorie</th>
      <th>Name</th>
      <th>Anzahl</th>
      <th>Foto</th>
      <th>Zusatz</th>
    </tr>
    <tr>
      <td id="edit"><a href="#">Edit</a></td>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
    </tr>
    <tr>
      <td id="edit"><a href="#">Edit</a></td>
      <td>Eve</td>
      <td>Jackson</td>
      <td>94</td>
      <td>94</td>
      <td>94</td>
      <td>94</td>
      <td>94</td>
    </tr>
    <tr>
      <td id="edit"><a href="#">Edit</a></td>
      <td>Adam</td>
      <td>Johnson</td>
      <td>67</td>
      <td>67</td>
      <td>67</td>
      <td>67</td>
      <td>67</td>
    </tr>
</table>
</div>

<?php
include("templates/$template/footer.html");
?>
