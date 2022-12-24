<?php
if(isset($_POST['createEvent'])){
    global $events;
    $id = count($events)+1;
    $events[] = [
        'id' => $id,
        'title' => $_POST['title'],
        'date' => $_POST['date'],
        'time' => $_POST['time'],
        'location' => $_POST['location'],
    ];
    saveEvent();
}