<?php

namespace App\Http\Livewire\Blog\Components\Comment;

use App\Models\Comment;
use Livewire\Component;

class Form extends Component
{
    public $parent_id = null;
    public $commentable;
    public $content   = '';

    protected $rules = [
        'content' => 'required|string|min:3|max:255',
    ];

    public function mount($commentable, int $parent_id = null)
    {
        $this->commentable = $commentable;
        $this->parent_id   = $parent_id;
    }


    public function render()
    {
        return view('livewire.blog.components.comment.form');
    }


    public function save()
    {
        $this->validate();

        $comment            = new Comment();
        $comment->content   = $this->content;
        $comment->parent_id = $this->parent_id;
        $this->commentable->comments()->save($comment);
        if ($this->parent_id) {

            $this->emitUp('comment.update.' . $this->parent_id);
        } else {
            $this->emitUp('post.update.' . $this->commentable->id);
        }


    }

}
