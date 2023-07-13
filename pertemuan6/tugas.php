<?php 
    $xiaomi = [
        [
            "merk" => "Xiaomi 12 Pro",
            "harga" => "12.999.000",
            "os" => "Android 12",
            "chipset" => "Qualcomm Snapdragon 8 Gen 1",
            "gambar" => "x12pro.jpg"
        ],
        [
            "merk" => "Poco F4 GT",
            "harga" => "7.999.000",
            "os" => "Android 12",
            "chipset" => "Qualcomm Snapdragon 8 Gen 1",
            "gambar" => "pf4gt.jpg"
        ],
        [
            "merk" => "Xiaomi 12T 5G",
            "harga" => "6.399.000",
            "os" => "Android 12",
            "chipset" => "MediaTek Dimensity 8100 Ultra",
            "gambar" => "x12t5g.jpg"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Handphone Xiaomi</title>
    <style>
        #img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Daftar Handphone Xiaomi</h1>
    <?php foreach($xiaomi as $hp) : ?>
       <ul>
            <li>Nama : <?= $hp["merk"]; ?></li>
            <img id="img" src="img/<?= $hp["gambar"] ?>" alt="">
            <li>Harga : <?= $hp["harga"]; ?></li>
            <li>Sistem Operasi : <?= $hp["os"]; ?></li>
            <li>Chipset : <?= $hp["chipset"]; ?></li>
       </ul> 
    <?php endforeach; ?>
</body>
</html>