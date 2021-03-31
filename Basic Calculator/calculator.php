<?php

# PHP script for handling the form request
if($_SERVER["REQUEST_METHOD"] == "POST")
if(isset($_POST['calculate'])){
    $num1 = $_POST['operand1'];
    $num2 = $_POST['operand2'];
    $operator = $_POST ['operator'];
    switch($operator){
        case "-":
           $result = $num1 - $num2;
            break;

            case "+":
             $result = $num1 + $num2;
             break; 

             case "*":
                $result = $num1 * $num2;
                break;     
                     
                case "/":
                    $result = $num1 / $num2;
                    break;    
                
                case "%":
                        $result = $num1 % $num2;
                        break; 
                        
                 case "**":
                        $result = $num1 ** $num2;
                         break; 
    
                 default:
                    echo "Invalid operator";
                    break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <div class="main">
    <form class="form" method="POST" action="calculator.php">
        <div class="inputs">
        <?php
            if(isset($result)){
                echo "Result: ", $result. "<br>";
            }
        ?>
        Number A: <input type="number" name="operand1" required><br/>
        Number B: <input type="number" name="operand2" required><br/>
        Operator : <select name="operator" required>
            <option value="-">-</option>
            <option value="+">+</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">MOD</option>
            <option value="**">Exponentian</option>
        </select><br/>
        <input type="submit" name="calculate" value="Calculate"><br/>
        </div>

    </form>
    </div>
</body>
</html>