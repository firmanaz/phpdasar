<?php 
    // $mahasiswa = [
    //     ["Firman Abdul Zaelani", "181410046", "firmanaz55@gmail.com", "Informatika"],
    //     ["Raihan Widiyansyah Nur", "181410053", "raihanwn@gmail.com", "Informatika"]
    // ];

    // Array assoiative
    // definisinya sama seperti array numerik, kecuali
    // key-nya adalah string yang kita buat sendiri
    $mahasiswa = [
        [
            "nama" => "Firman Abdul Zaelani", 
            "npm" => "181410046", 
            "email" => "firmanaz55@gmail.com", 
            "prodi" => "Informatika",
            "gambar" => "gambar1.png"
        ], 
        [
            "nama" => "Raihan Widiyansyah Nur", 
            "npm" => "181410053", 
            "email" => "raihanwn@gmail.com", 
            "prodi" => "Informatika",
            "gambar" => "gambar2.jpg"
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NPM : <?= $mhs["npm"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Program Studi : <?= $mhs["prodi"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>