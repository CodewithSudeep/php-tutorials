<?php

$x = 66;
$y = 4;

//perform modulus operation and check whether result is less than 5 or is even number

// hint : use if statement and logical OR operator

// if( condition1 || condition2)
$mod = $x % $y ;
$m2 = $mod %2; 

if($mod < 5 ||$m2=0 )
{
    echo "the condition is true";
}

?> 