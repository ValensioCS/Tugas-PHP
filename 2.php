<h1>Form Lembur</h1>
<form action="" method="post">
    <input type="number" name="jamkerja"><br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>

<?php
if(isset($_POST['submit'])) {
    $jam = $_POST['jamkerja'];
$uanglembur = 50000;
//Jika jam kerja dinbawah 8jam maka tidak dapat duit tambahan
if ($jam <= 8) {
    echo "Anda tidak lembur, Jam kerja = $jam";
} else if ($jam >= 8) {
//Jika lebih dari 8 jam maka dapet uang tambahan
    $uanglemburlanjutan = ($jam - 9) * 25000;
    $total = $uanglembur + $uanglemburlanjutan;
    $totaljamlembur = $jam-8;
    echo "Anda lembur, Jam kerja = $jam <br> Uang lembur = $total <br>";
    echo "Anda bekerja = $totaljamlembur jam lebih";
    }
}

?>