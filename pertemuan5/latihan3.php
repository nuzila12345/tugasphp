<?php 
$mahasiswa = [
    ["nuzila alza", "043040023", "Rekayasa Perangkat Lunak", "nuzila@gmail.com"],
    ["muhammad yassin", "087255389", "Desain Komunikasi visual", "yassin@gmail.com"],
    ["fahmi nurr", "098623268", "Teknik Komputer dan Jaringan", "fahmii@gmail.com"],
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa Siswa</title>
</head>
<body>
  
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
   <li>Nama : <?= $mhs[0]; ?></li>
   <li>NRP : <?= $mhs[1]; ?></li>
   <li>Jurusan : <?= $mhs[2]; ?></li>
   <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>




</body>
</html>