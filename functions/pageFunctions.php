<?php

function getPage($page){
    if(isset($page)){
        include "pages/" . $page . ".php";
    } else {
        include "pages/home.php";
    }
}