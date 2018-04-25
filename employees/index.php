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

  $date = date("l");
  // $date = 'Friday';

  if ($date == 'Monday'){
    $imgUrl = '/img/tagGifs/dad-daughter.gif';
    include '../view/adminHeader.php';
    include 'visitorsList.php';
    include '../view/adminFooter.php';
    exit();
  }
  elseif ($date == 'Tuesday'){
    $imgUrl = '/img/tagGifs/dance.gif';
    include '../view/adminHeader.php';
    include 'visitorsList.php';
    include '../view/adminFooter.php';
    exit();
  }
  elseif ($date == 'Wednesday'){
    $imgUrl = '/img/tagGifs/dog.gif';
    include '../view/adminHeader.php';
    include 'visitorsList.php';
    include '../view/adminFooter.php';
    exit();
  }
  elseif ($date == 'Thursday'){
    $imgUrl = '/img/tagGifs/girls_beach.gif';
    include '../view/adminHeader.php';
    include 'visitorsList.php';
    include '../view/adminFooter.php';
    exit();
  }
  elseif ($date == 'Friday'){
    $imgUrl = '/img/tagGifs/gym.gif';
    include '../view/adminHeader.php';
    include 'visitorsList.php';
    include '../view/adminFooter.php';
    exit();
  }
  elseif ($date == 'Saturday'){
    $imgUrl = '/img/tagGifs/relax.gif';
    include '../view/adminHeader.php';
    include 'visitorsList.php';
    include '../view/adminFooter.php';
    exit();
  }
  elseif ($date == 'Sunday'){
    $imgUrl = '/img/tagGifs/zack.gif';
    include '../view/adminHeader.php';
    include 'visitorsList.php';
    include '../view/adminFooter.php';
    exit();
  }

}

if ($_SESSION['LOGGED_IN'] == 'OK' && $_SESSION['admin'] == '1'){
  $fullVisitors = getMoreUsers();

  include '../view/adminHeader.php';
  include 'dashboard.php';
  include '../view/adminFooter.php';
  exit();
}
elseif($_SESSION['LOGGED_IN'] == 'OK') {

    $date = date("l");
    // $date = 'Friday';

    if ($date == 'Monday'){
      $imgUrl = '/img/tagGifs/dad-daughter.gif';
      include '../view/employeeHeader.php';
      include 'visitorsList.php';
      include '../view/employeeFooter.php';
      exit();
    }
    elseif ($date == 'Tuesday'){
      $imgUrl = '/img/tagGifs/dance.gif';
      include '../view/employeeHeader.php';
      include 'visitorsList.php';
      include '../view/employeeFooter.php';
      exit();
    }
    elseif ($date == 'Wednesday'){
      $imgUrl = '/img/tagGifs/dog.gif';
      include '../view/employeeHeader.php';
      include 'visitorsList.php';
      include '../view/employeeFooter.php';
      exit();
    }
    elseif ($date == 'Thursday'){
      $imgUrl = '/img/tagGifs/girls_beach.gif';
      include '../view/employeeHeader.php';
      include 'visitorsList.php';
      include '../view/employeeFooter.php';
      exit();
    }
    elseif ($date == 'Friday'){
      $imgUrl = '/img/tagGifs/gym.gif';
      include '../view/employeeHeader.php';
      include 'visitorsList.php';
      include '../view/employeeFooter.php';
      exit();
    }
    elseif ($date == 'Saturday'){
      $imgUrl = '/img/tagGifs/relax.gif';
      include '../view/employeeHeader.php';
      include 'visitorsList.php';
      include '../view/employeeFooter.php';
      exit();
    }
    elseif ($date == 'Sunday'){
      $imgUrl = '/img/tagGifs/zack.gif';
      include '../view/employeeHeader.php';
      include 'visitorsList.php';
      include '../view/employeeFooter.php';
      exit();
    }
};

?>
