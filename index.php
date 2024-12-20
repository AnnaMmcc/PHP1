<?php
$naslov = "Postani Programer";
$navigacija = ["Glavna", "O nama", "Kontakt"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $naslov ?></title>
</head>
<body>
    <h1><?= $naslov ?></h1>
    <nav>
        <?php echo"$navigacija[0] $navigacija[1] $navigacija[2]"; ?>
    </nav>
</body>
</html>