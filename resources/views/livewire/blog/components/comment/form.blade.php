<form wire:submit.prevent="save" class="row  mb-4 {{ $parent_id ? 'collapse'   : ''    }}"  id="replay-{{ $parent_id ?? \Illuminate\Support\Str::random() }}"  >
    <div class="col-6">
        <input wire:model.defer="content" type="text" class="form-control" placeholder="{{ $parent_id ? 'Replay' : 'Comment'   }}"
               aria-label="{{ $parent_id ? 'Replay' : 'Comment'   }}">
        @error('content')
        <div class="invalid-feedback d-block"> {{ $message   }} </div>
        @enderror

    </div>
    <div class="col-auto">
        <button type="submit" wire:loading.attr="disabled" class="btn btn-primary"> {{ $parent_id ? 'Replay' : 'Comment'   }}</button>
    </div>
</form>