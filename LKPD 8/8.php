<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <?php
    $data = [80, 90, 75, 100, 85, 100, 66];
    $cari = 100;

    function cari_angka($data, $cari)
    {
        $jumlah = array_count_values($data)[$cari] ?? 0; // Menghitung frekuensi setiap nilai dalam array 
        echo "Jumlah Angka $cari = $jumlah";
    }

    cari_angka($data, $cari);
    ?>
</body>
</html>