<?php
$mobil = array("Civic","Avanza","Supra");
?>

<table border="1" style="border-collapse: collapse">
    <tr>
        <th>No</th>
        <th>Nama Mobil</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $mobil[0] ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $mobil[1] ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $mobil[2] ?></td>
    </tr>
</table>

<ul>
    <li><?= $mobil[0] ?></li>
    <li><?= $mobil[1] ?></li>
    <li><?= $mobil[2] ?></li>
</ul>
