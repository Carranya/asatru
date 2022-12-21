<?php

function getBanner($page){
    if(isset($page)){
        echo "<div class='absolute w-full left-0 right-0 m-auto text-center flex justify-center items-center h-40'><div id='bannerText'><h1 class='text-5xl text-red-600 font-bold'>Asatru Schweiz</h1><br><br><h1 class='text-4xl text-white font-bold'>Alter Glaube neu gelebt</h1></div></div>";
        echo "<img src='img/banner2.jpg' class='w-full h-40 object-cover'>";
    } else {
        echo "<div class='absolute w-full left-0 right-0 m-auto text-center flex justify-center items-center h-40 md:h-[900px]'><div id='bannerText'><h1 class='text-5xl md:text-8xl text-red-600 font-bold'>Asatru Schweiz</h1><br><br><h1 class='text-4xl md:text-7xl text-white font-bold'>Alter Glaube neu gelebt</h1></div></div>";
        echo "<img src='img/banner2.jpg' class='w-full object-cover'>";
    }
}

function getPage($page){
    if(isset($page)){
        include "pages/" . $page . ".php";
    } else {
        include 'pages/home.php';
    }
}

function showSubPage($mainPage, $subPage){
    getPage($mainPage);
    echo "<script>scrollToSub('" . $subPage . "');</script>";    
    return $subPageActive = true;
}