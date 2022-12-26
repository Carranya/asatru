<form action='index.php?page=adminPage' method='post'>
<?php
    global $adminPwd;
    global $demo;

    if(isset($_POST['logout'])){
        session_destroy();
        include 'adminPage/confirmLogout.php';
        die();
    }

    /* if(@$_POST['password'] == $adminPwd){
        $_SESSION['admin'] = true;
    } */

    if(isset($_POST['password'])){
        if(password_verify($_POST['password'], $adminPwd)){
            $_SESSION['admin'] = true;
        } else {
            include 'adminPage/loginFailed.php';
        }
    }

    include 'adminPage/adminActions.php';

    if(!isset($_SESSION['admin'])){
        if($demo == true){
            include 'adminPage/login_demo.php';
        } else {
            include 'adminPage/login.php';
        }
    } else {
        include 'adminPage/logout.php';
        include 'adminPage/formular.php';
        include 'adminPage/eventList.php';
    }
?>
</form>