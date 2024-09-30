<?php
$student = [
        [
            'nama' => 'Andi',
            'nilai' => [80, 78, 82, 78, 88]
        ],
        [
            'nama' => 'Boni',
            'nilai' => [86, 70, 80, 85, 81]
        ],
        [
            'nama' => 'Dani',
            'nilai' => [83, 91, 70, 73, 81]
        ],        [
            'nama' => 'Eko',
            'nilai' => [89, 85, 84, 86, 88]
        ],   
    ];

    foreach ($student as $murid) {
        $nama = $murid['nama'];
        $nilai = $murid['nilai'];

        $total_nilai=array_sum($nilai);
        $jumlah_nilai=count($nilai);
        $rata_rata = $total_nilai / $jumlah_nilai;
        echo "Nilai rata-rata $nama adalah $rata_rata <br>";
    }
?>