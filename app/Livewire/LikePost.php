<?php

namespace App\Livewire;

use Livewire\Component;

class LikePost extends Component
{
    public $post;

    public function like()
    {
        if ($this->post->checkLike(auth()->user())) {
            // Unlike the post
            $this->post->likes()->where('post_id', $this->post->id)->delete();
        } else {
            // Like the post
            $this->post->likes()->create([
                'user_id' => auth()->user()->id
            ]);
        }
    }

    public function render()
    {
        return view('livewire.like-post');
    }
}
