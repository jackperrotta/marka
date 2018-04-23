<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/visitorDb.php"; ?>
<?php

$message = "";
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
if ($status == 'tag'){
  $date = date("l");
  // $date = 'Friday';

  if ($date == 'Monday'){
    $imgUrl = '/img/tagGifs/dad-daughter.gif';
    include 'tag.php';
    exit();
  }
  elseif ($date == 'Tuesday'){
    $imgUrl = '/img/tagGifs/dance.gif';
    include 'tag.php';
    exit();
  }
  elseif ($date == 'Wednesday'){
    $imgUrl = '/img/tagGifs/dog.gif';
    include 'tag.php';
    exit();
  }
  elseif ($date == 'Thursday'){
    $imgUrl = '/img/tagGifs/girls_beach.gif';
    include 'tag.php';
    exit();
  }
  elseif ($date == 'Friday'){
    $imgUrl = '/img/tagGifs/gym.gif';
    include 'tag.php';
    exit();
  }
  elseif ($date == 'Saturday'){
    $imgUrl = '/img/tagGifs/relax.gif';
    include 'tag.php';
    exit();
  }
  elseif ($date == 'Sunday'){
    $imgUrl = '/img/tagGifs/zack.gif';
    include 'tag.php';
    exit();
  }
};

// Purchase Pass
if($status == 'purchase'){
  include 'payment.php';
  exit();
};

if($status == 'payment2'){
  include 'paymentDetails.php';
  exit();
};

if($status == 'paymentDaily'){
  include 'paymentDaily.php';
  exit();
};

if($status == 'confirm'){
  include 'paymentConfirmation.php';
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
