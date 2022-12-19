<?php

if(isset($_POST['historie'])){
    $mainPage = 'historie';
    $subPageActive = showSubPage($mainPage, $_POST['historie']);
}