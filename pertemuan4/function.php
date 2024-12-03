<?php
function salam($waktu, $nama){
    return "Selamat $wakty, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Funciton</title>
</head>
<body>
    <h1><?= salam("pagi", "nuzila"); ?></h1>
</body>
</html>