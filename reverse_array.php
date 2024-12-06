<!-- Q1 :- Reverse a string without using inbuilt function ?  (strrev())  -->

<?php
function reverseString($str)
{
    $reversed = '';
    $length = strlen($str); // Get the string length manually
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i]; // Add each character in reverse order
    }
    return $reversed;
}

// Example usage
echo reverseString("Hello World!");
?>