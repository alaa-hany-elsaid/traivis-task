<div class="card">
    <div class="card-body">
        <h5 class="card-title"> {{ $post->title  }}  </h5>
        <p class="card-text"> {{ $post->content }}</p>
    </div>
    <div class="card-footer">
        <livewire:blog.components.comment.form :commentable="$post" :wire:key="\Illuminate\Support\Str::random()"
        />
        <div>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="text-dark mb-0">Comments </h4>
            </div>
            @foreach($comments as $comment )
                <livewire:blog.components.comment.container :wire:key="\Illuminate\Support\Str::random()"
                                                            :comment="$comment"/>
            @endforeach
        </div>
    </div>
</div>
