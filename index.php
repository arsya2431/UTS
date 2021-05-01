<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemantauan Covid-19</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>DATA PEMANTAUAN COVID19 PULAU JAWA</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama Wilayah</td><td><select name="wilayah">
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Banten">Banten</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                </select></td></tr>
            <tr><td>Jumlah Positif </td><td><input type="text" name="positif" placeholder="Jumlah Positif..."></td></tr>
            <tr><td>Jumlah Dirawat</td><td><input type="text" name="rawat" placeholder="Jumlah Dirawat..."></td></tr>
            <tr><td>Jumlah Sembuh</td><td><input type="text" name="sembuh" placeholder="Jumlah Sembuh..."></td></tr>
            <tr><td>Jumlah Meninggal</td><td><input type="text" name="meninggal" placeholder="Jumlah Meninggal..."></td></tr>
            <tr><td>Nama Operator</td><td><input type="text" name="operator" placeholder="Masukkan Nama..."></td></tr>
            <tr><td>NIM Mahasiswa</td><td><input type="text" name="nim" placeholder="Masukkan NIM..."></td></tr>
            <tr><td><input type="submit" value="kirim" name="submit"></td></tr>
        </table>
    </form>
   

</body>
</html>
<?php
extract($_REQUEST);

$file = fopen("data.txt", "w");
$wkt = date('l, d-m-Y, h:i:s');
$wil = isset($_POST['wilayah']) ? $_POST['wilayah'] : null;
$positif = isset($_POST['positif']) ? $_POST['positif'] : '';
$raw = isset($_POST['rawat']) ? $_POST['rawat'] : '';
$smb = isset($_POST['sembuh']) ? $_POST['sembuh'] : '';
$ninggal = isset($_POST['meninggal']) ? $_POST['meninggal'] : '';
$op = isset($_POST['operator']) ? $_POST['operator'] : '';
$nim = isset($_POST['nim']) ? $_POST['nim'] : '';

fwrite($file, "Data Pemantauan Covid19 Wilayah ");
fwrite($file, $wil. "\n");
fwrite($file, "per ");
fwrite($file, $wkt. "\n");
fwrite($file, $op. "   ");
fwrite($file, $nim. "\n\n");

fwrite($file, "| Positif | Dirawat | Sembuh  | Meninggal |\n| ");
fwrite($file, $positif. " |  ");
fwrite($file, $raw. "  | ");
fwrite($file, $smb. " |   ");
fwrite($file, $ninggal. "   |");
fclose($file);
?>
