<?php
$mobil = array("Civic","Avanza","Supra");
?>

<table border="1" style="border-collapse: collapse">
    <tr>
        <th>No</th>
        <th>Nama Mobil</th>
    </tr>
    <?php
        $mobil = array("Civic","Avanza","Supra",);
        $jumlah_mobil = count($mobil);
    ?>
<?php
    for ($i=0; $i < $jumlah_mobil; $i++) { ?>
     <tr>
        <td><?= $i+1; ?></td>
        <td><?= $mobil[$i]; ?></td>
    </tr>
    
<?php }
?>
</table>