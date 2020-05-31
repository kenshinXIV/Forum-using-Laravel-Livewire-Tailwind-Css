<div class="container m-4 p-2">
    <div class="flex md:flex-row flex-wrap border shadow">
        <div class="w-full md:w-1/2   bg-white-100 p-7 text-black-200">
            <div class="m-1 border rounded p-2 ">
                <p class="text-center text-teal-500 text-3xl ">Recent Post</p>
          
                @foreach($posts as $post)
                <div class=" bg-white-200  rounded border shadow p-3  my-2"> 
                    <p class="text-sm text-gray-700">Posted: {{ $post->created_at->diffForHumans()}}</p>
                    <p class="text-md">{{ $post->user->name}}</p>
                    <p class="text-gray-600 text-sm">{{ $post->content}}</p>
                </div>
                @endforeach
                {{ $posts->links() }}
            </div>
        </div>
        <div class="w-full md:w-1/2 bg-white-100 p-4 text-black-700">
            
            <form class=" my-4 m-2  p-2 border rounded"wire:submit.prevent="store">
                <p class="text-green-500 text-3xl ">Create Post</p>

                 <div>
                    @if (session()->has('message'))
                    <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md" role="alert">
                        <div class="flex">
                            <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                            <div>
                            <p class="font-bold text-green-900">Notification: </p>
                            <p class="text-sm text-green-500">{{ session('message') }}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="flex"> 
                    <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2 outline-none focus:shadow-outline " 
                    placeholder="What's in your mind ?" wire:model.debounce500ms="content" >
                    @error('content')
                        <p class="text-red-700 text-xs">{{ $message }}</p>
                    @enderror
                    <div class="py-2">
                        <button type="submit" class="p-2  bg-blue-500 w-20 rounded shadow text-white">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

