<?php

if(isset($_POST['editEvent'])){
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

if(isset($_POST['createEvent'])){
    global $events;
    $id = count($events)+1;
    $events[] = [
        'id' => $id,
        'title' => $_POST['title'],
        'date' => $_POST['date'],
        'time' => $_POST['time'],
        'location' => $_POST['location'],
        'deleted' => 0,
    ];
    saveEvent();
}