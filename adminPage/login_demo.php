<div class='flex justify-center m-10'>
    <div class='w-96 bg-lime-600 rounded-xl text-center p-5'>
        <span class='text-white font-bold underline'>Bitte Kennwort eingeben:</span>
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <input
                    name='password'
                    type="password"
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
                    opacity-40
                  "
                  value='abcdefghijklmnopqrstuvwxyz0123456789+"*ç%&/()=?'
                  readonly
                >
            </div>
        </div>
        <div class='flex justify-center'>
            <div class='text-xl bg-red-600 p-5 m-5 rounded-xl text-center w-80'>
                <span class='font-bold'>Demo Version</span><br>
                Passwordeingabe nicht nötig
                <input type='hidden' name='password' value='Admin'>
            </div>
        </div>
        <div class="flex justify-center">
            <div class='w-24 bg-lime-500 rounded-xl text-center p-2 hover:opacity-40'>
                <button class='text-white font-bold'>Absenden</button>
            </div>
        </div>
    </div>
</div>