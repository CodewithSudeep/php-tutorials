<?php

// create an associative array 
// create a function which returns the key of associative array
$sub_and_mentor=array(
    "Gp"=>"Math-II",
    "AL"=>"DS",
    "RN"=>"MP",
    "JPK"=>"Stat",
    "PD"=>"OOP"
);

function retur_key($array){
    return  array_keys($array);
}
$get_key=retur_key($sub_and_mentor);
var_dump($get_key);



?>
