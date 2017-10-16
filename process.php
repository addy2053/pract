

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="My name is umar" charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-theme.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">-->
<!--    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

          <script src="dataTables.bootstrap.js"></script>                                                                                                                                                                                                       <-->
          <script src="jquery.dataTables.js"></script>                                                                                                                                                                                                       <-->

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

    <table class="table table-bordered table-hover" >

    <thead>
        <tr><th >Id</th>
        <th>Name</th>
        <th>Age</th>
        </tr>
    </thead>
    <tbody>
    <?php
 function a(){echo "hey";}
    $sql = "select *from tbl_std limit 0,2";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            echo "<tr ><td>$id</td> <td>$name</td> <td>$age</td></tr>";
        }
    }
?>
    </tbody>

    <tfoot class="hide-if-no-paging">
    <td colspan="3">

<div class="col-lg-offset-5">
<ul class="pagination">
    <li class="" ><a href="">1</a></li>
    <li ><a href="process.php">2</a></li>
    <li><a href="">3</a></li>
    <li><a href="">4</a></li>
    <li><a href="">5</a></li>
</ul>
</div>
    </td>

    </tfoot>
</table>

</body>
</html>