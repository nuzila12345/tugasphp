<?php
$mahasiswa = [
["nuzila al", "280126879", "nuzila@gmail.com", "Rekayasa Perangkat Lunak"],
["yassin", "268923651", "yassin@gmail.com", "Rekayasa Perangkat Lunak"],
];

$mahasiswa = [
    [
        "nrp" => "263547876",
        "nama" => "nuzila al",
        "email" => "nuzila@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "nuzila1.jpg",

    ]
];

?>
<!DOCTYPE html>
<html>
<head>
    <title> Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/nuzila1.jpg" width="50">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Juruan : <? $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>




    </body>
    </html>

