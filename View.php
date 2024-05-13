<?php

include './Db.php';
error_reporting(false);

$obj=new View();

$obj->selctAll();

foreach ($obj->data as $data) { ?>
<br>

<h2>Name: <?php echo $data->name; ?></h2>

<h2>Number:<?php echo $data->number; ?></h2>




<a href="Edit.php?id=<?php echo $data->id; ?>">edit</a>

<a href="Delete.php?id=<?php echo $data->id; ?>">delete</a>
<?php } ?>