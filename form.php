<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="My name is umar" charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-theme.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <title>Title</title>
</head>
<body>

<?php

//$con=mysqli_connect('localhost','root','','pract');
//if(!$con)
//{
//    die("Not Connect" .mysqli_connect_error());
//}

//create table
//$sql="CREATE TABLE tbl_std (
//id INT NOT NULL PRIMARY KEY ,
//name VARCHAR (50),
//age INT
//)";

//drop table means delete table from databse
//$sql="DROP TABLE persons";

//if(mysqli_query($con,$sql))
//{
//    echo "table created";
//}
//else
//{
//    echo "table not created";
//}
?>

<div class="container-fluid">
<form action="process.php" method="post">
    <label  for="Id">Id :</label> <input  type="text" name="id" size="10" maxlength="10">
    <br>
    <label for="Name">Name :</label> <input type="text" name="name" size="12" maxlength="20">
    <br>
    <label for="Age">Age :</label> <input type="text" name="age" size="12" maxlength="20">

    <br>
   <input class="btn-success" type="submit" >


</form>

    <a href="process.php" class="btn-danger">hhh</a>

</div>
</body>
</html>



