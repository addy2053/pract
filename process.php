<?php
$con=mysqli_connect('localhost','root','','pract');
if(!$con)
{
    die("Not Connect" .mysqli_connect_error());
}
if($_POST) {
    $id=$_REQUEST['id'];
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];

$sql="INSERT INTO tbl_std
VALUES('$id','$name','$age')";

mysqli_query($con,$sql);
}
echo "Name:$name <br> Age: $age <br> id : $id";


?>