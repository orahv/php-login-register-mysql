<?php
function connectDB()
{
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "php_login";

    $objCon = mysqli_connect($serverName, $userName, $userPassword, $dbName);
    mysqli_set_charset($objCon, "utf8");
    return $objCon;
}