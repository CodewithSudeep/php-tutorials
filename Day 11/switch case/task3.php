<?php

// create two int vars

$num1 = 44;
$num2 = 66;

// create an array of arithmetic operators (+,-,*,/,%,**)

$operators =["+","-","*","/","%","**"]; //array

//count the total items in $operators using count() function

$number_of_operators = count($operators);

// generate random number in range of 0 to $number_of_operators-1 using rand function

$random = rand(0,$number_of_operators-1);


// access a single item from array of operators for type of operation

$operator =$operators[$random]; //access array like indexed array where index is $random variable

// use switch case for arithmetic operations given by $operator

switch ($operator){
    case "+" :
        $output= $num1 + $num2;
        break;
        case "-" :
            $output= $num1 - $num2;
             break;
             case "*":
                $output= $num1 * $num2;
                break;
                case "%" :
                    $output= $num1 % $num2;
                    break;
                    case "/" :
                        $output= $num1 / $num2;
                        break;
                        case "**" :
                            $output= $num1 ** $num2;
                            break;
        default:
        echo "invalid";
        break;
}
echo $output;

// print output

// echo //output;
?>
