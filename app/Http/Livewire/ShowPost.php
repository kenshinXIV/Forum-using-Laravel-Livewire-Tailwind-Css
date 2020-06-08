<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Post;
class ShowPost extends Component
{
   public $post;
   
    public function mount(Post $post)
    {
        $this->post = $post;
    }
    public function render()
    {
        return view('livewire.show-post')->withPost($this->post);
    }
}
