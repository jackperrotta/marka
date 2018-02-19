<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/visitorDb.php"; ?>
<?php

$message = "";
$type = filter_input(INPUT_GET,'type');


//if all else fails
include 'dashboard.php';
exit();

?>
