<?php

//print the value of following index from $_SERVER superglobal
// 1. server name
//2. http host
//3. remote address
echo $_SERVER["SERVER_NAME"];
echo"<br>";
echo $_SERVER["HTTP_HOST"];
echo"<br>";
echo $_SERVER["REMOTE_ADDR"];
?>