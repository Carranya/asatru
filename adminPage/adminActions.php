<?php

if(isset($_POST['editEvent'])){
    if($demo == true){
        include 'adminPage/demo_alert.php';
    } else {

        global $events;
        $id = $_POST['editEvent']-1;
        $events[$id] = [
            'id' => $_POST['editEvent'],
            'title' => $_POST['editTitle'],
            'date' => $_POST['editDate'],
            'time' => $_POST['editTime'],
            'location' => $_POST['editLocation'],
            'deleted' => $events[$id]['deleted'],
        ];
        saveEvent();
    }
}

if(isset($_POST['createEvent'])){
    if($demo == true){
        include 'adminPage/demo_alert.php';
    } else {
        global $events;
        $id = count($events)+1;
        $events[] = [
            'id' => $id,
            'title' => $_POST['title'],
            'date' => $_POST['date'],
            'time' => $_POST['time'],
            'location' => $_POST['location'],
            'deleted' => 'false',
        ];
        saveEvent();
    }
}

if(isset($_POST['delete'])){
    if($demo == true){
        include 'adminPage/demo_alert.php';
    } else {
        global $events;
        $id = $_POST['delete']-1;
        $events[$id]['deleted'] = 'true';
        saveEvent();
    }
}