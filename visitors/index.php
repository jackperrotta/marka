<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/visitorDb.php"; ?>
<?php

$message = "";
$tag = filter_input(INPUT_GET,'tag');;

session_start();

$userId = $_SESSION['id'];
$email = $_SESSION['email'];
$fName = $_SESSION['fName'];
$lName = $_SESSION['lName'];
$address = $_SESSION['address'];
$address2 = $_SESSION['address2'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$zip = $_SESSION['zip'];
$groupId = $_SESSION['groupId'];

//if tag is set
if ($tag == 'fri'){
  include 'tag.php';
  exit();
};

//if all else fails
include 'dashboard.php';
exit();

?>
