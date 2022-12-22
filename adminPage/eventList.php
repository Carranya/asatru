<?php
    require('events.php');

    $reverseEvents = array_reverse($events);
    foreach($reverseEvents as $event){
        $eventDate = $event['date'] . " " . $event['time'];
        $eventDT = new \DateTimeImmuTable($eventDate);
        $showDate = $eventDT->format('d. F Y - H:i');

        $now = new \DateTimeImmuTable;
        if($now > $eventDT){
            $opacity = 0.4;
        } else {
            $opacity = 1;
        }

        echo "<div class='flex justify-center m-10'>";
            echo "<div class='w-96 bg-lime-600 rounded-xl text-center p-5' style='opacity: $opacity'>";
                echo "<span class='text-xl text-white font-bold'>";
                echo $event['title'] . "<br>";
                echo $showDate . "<br>";
                echo $event['location'] . "<br>";
                echo "</span>";
            echo "</div>";
        echo "</div>";
    }