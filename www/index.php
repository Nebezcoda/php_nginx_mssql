<?php
    // Attention! Connect to MSSQL in case of Windows OS 
    // by host-ip-adress only. Localhost is not working.
$server ='sqlserver'; //ip MSSQL
$db = array ("Database"=>"master", "UID"=>"sa", "PWD"=>"mssql_stego2021") ;
$conn = sqlsrv_connect($server, $db);
   if ($conn===false) 
    { //is connection?
     echo "<br> DB connection error occured... <br><br>";
     print_r(sqlsrv_errors()); //error info
    }
    else echo "<br> Congratulations!!! DB connection has done... <br><br>";
phpinfo();
?>
