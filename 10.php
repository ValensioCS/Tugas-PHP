<?php 
$usia=[12,15,17,20,25,30,35,40,45,50];

$dewasa =[];
$anak=[];

foreach ($usia as $age){
    if ($age >=17) {
        $dewasa[] = $age;
    } else {
        $anak[] = $age;
    }
}

echo "list usia: " .implode(", ", $usia) . "<br>";
echo "Dewasa: " . count($dewasa) . "<br>";
echo "Anak-anak: " . count($anak) . "<br>";
?>
