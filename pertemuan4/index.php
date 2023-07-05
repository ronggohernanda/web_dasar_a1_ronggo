<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel dan Function</title>
</head>
<body>

    <?php
    $nama = "Ospre";

    function bulan($id){

    
    $bulan = $id;
     if ($bulan == 1) {
        $nama_bulan = "Januari";
    }elseif ($bulan == 2) {
        $nama_bulan = "Februari";
    }elseif ($bulan == 3) {
        $nama_bulan = "Maret";
    }elseif ($bulan == 4) {
        $nama_bulan = "April";
    }elseif ($bulan == 5) {
        $nama_bulan = "Mei";
    }elseif ($bulan == 6) {
        $nama_bulan = "Juni";
    }elseif ($bulan == 7) {
        $nama_bulan = "Juli";
    }elseif ($bulan == 8) {
        $nama_bulan = "Agustus";
    }elseif ($bulan == 9) {
        $nama_bulan = "September";
    }elseif ($bulan == 10) {
        $nama_bulan = "Oktobebr";
    }elseif ($bulan == 11) {
        $nama_bulan = "November";
    }elseif ($bulan == 12) {
        $nama_bulan = "Desember";
    }else {
        $nama_bulan = "Nama bulan tidak ada";
    }

    
        return $nama_bulan;

    }


    ?>

    <h1>INPUT DATA</h1>
    <form action="" method="POST">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>  
            <td>Bulan (Angka)</td>
            <td>:</td>
            <td><input type="number" name="bulan"></td>
        </tr>
        <tr>
            <td  colspan="3">
            <button style="width:100%" name="cari">Cari</button>
        </td>

        </tr>
</table>
</form>

    
    <p>Nama Saya Adalah <b><?= @$_POST["nama"] ?></b>, Saya Lahir 
    Bulan <b><?= @bulan($_POST["bulan"]) ?><b></p>
    


</body>
</html>