<?php

$db_name="1php-assign";
$db_user="root";
$db_pass="";
$db_host="localhost";

//Create Connection
$connect=new mysqli($db_host,$db_user,$db_pass,$db_name);

//Check Connection
if($connect->connect_error){
    die("There is an error");
    
}else{
    echo"";
}

?>