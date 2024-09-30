<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php 7</title>
</head>
<body>
    <h2>Masukkan Nama</h2>
    <form method="post" action="">
        <label for="name1">Name 1:</label>
        <input type="text" id="name1" name="name1" required><br><br>

        <label for="name2">Name 2:</label>
        <input type="text" id="name2" name="name2" required><br><br>

        <input type="submit" value="Compare">
    </form>

    <?php
    if (isset($_POST['name1']) && isset($_POST['name2'])) {

        $name1 = $_POST['name1'];
        $name2 = $_POST['name2'];
        
        $hail = strlen($name1) - strlen($name2);

        if (strlen($name1) > strlen($name2)) {
            echo $name1 . " memiliki karakter lebih banyak dari " . $name2 . " : selisih " . $hail . " karakter";
        } elseif (strlen($name1) < strlen($name2)) {
            echo $name2 . " memiliki karakter lebih banyak dari " . $name1 . " : selisih " .  abs($hail) . " karakter";
        } else {
            echo $name1 . " dan " . $name2 . " memiliki karakter yang sama";
        }
    }
    ?>
</body>
</html>
