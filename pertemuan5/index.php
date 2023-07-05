<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<body>

    <h1>Data Produk</h1>
    <?php
        $produk = array("Samsung","Acer","ROG");
        $jumlah_produk = count($produk);
    ?>
    <table border="1" style= "border-collapse">
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
    </tr>
    <?php
    for ($i=0; $i <$jumlah_produk; $i++) { ?>
    <tr>
        <td><?=$i+1; ?></td>
        <td><?=$produk [$i]; ?></td>
    </tr>
    <?php } ?>
    </table>
    <hr>
    <ul>
        <li>
            <a href="index.php">Indexed Arrays</a></li>
        <li>
            <a href="aa.php">Associative Arrays</a></li>
        <li>
            <a href="ma.php">Multidimensional Arrays</a> </li>

    </ul>
</body>
</html>