<div class='flex justify-center m-10'>
    <div class='w-96 bg-lime-600 rounded-xl text-center p-5'>
        <span class='text-white font-bold underline'>Neues Treffen eintragen:</span>
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <input
                  type="text"
                  class="
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
                  "
                  value="Stammtisch"
                >
            </div>
        </div>
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
            <?php
                $date = new DateTimeImmuTable;
                $newDate = $date->format('Y-m-d');
                echo "<input
                  type='date'
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
                  value='" . $newDate . "'
                >";
                ?>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <input
                  type="time"
                  class="
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
                  "
                  value='18:00'
                >
            </div>
        </div>
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <input
                  type="text"
                  class="
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
                  "
                  value="Zürich"
                >
            </div>
        </div>
    </div>
</div>