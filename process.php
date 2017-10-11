<?php
//include ('config.php');
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
<div class="container-fluid">
<?php
$con=mysqli_connect('localhost','root','','pract');
if(!$con)
{
    die("Not Connect" .mysqli_connect_error());
}
if($_POST) {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];

    $sql = "INSERT INTO tbl_std
VALUES('$id','$name','$age')";

    mysqli_query($con, $sql);
}
?>
<table class="table table-striped table-bordered" >
    <thead>
        <tr><th >Id</th>
        <th>Name</th>
        <th>Age</th>
        </tr>
    </thead>
    <tbody>
    <?php

    $sql = "select *from tbl_std  limit 2";

    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            $id=$row['id'];
            $name=$row['name'];
            $age=$row['age'];
          echo "<tr ><td>$id</td> <td>$name</td> <td>$age</td></tr>";
        }
    }

?>
    </tbody>
<!--    <tfoot >-->
<!--         <tr><td rowspan="3" class="pagination"><div class="pagination ">-->
<!---->
<!--             </div></td>-->
<!--         </tr>-->
<!--    </tfoot >-->
    <tfoot class="hide-if-no-paging">
        <td colspan="5">
            <div class="pagination ">

            </div>
        </td>S
    </tfoot>
</table>

</body>
</html>