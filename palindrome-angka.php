<?php

function palindrome_angka($angka) {
    while(true) {
        $stringedNumber = strval($angka+1);
        $reversedString = "";
        $res = "";
        
        for($i = (strlen($stringedNumber)-1); $i >= 0; $i--) {
            $reversedString .= $stringedNumber[$i];
        }

        if($reversedString == $stringedNumber) {
            $res = $stringedNumber . "<br>";
            return $res;
        } else {
            $angka += 1;
        }
    }
}

  
// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>