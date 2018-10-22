<?php

// una dimension

$v = [1,5,6,99,12,11,111];
//echo $suma = $v[0] + $v[1];
$suma = 0;
echo "suma: " . $suma . "<br>";
echo "foreach....<br>";
foreach ($v as $x) {
    echo "x: ".$x."; ";
    echo "suma: ".$suma."<br>";
    $suma = $suma + $x;   
}
echo "...foreach<br>";
echo $suma."<br>";


// dos dimensiones

$w = [
    [1,2,3,4],
    [5,6,7,8]
];

$suma = 0;
echo "suma: " . $suma . "<br>";
echo "foreach....<br>";
foreach($w as $v){
    foreach($v as $r){
        echo "r: ".$r."; ";
        echo "suma: ".$suma."<br>";
        $suma = $suma + $r;
    }
    
}

echo $suma;