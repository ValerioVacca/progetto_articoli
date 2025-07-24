<div>

    @if (session('articleCreated'))
        <div class="alert alert-success">
            {{ session('articleCreated') }}
        </div>
    @endif

    <form wire:submit="store">

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input wire:model.live.debounce.1000ms="title" type="text" class="form-control" id="title">

            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label>
            <input wire:model.live.blur="subtitle" type="text" class="form-control" id="subtitle">
           
            @error('subtitle')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Corpo</label>
            <textarea wire:model.live="body" class="form-control" id="body"></textarea>
            
            @error('body')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Inserisci Articolo</button>
    </form>
</div>
