<?php
require('class/DateAndTime.php');
use Asatru\DateAndTime;
?>

<!-- Nächste Treffen -->
<div class='flex justify-center m-10'>
    <div class='w-96 bg-lime-600 rounded-xl text-center p-5'>
        <span class='text-white font-bold underline'>Nächster Treff:</span>
        <h1 class='text-xl text-white font-bold'>
          <?php
            $getDate = new DateAndTime;
            $getDate->getDate();
            echo $getDate->getTitle();
            echo "<br>";
            echo $getDate->getNextDate();
            echo "<br>";
            echo $getDate->getLocation();
          ?>
        </h1>
    </div>
</div>
<form action='index.php?page=adminPage' method='post'>
  <div class='flex justify-center m-10'>
      <div class=' bg-lime-600 rounded-xl text-center p-5 hover:opacity-40'>
        <button class='text-white font-bold'>Neue Termine eintragen</button>
      </div>
  </div>
</form>