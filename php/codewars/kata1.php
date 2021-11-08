<?php
function solution( Int $n ){
    $total = 0;
    if ( $n > 0 ) {
        for ( $i = 0; $i < $n; $i++ ) {
            $multiply3 = $i / 3;
            $multiply5 = $i /5;
            print_r("\nNummer: " . $i . "\nDoor 3: " . $multiply3 . "\nDoor 5: " . $multiply5 . "\n");
            if(is_int($multiply3) || is_int($multiply5)) {
                $total += $i;
                echo "\nTussenstand: " . $total . "\n\n";
            }
        }
        return $total;
    }
    return false;
}

print_r( solution( 10 ) );

/*
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Finish the solution so that it returns the sum of all the multiples of 3 or 5 below the number passed in. Additionally, if the number is negative, return 0 (for languages that do have them).

Note: If the number is a multiple of both 3 and 5, only count it once.
*/