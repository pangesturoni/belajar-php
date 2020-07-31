<?php

function skor_terbesar($arr){
    $namaLaravel = "";
    $kelasLaravel = "";
    $maxLaravel = 0;

    $namaReactNative = "";
    $kelasReactNative = "";
    $maxReactNative = 0;

    $namaReactJS = "";
    $kelasReactJS = "";
    $maxReactJS = "";

    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i]["kelas"] == "Laravel" && $arr[$i]["nilai"] > $maxLaravel) {
            $namaLaravel = $arr[$i]["nama"];
            $kelasLaravel = $arr[$i]["kelas"];
            $maxLaravel = $arr[$i]["nilai"];
        } else if($arr[$i]["kelas"] == "React Native" && $arr[$i]["nilai"] > $maxReactNative) {
            $namaReactNative = $arr[$i]["nama"];
            $kelasReactNative = $arr[$i]["kelas"];
            $maxReactNative = $arr[$i]["nilai"];
        } else if($arr[$i]["kelas"] == "React JS" && $arr[$i]["nilai"] > $maxReactJS) {
            $namaReactJS = $arr[$i]["nama"];
            $kelasReactJS = $arr[$i]["kelas"];
            $maxReactJS = $arr[$i]["nilai"];
        }
    }
    $arrHasil['Laravel'] = array(
        "nama" => $namaLaravel,
        "kelas" => $kelasLaravel,
        "nilai" => $maxLaravel
    );

    $arrHasil['React Native'] = array(
        "nama" => $namaReactNative,
        "kelas" => $kelasReactNative,
        "nilai" => $maxReactNative
    );

    $arrHasil['React JS'] = array(
        "nama" => $namaReactJS,
        "kelas" => $kelasReactJS,
        "nilai" => $maxReactJS
    );

    echo "<pre>";
    print_r($arrHasil);
    echo "</pre>";
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/

?>