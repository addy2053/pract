<?php
function config()
{
    $con=mysqli_connect('localhost','root','','pract');
    if(!$con)
    {
        die("Not Connect" .mysqli_connect_error());
    }
}
?>