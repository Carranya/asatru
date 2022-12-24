<?php

function saveEvent(){
    global $events;
    $content = "<?php \$events = [\n\n";
    foreach($events as $event){
        $content .= "[\n";
        $content .= "'id' => " . $event['id'] . ",\n";
        $content .= "'title' => '" . $event['title'] . "',\n";
        $content .= "'date' => '" . $event['date'] . "',\n";
        $content .= "'time' => '" . $event['time'] . "',\n";
        $content .= "'location' => '" . $event['location'] . "',\n";
        $content .= "],\n\n";
    }
    $content .= "];";
    file_put_contents('events.php', $content);
    chmod('events.php', 0777);
}