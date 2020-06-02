 <div>
    <div class="my-4 m-2  p-2 border rounded">
        <p class="text-blue-500 text-xl ">Comment</p>
        <form wire:submit.prevent="store">
            <div class="flex"> 
                
                <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2 outline-none focus:shadow-outline " 
                placeholder="You want to comment ?" wire:model.debounce500ms="commentContent" >
                @error('commentContent')
                    <p class="text-red-700 text-xs">{{ $message }}</p>
                @enderror
                <div class="py-2">
                    <button type="submit" class="p-2  bg-blue-500 w-30 rounded shadow text-white">Comment</button>
                </div>
            </div>
            <div>
                @if($commentImage)    
                    <img src={{$commentImage}} width="200">
                @endif            
                <input class="my-2" type="file" id="commentImage"  wire:change="$emit('commentFileChosen')">
            </div>
        </form>
    </div>
    
    @foreach($comments as $comment)
        <div class=" bg-white-200  rounded border shadow p-3  my-2" > 
            <p class="text-gray-800 text-sm">{{ $comment->user->name}} <br> 
            <p class="text-gray-600 text-xs"> {{ $comment->created_at->diffForHumans()}}</p>  

            <p class=" text-md">{{ $comment->comment}}</p>
            @if($comment->image)
                <img src="{{'storage/'.$comment->image}}"  width="200">
            @endif    

        </div>
    @endforeach

 </div>      


 <script>
    window.livewire.on('commentFileChosen', () => {
        let inputField = document.getElementById('commentImage');
        let file = inputField.files[0];
        let reader = new FileReader();
        reader.onloadend = () =>{
            window.livewire.emit('commentfileUpload', reader.result)
        }
        reader.readAsDataURL(file);
    })
</script>
    
    
