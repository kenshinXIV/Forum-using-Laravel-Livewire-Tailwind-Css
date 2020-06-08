<div class="py-4">
    @auth
        {{ auth()->user()->name}}
    @endauth
    <a  class="mx-3 p-2 border rounded hover:text-gray-400   cursor-pointer "  wire:click="logout">Logout</a>
</div>