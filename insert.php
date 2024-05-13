


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method ="POST">

    Name:<input type="text" name="name">
    <br>
    contact_number <input type="number" name="number">
 
    <br>
    <button type ="submit">submit</button>
    </form>
</body>
</html>

<?php
include './Db.php';
error_reporting(false);
$obj=new InsertData();
$obj->insert();
if ($obj) {
    header("Location: View.php");
}


?>

