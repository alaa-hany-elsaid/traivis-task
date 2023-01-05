<?php

namespace App\Http\Livewire\Blog\Components\Post;

use App\Models\Post;
use Livewire\Component;

class Container extends Component
{

    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function getCommentsProperty()
    {
        return $this->post->comments;
    }

    public function render()
    {
        return view('livewire.blog.components.post.container')->with([
            'comments' => $this->comments,
        ]);
    }

    protected function getListeners()
    {
        return [
            'post.update.' . $this->post->id => '$refresh',
        ];
    }
}
