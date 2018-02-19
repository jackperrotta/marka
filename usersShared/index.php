<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/usersSharedDb.php"; ?>
<?php

$message = "";
$type = filter_input(INPUT_GET,'type');
$status = filter_input(INPUT_GET, 'status');

// Logout
if (isset($_GET['logout'])){
    include 'logout.php';
    exit();
}

// Show login page
if ($status == 'login'){
  include 'login.php';
  exit();
};

// Visitor Login
if (isset($_POST['user_login']) && $type=='visitor'){

    $email = filter_input(INPUT_POST,'email');
    $password = filter_input(INPUT_POST,'password');

    $visitor_id = loginUsers($email,$password,$type);

    if (!empty($array)){

        // session_start();
        // $_SESSION['LOGGED_IN']='OK';
        // $_SESSION['TYPE']='visitor';
        // $_SESSION['ID'] = $visitor_id;
        // $_SESSION['EMAIL'] = $email;
        header('Location: ../visitors/index.php');
        exit();

    } else{

        $message = "<div class='alert alert-danger' role='alert'>Login failed. Please try again.</div>";
        include 'login.php';
        exit();
    }
}

// Employee Login
if (isset($_POST['login']) && $type=='employee')
{
    $username = filter_input(INPUT_POST,'email');
    $password = filter_input(INPUT_POST,'password');
    $employee_id = loginPeople($username,$password,$type);
    if (!empty($employee_id)){
        session_start();
        $_SESSION['LOGGED_IN']='OK';
        $_SESSION['TYPE']='employee';
        $_SESSION['ID'] = $employee_id;
        $_SESSION['EMAIL'] = $email;
        header('Location: ../employees/index.php');
        exit();
    } else
    {
        $message = "<div class='alert alert-danger' role='alert'>Login failed. Please try again.</div>";
        include 'login.php';
        exit();
    }
}

// Show registration page
if ($status == 'register'){
  include 'visitorRegister.php';
  exit();
};

// Visitor Registration
if (isset($_POST['visitorRegister'])){

  $fName = filter_input(INPUT_POST, 'fName');
  $lName = filter_input(INPUT_POST, 'lName');
  $email = filter_input(INPUT_POST, 'email');
  $password = filter_input(INPUT_POST, 'password');
  $password2 = filter_input(INPUT_POST, 'password2');
  $address = filter_input(INPUT_POST, 'address');
  $address2 = filter_input(INPUT_POST, 'address2');
  $city = filter_input(INPUT_POST, 'city');
  $state = filter_input(INPUT_POST, 'state');
  $zip = filter_input(INPUT_POST, 'zip');

  if($password == $password2) {

    $success = addVisitor($fName, $lName, $email, $password, $address, $address2, $city, $state, $zip, $type);

    if ($success) {

      include 'visitorRegisterTwo.php';
      exit();
    }
  } else {
    $message = "<div class='alert alert-danger' role='alert'>Passwords don't match, Please try again.</div>";
    include 'visitorRegister.php';
    exit();
  }
};

//if all else fails
include 'login.php';
exit();

?>
