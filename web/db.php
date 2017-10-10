<?php


$con=new mysqli('localhost','root','','pract');

if(!$con)
    die('not connected');
else
    echo 'Connected';

?>