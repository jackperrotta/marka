<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/visitorDb.php"; ?>
<?php

$message = "";
$tag = filter_input(INPUT_GET,'tag');
$status = filter_input(INPUT_GET, 'status');

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

// Logout
if ($status == 'logout'){
  session_unset();
  session_destroy();

  header('Location:../usersShared/index.php');
  exit();
};

//if tag is set
if ($tag == 'fri'){
  include 'tag.php';
  exit();
};

// Purchase Pass
if($status == 'purchase'){
  include 'payment.php';
  exit();
};

// If session go to Dashboard
if ($_SESSION['logginIn'] === 'OK') {
  include 'dashboard.php';
  exit();
};

//if all else fails
header('Location:../usersShared/index.php');
exit();

?>
