<div class=" flex justify-center w-full">
    <section class="border  rounded shadow-lg p-4 w-6/12 bg-teal-700">
        <h1 class="text-center text-3xl text-white my-5">Register</h1>
        <hr>
        <form action="" wire:submit.prevent="submit">
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="text" class="p-2 rounded border shadows-sm w-full" placeholder="Name" 
                    wire:model.debounce500ms="name"/>
                    <div>
                        @error('name')
                            <p class="text-red-700 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="email" class="p-2 rounded border shadows-sm w-full" placeholder="Email" 
                    wire:model.debounce500ms="email"/>
                    <div>
                        @error('email')
                            <p class="text-red-700 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="password" class="p-2 rounded border shadows-sm w-full" placeholder="Password" 
                    wire:model.debounce500ms="password"/>
                    <div>
                        @error('password')
                            <p class="text-red-700 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="password" class="p-2 rounded border shadows-sm w-full" placeholder="Confirm Password" 
                    wire:model.debounce500ms="password_confirmation"/>
                    <div>
                        @error('confirmPassword')
                            <p class="text-red-700 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex justify-around my-8">
                <button class="bg-white w-60  text-teal-700 block font-bold py-2 px-4 rounded-full hover:bg-gray-700"> Register</button>
            </div>
        </form>
    </section>

</div>