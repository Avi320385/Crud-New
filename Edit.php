<?php
include './Db.php';
error_reporting(false);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="Update.php?id=<?php echo $obj->data->id; ?>" method="POST" >
        name:<input type="text" name="name" value="<?php echo $obj->data->name; ?>"> 
        <br>
      
        number:<input type="number" name="number" value="<?php echo $obj->data->number; ?>">
       

        <br>



        <button type="submit">Submit</button>
         
    </form>  
       
   

  
</body>

</html>

