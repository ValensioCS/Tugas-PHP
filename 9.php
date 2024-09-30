<?php
    $jumlah = 140500;
    
    function hitungPecahanUang($jumlahUang) {
        $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100];
        $hasil = [];

        foreach ($pecahan as $nilai) {
            if ($jumlahUang >= $nilai) {
                $jumlahLembar = intdiv($jumlahUang, $nilai);
                $hasil[$nilai] = $jumlahLembar;
                $jumlahUang %= $nilai;
            }
        }
        return $hasil;
    }

    echo "Uang : " . $jumlah . "<br>";
    foreach (hitungPecahanUang($jumlah) as $pecahan => $jumlahLembar) {
        echo "Pecahan Rp " . number_format($pecahan, 0, ',', '.') . ": " . $jumlahLembar . " lembar" . "<br>";
    }
?>
