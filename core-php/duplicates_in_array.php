<!-- find dpilcates  -->

<?php
function findDuplicates($arr)
{
    $duplicates = [];
    $uniqueElements = [];

    foreach ($arr as $value) {
        if (in_array($value, $uniqueElements)) {
            // Add to duplicates array if the element already exists in uniqueElements
            if (!in_array($value, $duplicates)) {
                $duplicates[] = $value;
            }
        } else {
            // Otherwise, add the element to uniqueElements
            $uniqueElements[] = $value;
        }
    }

    return $duplicates;
}

$arr = [1, 2, 3, 4, 2, 5, 1];
print_r(findDuplicates($arr));
?>