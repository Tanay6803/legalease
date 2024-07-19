<?php

$servername="localhost";
$username="root";
$password="";
$database="legalease";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    echo "Connection Error : ".mysqli_connect_error();
}

?>