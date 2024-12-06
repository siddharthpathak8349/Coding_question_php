<?php
$arr = [12, 35, 1, 10, 34, 1]; // Example array
$n = 3; // Specify the n-th largest number

$largest = array_fill(0, $n, -PHP_INT_MAX);

foreach ($arr as $num) {
    for ($i = 0; $i < $n; $i++) {
        if ($num > $largest[$i]) {
            // Shift elements to the right to make room
            for ($j = $n - 1; $j > $i; $j--) {
                $largest[$j] = $largest[$j - 1];
            }
            // Insert the current number at the correct position
            $largest[$i] = $num;
            break;
        }
    }
}

echo "The $n-th largest number is: " . $largest[$n - 1];
?>