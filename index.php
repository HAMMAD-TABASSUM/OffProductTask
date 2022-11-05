<?php

$offer = 3;
$balance = 105;
$oneTeapack = 10;
$total = 0;
$currentPack = 0;

// with while loop
// while($balance>=$oneTeapack){
//     $balance-=$oneTeapack;
//     $total++;
//     $currentPack++;
// }

// with for loop
for($i=$balance; $i>=$oneTeapack; $i=$i-$oneTeapack){
    $total++;
    $currentPack++;
}

while($currentPack>=$offer){
    $currentPack-=$offer;
    $total++;
    $currentPack++;
}

echo "".$total;