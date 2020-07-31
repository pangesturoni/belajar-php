<?php

function ubah_huruf($string){
    $arr = str_split($string);

    for($i = 0; $i < count($arr); $i++) {
        $ascii[] = ord($arr[$i]);
        $shifted[] = chr($ascii[$i]+1);
        echo $shifted[$i];
    }
    return "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>