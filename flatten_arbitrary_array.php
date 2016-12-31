<?php
function flatten_arbitrary_array(array $array)
{
    // initialize return array
    $flattened = [];
    // initialize stack
    $stack = array_values($array);

    // loop thorugh stack of values until done
    while($stack) 
    {
        $value = array_shift($stack);
        if (is_array($value)) {
            // a value to further process
            $stack = array_merge(array_values($value), $stack);
        }
        else {
            // a value to take
            $flattened[] = $value;
        }
    }

    return $flattened;
}
$nested = [[1,2,[3]],4] ;

var_dump(flatten_arbitrary_array($nested));
?>
