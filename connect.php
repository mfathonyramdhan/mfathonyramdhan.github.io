<?php

$host="localhost";
$username="root";
$password="";
$database="portofolio";

$connect=mysqli_connect($host, $username, $password, $database);

if($connect)
{
    echo "";
}
else
{
    echo "gagal";
}
?>