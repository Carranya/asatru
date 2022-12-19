<?php

function getPage($page){
    if(isset($page)){
        include "pages/" . $page . ".php";
    } else {
        include "pages/home.php";
    }
}

function showSubPage($mainPage, $subPage){
    getPage($mainPage);
    echo "<script>scrollToSub('" . $subPage . "');</script>";    
    return $subPageActive = true;
}