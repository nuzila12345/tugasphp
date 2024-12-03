<?php 
if ( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])) {

    header("Location: Latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    
<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>" width="70"></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nrp"]; ?></li>
    <li><?= $_GET["gmail"]; ?></li>
    <li><?= $_GET["jurusanS"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke daftar mahasiswa></a>



</body>
</html>