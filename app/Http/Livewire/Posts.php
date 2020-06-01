<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;


class Posts extends Component
{
    public $content;
    public $user_id = 1;
    public $image;
    public $active =1;

    

    protected $listeners = [
        'fileUpload' => 'handleFileUpload',
        'postSelected',
    ];

    public function postSelected($postId)
    {
        $this->active = $postId;
       
    }
    public function handleFileUpload($imageData)
    {
        $this->image = $imageData;
    }

    public function store(){
        $this->validate([
            'content' => 'required'
        ]);
        $image = $this->storeImage();

        Post::create([
            'user_id' => $this->user_id,
            'content' => $this->content,
            'image' => $image,
           
        ]);
        $this->content = "";
        $this->image = "";
        session()->flash('message', 'Post successfully Added.');
    }

    public function storeImage()
    {
        if(!$this->image){
            return null;
        } 
        $img = ImageManagerStatic::make($this->image)->encode('jpg');
        $name = Str::random() . '.jpg';
        Storage::disk('public')->put($name,$img);
        return $name;
    }

    public function render()
    {
        $posts= Post::latest()->paginate(5);
        return view('livewire.posts',)->withPosts($posts);
    }
}
