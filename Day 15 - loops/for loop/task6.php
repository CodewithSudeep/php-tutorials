<?php
//print multipication table of 1 to 10 using  loop
// display the output in HTML table format
for($i=1;$i<=10;$i++){
    echo "<table>
    <tr><th colspan=2>Multiplciation table of $i</th>
    </tr>";
    for($j=1;$j<=10;$j++){
        echo "<tr>
          <td>$i*$j</td>
          <td>".$i*$j."</td>
        </tr>";
    }
    
   echo "</table>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,td,th{
        border:1px solid black;
        border-collapse:collapse;
    }
    tr:nth-child(even){
        background-color:yellow;
        color:red;
    }
    tr:nth-child(odd){
        background-color:gray;
        color:green;
    }
    th{
        background-color:black;
        color:white;
    }
    
    
    </style>
</head>
<body>
    
</body>
</html>