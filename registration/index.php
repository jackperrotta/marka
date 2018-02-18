<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/registerDb.php"; ?>
<?php

$type = filter_input(INPUT_GET,'type');

//if all else fails
include 'visitorRegister.php';
exit();

?>
