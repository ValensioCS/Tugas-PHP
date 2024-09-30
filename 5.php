<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php 5</title>
</head>
<body>
    <?php
    $bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bill2 = [77, 99, 55, 81, 45, 90, 91, 98];
    
    //kalo ini buat yang sama
    $common_numbers = array_intersect($bill1, $bill2);
    //yang menggunakan diff untuk membandingkan dan mengembalikan yang beda
    $different_numbers = (array_diff($bill2, $bill1));

    //buat nampilin nomor yang sama
    echo"bilangan yang sama dalam kedua array adalah: ". implode(", ", $common_numbers);
    echo"<br><br>bilangan yang tidak sama dalam kedua array adalah: ". implode(", ", $different_numbers);
    ?>
</body>
</html>