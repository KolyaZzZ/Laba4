<?php
$a = rand(-20, 20);
$c = rand(-20, 20);
$d = rand(-20, 20);

$result = ((((2 * $c) / $d) + 2) / ($d - ($a * $a) - 1));

echo "(((2 * $c) / $d) + 2) / ($d - ($a^2) - 1) = ";
echo "$result";
?>
