<form action='index.php?page=adminPage' method='post'>
<?php
    global $adminPwd;

    if(isset($_POST['logout'])){
        session_destroy();
        include 'adminPage/confirmLogout.php';
        die();
    }

    if(@$_POST['password'] == $adminPwd){
        $_SESSION['admin'] = true;
    }

    include 'functions/adminActions.php';

    if(!isset($_SESSION['admin'])){
        include 'adminPage/login.php';
    } else {
        include 'adminPage/logout.php';
        include 'adminPage/formular.php';
        include 'adminPage/eventList.php';
    }
?>
</form>