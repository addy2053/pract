

<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="description" content="My name is umar" charset="UTF-8">
<!--    <link rel="stylesheet" href="bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="bootstrap-theme.min.css">-->
<!--    <link rel="stylesheet" href="bootstrap.min.js">-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->


    <title>Title</title>
</head>
<body>


<div class="container-fluid">

<form   class="col-sm-5 col-sm-push-3" action="process.php" method="post" style="border: ridge coral; align-content: center">
    <label  for="Id">Id :</label> <input  type="text" name="id" size="10" maxlength="10">
    <br>
    <label for="Name">Name :</label> <input type="text" name="name" size="12" maxlength="20">
    <br>
    <label for="Age">Age :</label> <input type="text" name="age" size="12" maxlength="20">

    <br>
   <input class="btn btn-success" type="submit" >
    <a href="process.php" class="btn btn-success">Print</a>

</form>



</div>
</body>
</html>



