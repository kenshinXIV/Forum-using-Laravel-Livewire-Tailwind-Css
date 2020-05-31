<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Post;
class Posts extends Component
{
    public $content;
    public $user_id = 1;
    public $image;
    public function store(){
        $this->validate([
            'content' => 'required'
        ]);

        Post::create([
            'user_id' => $this->user_id,
            'content' => $this->content,
           
        ]);
        $this->content = "";
        session()->flash('message', 'Post successfully Added.');
    }

    public function render()
    {
        $posts= Post::latest()->paginate(5);
        return view('livewire.posts',)->withPosts($posts);
    }
}
