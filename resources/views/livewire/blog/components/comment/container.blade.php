<div class="card mb-3">
    <div class="card-body">
        <div class="d-flex flex-start">
            <img class="rounded-circle shadow-1-strong me-3"
                 src="{{ 'https://ui-avatars.com/api/?name='. urlencode(substr($this->comment->content , 0 , 8) ).'&color=7F9CF5&background=EBF4FF'  }}"
                 alt="avatar" width="40"
                 height="40"/>
            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold mb-0">
                        <span class="text-dark ms-2 text-wrap">{{ $this->comment->content  }}</span>
                    </h6>
                    <p class="mb-0"> {{  $this->comment->created_at->diffForHumans() }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="small mb-0" style="color: #aaa;">
                        <a data-bs-toggle="collapse" href="#replay-{{$this->comment->id}}" role="button"
                           aria-expanded="true" class="link-grey">Reply</a>
                        @if($replies->count())
                            •
                            <a data-bs-toggle="collapse" href="#replies-{{$this->comment->id}}" role="button"
                               aria-expanded="false" class="link-grey">Replies</a>
                        @endif

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <livewire:blog.components.comment.form :commentable="$this->comment->commentable" :wire:key="\Illuminate\Support\Str::random()"
                                               :parent_id="$this->comment->id"/>
        @if($replies->count())
            <div class="collapse show" id="replies-{{$this->comment->id}}">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="text-dark mb-0">Replies </h4>
                </div>
                @foreach($replies as $replay )
                    <livewire:blog.components.comment.container :wire:key="\Illuminate\Support\Str::random()"
                                                                :comment="$replay"/>
                @endforeach
            </div>
        @endif
    </div>
</div>