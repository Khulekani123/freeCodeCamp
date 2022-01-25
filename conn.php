<?php
    $hName = 'localhost'; // host name
    $rName = 'root'; // root name
    $password = 'root' // db password
    $dbName = 'catering_db' //db name

    $dbConn = mysqli_connect($hName, $rName, $password, "$dbName");

    if(!$dbName)
    {
        die('Could not connect MySql Server:' .mysql_error());
    }