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
            $getDate->getEvent();
            echo $getDate->getTitle();
            echo "<br>";
            echo $getDate->getNextDate();
            echo "<br>";
            echo $getDate->getLocation();
          ?>
        </h1>
    </div>
</div>
<br>
<div class='flex justify-center'>
  <img src='img/stammtisch/RabemitHorn.jpg' class='w-[700px]'>
</div>
<div class='text-sm text-center'>
  Bild: Lumina Obscura Photography
</div>
<br>
<div class='text-justify'>
  Seit Anfang 2010 treffen wir uns  regelmäßig zum Stammtisch und zu Jahreskreisfesten!<br>
  Alle Asatru und Interessierte sind an unseren Stammtischen herzlich willkommen!<br>
  Hast du Lust auch mit dabei zu sein ?<br>
  Sende einfach eine Mail an uns (<a href='mailto:asatruSchweiz@gmx.ch'>AsatruSchweiz@gmx.ch</a>), oder melde dich in unserem Forum zum Stammtisch an.<br>
  Im Forum findet du auch die aktuellen Termine zum Stammtisch.<br>
</div>
<br>
<form action='index.php?page=adminPage' method='post'>
  <div class='flex justify-center m-10'>
      <div class=' bg-lime-600 rounded-xl text-center p-5 hover:opacity-40'>
        <button class='text-white font-bold'>Neue Termine eintragen</button>
      </div>
  </div>
</form>