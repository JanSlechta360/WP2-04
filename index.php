<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP2-03</title>
</head>
<body>
<?php
$pc = array(
    'MB' => "MSI MPG Z490 GAMING CARBON WIFI - Intel Z490",
    'CPU' => "Intel Core i9-10980XE",
    'RAM' => "g.skill trident z royal gold 16gb",
    'GPU' => "MSI GeForce RTX 3080 GAMING X TRIO 10G, 10GB GDDR6X",
    'PS' => "600W",
    'HDD' => "2TB",
    'SSHD' => "none",
    'SSD' => "2TB",
    'monitor' => "HP OMEN X 25 - LED monitor 24,5",
    'keyboard' => "Razer BlackWidow V3 Pro, černá",
    'mouse' => "Corsair Dark Core PRO SE RGB, černá",
)


?>   



<h1>Můj počítač</h1>
    <ul>
    <li>Mother board: <?= $pc['MB'] ?></li>
    <li>CPU: <?= $pc['CPU'] ?></li>
    <li>GPU: <?= $pc['GPU'] ?></li>
    <li>RAM: <?= $pc['RAM'] ?></li>
    <li>SSD: <?= $pc['SSD'] ?></li>
    <li>SSD: <?= $pc['SSHD'] ?></li>
    <li>HDD: <?= $pc['HDD'] ?></li>
    <li>Monitor: <?= $pc['monitor'] ?></li>
    <li>Power source: <?= $pc['PS'] ?></li>
    <li>Keyboard: <?= $pc['keyboard'] ?></li>
    <li>Mouse: <?= $pc['mouse'] ?></li>
    </ul>
</body>
</html>