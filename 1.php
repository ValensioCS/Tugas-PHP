<html>
<head>
  <title>Php 1</title>
</head>
<body>   
<form method="post">
  <label>Masukkan Teks</label><br/>
  <input type="text" name="nama"><br/>
  <input type="submit" value="Submit">
</form>

<?php 
//nilai dari input "nama".
$nama = $_POST['nama'] ?? '';
//Mefilter input  dari form agar hanya angka yang keluar
$onlyNumbers = filter_var($nama, FILTER_SANITIZE_NUMBER_INT);
if ($onlyNumbers) {
  echo "Ada Nomor: " . $onlyNumbers;
} else {
  echo "Hanya berisi teks";
}
?>