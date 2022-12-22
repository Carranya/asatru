<?php

namespace Asatru;

class DateAndTime {
    public function getDate(){
        
        require('events.php');
        $now = new \DateTimeImmuTable;
        $limit = false;
        foreach($events as $event){
            $checkDate = $event['date'] . " " . $event['time'];
            $nextDate = new \DateTimeImmuTable($checkDate);

            if($now > $nextDate){
                continue;
            } else {
                if($limit == true){
                    continue;
                } else {
                    $this->title = $event['title'];
                    $this->nextDate = $nextDate->format('d. F Y - H:i');
                    $this->location = $event['location'];
                    $limit = true;
                }
            }
        }
    }

    public function getTitle(){
        if(!isset($this->title)){
            die('Kein Eintrag');
        } else {
            return $this->title;
        }
    }

    public function getNextDate(){
        return $this->nextDate;
    }

    public function getLocation(){
        return $this->location;
    }
}