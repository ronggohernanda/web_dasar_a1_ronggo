<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assosiative Arrays</title>
</head>
<body>
    <h1> Assosiative Arrays </h1>

    <?php
    $umur = array("Leo" => "20","Juli" => "17","Habibi" => "25");
    ?>
    <table border="1" style="border-collapse">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Umur</th>
    </tr>
    <?php
    $number = 1;
    foreach($umur as $u => $u_value) : ?>
    <tr>    
        <td><?= $number++ ?></td>
        <td><?= $u ?></td>
        <td><?= $u_value; ?></td>
    </tr>
    <?php endforeach; 
    ?>
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