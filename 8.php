<?php

$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;
$index = array_count_values($data)[$cari] ?? 0;

if ($index !== false) {
    echo "Nilai 100 ditemukan, total ada "  . $index . " kali";
} else {
    echo "Nilai 100 tidak ditemukan";
}

?>