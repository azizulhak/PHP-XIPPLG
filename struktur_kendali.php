<?php
//struktur kendali

$nilai = 80;

if ($nilai >= 75 && $nilai <= 79) {
    //statement
    echo "CUKUP";
} else if($nilai >= 80) {
    echo "BAIK";
} else if($nilai >= 86) {
    echo "SANGAT BAIK";
} else {
    echo "TIDAK LULUS";
}
