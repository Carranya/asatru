<div class='flex justify-center m-10'>
    <div class='w-96 bg-lime-600 rounded-xl text-center p-5'>
        <span class='text-white font-bold underline'>Neues Treffen eintragen:</span>
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
              <?php
                echo "<input
                  type='text'
                  name='editTitle'
                  class='
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-white
                    bg-lime-500 bg-clip-padding
                    rounded
                    transition
                    ease-in-out
                    mt-5
                    focus:text-white focus:bg-lime-500 focus:outline-none
                  '
                  value='" . $event['title'] . "'
                  autofocus
                >";
                ?>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
            <?php
                $date = new DateTimeImmuTable;
                $newDate = $date->format('Y-m-d');
                echo "<input
                  type='date'
                  name='editDate'
                  class='
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-white
                    bg-lime-500 bg-clip-padding
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-white focus:bg-lime-500 focus:outline-none
                  '
                  value='" . $event['date'] . "'
                >";
                ?>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
            <?php
                echo "<input
                  type='time'
                  name='editTime'
                  class='
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-white
                    bg-lime-500 bg-clip-padding
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-white focus:bg-lime-500 focus:outline-none
                  '
                  value='" . $event['time'] . "'
                >";
            ?>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <?php
                echo "<input
                  type='text'
                  name='editLocation'
                  class='
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-white
                    bg-lime-500 bg-clip-padding
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-white focus:bg-lime-500 focus:outline-none
                  '
                  value='" . $event['location'] . "'
                >";
                ?>
            </div>
        </div>
        <div class="flex justify-center">
          <?php
            echo "<button name='editEvent' value=". $event['id'] . " class='m-3 hover:opacity-40'><img src='img/icons/done.png' class='w-10 h-10'></button>";
            echo "<button class='m-3 hover:opacity-40'><img src='img/icons/close.png' class='w-10 h-10'></button>";
          ?>
        </div>
    </div>
</div>