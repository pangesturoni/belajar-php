<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function papan_catur($angka) {
    for($i = 0; $i < $angka; $i++) {
        for($j = 0; $j < ($angka * 2) - 1; $j++) {
            if($i % 2 == 1) {
                if($j % 2 == 1) {
                    echo "#&nbsp";
                } else {
                    echo "&nbsp";
                }
            } else if($i % 2 == 0) {
                if($j % 2 == 1) {
                    echo  "&nbsp";
                } else {
                    echo "#&nbsp";
                }
            }
        }
        echo "<br>";
    }
    echo "<br>";
}


// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

?>
</body>
</html>