<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/employeesDb.php"; ?>
<?php

session_start();

// Logout
if (isset($_GET['logout'])){
    header('Location: ../usersShared/index.php?logout');
    exit();
}

if (isset($_GET['visitors'])){
  include '../view/adminHeader.php';
  include 'visitorsList.php';
  include '../view/adminFooter.php';
  exit();
}

if ($_SESSION['LOGGED_IN'] == 'OK' && $_SESSION['admin'] == '1'){
  $fullVisitors = getMoreUsers();
  include '../view/adminHeader.php';
  include 'dashboard.php';
  include '../view/adminFooter.php';
  exit();
}
elseif($_SESSION['LOGGED_IN'] == 'OK') {

    include '../view/employeeHeader.php';
    include 'visitorsList.php';
    include '../view/employeeFooter.php';
    exit();
}

?>
