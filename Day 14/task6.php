<?php

//create a function which takes a string argument and returns the character in array
$GOAT="Eminem,Yama Buddha,2pac,Logic,Joyner Lucas";

function str_to_arr($a){
    print_r(explode(",",$a));  //The explode() function breaks a string into an array.
}

str_to_arr($GOAT);



?>