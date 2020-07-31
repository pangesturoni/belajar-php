<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function pasangan_terbesar($angka){
    $arr2 = array_map('intval', str_split($angka));

    $val = max($arr2);
    $search = (array_search($val, $arr2)+1);
    $next = $arr2[$search];

    echo $val . $next . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?> 
</body>
</html>