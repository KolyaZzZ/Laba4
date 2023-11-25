<?php

$N = rand(1,500);
function check($N) {
    for ($i = 0; $i * $i <= $N; $i++) {
        for ($j = 0; $j * $j <= $N; $j++) {
            for ($k = 0; $k * $k <= $N; $k++) {
                if ($i * $i + $j * $j + $k * $k == $N) {
                    return true;
                }
            }
        }
    }
    return false;
}

$result = check($N);

if ($result) {
    echo "{$N} можно представить в виде суммы квадратов трех целых чисел.";
} else {
    echo "{$N} нельзя представить в виде суммы квадратов трех целых чисел.";
}

?>
