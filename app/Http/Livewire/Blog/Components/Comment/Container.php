<?php

namespace App\Http\Livewire\Blog\Components\Comment;

use App\Models\Comment;
use Livewire\Component;

class Container extends Component
{
    public Comment $comment;

    public function mount(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function getRepliesProperty()
    {
        return $this->comment->replies;
    }

    public function render()
    {
        return view('livewire.blog.components.comment.container')->with([
            'replies' => $this->replies,
        ]);
    }

    protected function getListeners()
    {
        return [
            'comment.update.' . $this->comment->id => '$refresh',
        ];
    }
}
