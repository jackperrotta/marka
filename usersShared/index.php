<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/usersSharedDb.php"; ?>
<?php

$message = "";
$type = filter_input(INPUT_GET,'type');
$status = filter_input(INPUT_GET, 'status');

// Show login page
if ($status == 'login'){
  include 'login.php';
  exit();
};

// Visitor Login
if (isset($_POST['login']) && $type=='visitor'){

    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST,'password');

    $userId = loginUsers($email,$password,$type);

    if ($userId){

        $id = $userId[0][id];
        $fName = $userId[0][fName];
        $lName = $userId[0][lName];
        $address = $userId[0][address];
        $address2 = $userId[0][address2];
        $city = $userId[0][city];
        $state = $userId[0][state];
        $zip = $userId[0][zip];
        $groupId = $userId[0][GroupID];

        session_start();
        $_SESSION['logginIn']='OK';
        $_SESSION['type']='visitor';
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        $_SESSION['fName'] = $fName;
        $_SESSION['lName'] = $lName;
        $_SESSION['address'] = $address;
        $_SESSION['address2'] = $address2;
        $_SESSION['city'] = $city;
        $_SESSION['state'] = $state;
        $_SESSION['zip'] = $zip;
        $_SESSION['groupId'] = $groupId;

        header('Location: ../visitors/index.php');
        exit();

    } else{

        $message = "<div class='alert alert-danger' role='alert'>Login failed. Please try again.</div>";
        include 'login.php';
        exit();
    }
}

// Employee Login
if (isset($_POST['login']) && $type=='employee'){

    // Server side validation
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST,'password');

    // Make sure they're not empty
    if ($email == "" || $password == ""){

      $message = "<div class='alert alert-danger' role='alert'>Try again.</div>";
      include 'login.php';
      exit();

    } else {
      // Get user information
      $userId = loginUsers($email,$password, $type);

      if ($userId){
        $fName = $userId[0][fName];
        $lName = $userId[0][lName];
        $admin = $userId[0][admin];

        session_start();
        $_SESSION['LOGGED_IN']='OK';
        $_SESSION['type']='employee';
        // $_SESSION['id'] = $userId;
        $_SESSION['email'] = $email;
        $_SESSION['fName'] = $fName;
        $_SESSION['lName'] = $lName;
        $_SESSION['admin'] = $admin;

          header('Location: ../employees/index.php');
          exit();
      } else
      {
          // Error if user information doesn't match db
          $message = "<div class='alert alert-danger' role='alert'>Login failed. Please try again.</div>";
          include 'login.php';
          exit();
      }
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
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $password = filter_input(INPUT_POST, 'password');
  $password2 = filter_input(INPUT_POST, 'password2');
  $address = filter_input(INPUT_POST, 'address');
  $address2 = filter_input(INPUT_POST, 'address2');
  $city = filter_input(INPUT_POST, 'city');
  $state = filter_input(INPUT_POST, 'state');
  $zip = filter_input(INPUT_POST, 'zip', FILTER_VALIDATE_INT);

  if($fName == "" || $lName == "" || $email == "" || $password == "" || $password2 == "" || $address == "" || $city == "" || $state == "" || $zip == ""){
    $message = "<div class='alert alert-danger' role='alert'>All fields are required</div>";
    include 'visitorRegister.php';
    exit();

  } elseif($password == $password2) {

    $success = addVisitor($fName, $lName, $email, $password, $address, $address2, $city, $state, $zip, $type);

    if ($success) {

      $type = 'visitor';

      $userId = loginUsers($email,$password,$type);

      if ($userId){

          session_start();
          $_SESSION['logginIn'] = 'OK';
          $_SESSION['type'] = $type;
          $_SESSION['id'] = $userId[0][id];
          $_SESSION['email'] = $email;
          $_SESSION['fName'] = $userId[0][fName];
          $_SESSION['lName'] = $userId[0][lName];
          $_SESSION['address'] = $userId[0][address];
          $_SESSION['address2'] = $userId[0][address2];
          $_SESSION['city'] = $userId[0][city];
          $_SESSION['state'] = $userId[0][state];
          $_SESSION['zip'] = $userId[0][zip];
          $_SESSION['groupId'] = $userId[0][GroupID];
          header('Location: ../visitors/index.php');
          exit();
    }
  }
  } else {
    $message = "<div class='alert alert-danger' role='alert'>Passwords don't match, Please try again.</div>";
    include 'visitorRegister.php';
    exit();
  }
};

// if all else fails
include 'logout.php';
exit();

?>
