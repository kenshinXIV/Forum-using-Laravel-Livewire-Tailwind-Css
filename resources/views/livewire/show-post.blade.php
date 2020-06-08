<div class="my-2 mx-10 p-10 border rounded">
    <p class="text-gray-800 text-md">{{ $post->user->name}} <br> 
    <p class="text-gray-600 text-sm"> {{ $post->created_at->diffForHumans()}}</p>  
    <p class=" text-2xl ">{{ $post->content}}</p>  
    @if($post->image)
        <img src="{{ URL::asset('storage/' . $post->image) }}"  width="100%"  >	
    @endif  
  
    @livewire('comments' ,  ['post' => $post])

</div>
