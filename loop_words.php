<?php
/* kasus
* buat perulangan sebanyak 50 dengan ketentuan
* - jika ketemu kelipatan 3 maka ganti dengan kata "Cahyo"
* - jika ketemu kelipatan 5 maka ganti dengan kata "Purnomo"
* - Jika ketemu kelipatan 3 dan 5 maka ganti dengan kata "Cahyo Purnomo" 
*/
for ($i=1;$i<=50;$i++) {
    if ($i % 3 === 0) {
        if ($i % 5 == 0) {
            echo "Cahyo Purnomo \n";
        } else {
            echo "Cahyo \n";
        }
    } elseif ($i % 5 === 0) {
        echo "Purnomo \n";
    } else {
        echo $i."\n";
    }
}
