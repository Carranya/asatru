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
        if(@$_POST['pick'] == $event['id']){
            include 'adminPage/editEvent.php';
        } else {
            echo "<div class='flex justify-center m-10'>";
                echo "<div class='w-96 bg-lime-600 rounded-xl text-center p-5' style='opacity: $opacity'>";
                    echo "<span class='text-xl text-white font-bold'>";
                        echo $event['title'] . "<br>";
                        echo $showDate . "<br>";
                        echo $event['location'] . "<br>";
                    echo "</span>";
                    echo "<button name='pick' value=" . $event['id'] . " class='m-3 hover:opacity-40'><img src='img/icons/edit.png' class='w-10 h-10'></button>";
                    echo "<button name='delete' value=" . $event['id'] . " class='m-3 hover:opacity-40' onclick=\"return confirm('Are you sure?');\"><img src='img/icons/delete.png' class='w-10 h-10'></button>";
                echo "</div>";
            echo "</div>";
        }
    }