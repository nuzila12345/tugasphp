<?php
require 'functions.php';

if( isset($_POST["submit"]) ) {

    if(tambah($_POST)["submit"]) {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</title>
    <form action="" method="post">
     <ul>
        <li>
        <label for="nrp">NRP : </label>
            <input typr="text" name="nrp" id="nrp">
        </li>
        <li>
        <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
        <label for="emaail">Email : </label>
            <input type="text" name="email" id="email">
        </li>
        <li>
        <label for="jurusan">jurusan : </label>
            <input type="text" name="jurusan" id="juruan">
        </li>
        <li>
        <label for="gambar">Gambar : </label>
            <input type="text" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Tambah data!</button>
        </li>
    </ul>

    </form>
</body>
</html>