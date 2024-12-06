<?php
$a = [2, 3, 5, 7, 9, 3, 6];

for ($i = 0; $i < count($a) - 1; $i++) {

    for ($j = 0; $j < count($a) - 1 - $i; $j++) {

        if ($a[$j] > $a[$j + 1]) {

            // Swap elements
            $temp = $a[$j];
            $a[$j] = $a[$j + 1];
            $a[$j + 1] = $temp;
        }
    }
}

echo "Sorted array: ";

print_r($a);

?>