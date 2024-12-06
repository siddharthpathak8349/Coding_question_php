<?php
// Function to generate Fibonacci series within a given range
function fibonacciInRange($start, $end)
{
    $a = 0;  // First Fibonacci number
    $b = 1;  // Second Fibonacci number

    // Loop to print Fibonacci numbers within the range
    while ($a <= $end) {
        if ($a >= $start) {
            echo $a . " "; // Print Fibonacci numbers within the range
        }

        // Update values for the next Fibonacci numbers
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
}

// Example: Fibonacci numbers between 5 and 50
$start = 5;
$end = 50;
fibonacciInRange($start, $end);

?>