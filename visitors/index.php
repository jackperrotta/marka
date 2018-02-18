<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/visitorDb.php"; ?>
<?php

$message = "";
$type = filter_input(INPUT_GET,'type');

if (isset($_GET['logout'])){
    include 'people_logout.php';
    exit();
}
if (isset($_POST['go_button']) && $type=='visitor')
{
    $username = filter_input(INPUT_POST,'username');
    $password = filter_input(INPUT_POST,'password');
    $visitor_id = loginVisitor($username,$password,'visitor');
    if (!empty($tech_id)){
        session_start();
        $_SESSION['LOGGED_IN']='OK';
        $_SESSION['TYPE']='visitor';
        $_SESSION['TECH_ID'] = $tech_id;
        $_SESSION['TEACHER_ID'] = null;
        $_SESSION['USERNAME'] = $username;
        header('Location: ../requests/index.php');
        exit();
    } else
    {
        $message = "Login failed. Please try again.";
        include 'login.php';
        exit();
    }
}
if (isset($_POST['go_button']) && $type=='teacher')
{
    $username = filter_input(INPUT_POST,'username');
    $password = filter_input(INPUT_POST,'password');
    $teacher_id = loginPeople($username,$password,'teacher');
    if (!empty($teacher_id)){
        session_start();
        $_SESSION['LOGGED_IN']='OK';
        $_SESSION['TYPE']='teacher';
        $_SESSION['TECH_ID'] = null;
        $_SESSION['TEACHER_ID'] = $teacher_id;
        $_SESSION['USERNAME'] = $username;
        header('Location: ../requests/index.php');
        exit();
    } else
    {
        $message = "Login failed. Please try again.";
        include 'people_login.php';
        exit();
    }
}
//if all else fails
include 'login.php';
exit();

?>
