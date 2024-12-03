<?php

$mahasiswa = [
    [   
        "nama" => "nuzila al", 
        "nrp" => "073572885",
        "email" => "nuzilaa78@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "nuzila1.jpg"
    ],
    [   
        "nama" => "yassin",
        "nrp" => "03894764", 
        "email" => "yassin96@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "nuzila2.jpg"
    ],
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>$nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>


</body>
</html>