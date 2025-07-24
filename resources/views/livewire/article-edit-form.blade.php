<div>
    <div>

        @if (session('articleUpdated'))
            <div class="alert alert-success">
                {{ session('articleUpdated') }}
            </div>
        @endif
        <form wire:submit="update">

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input wire:model.live.debounce.1000ms="title" type="text" class="form-control" id="title">
            </div>

            <div class="mb-3">
                <label for="subtitle" class="form-label">Sottotitolo</label>
                <input wire:model.live.blur="subtitle" type="text" class="form-control" id="subtitle">
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Corpo</label>
                <textarea wire:model.live="body" class="form-control" id="body"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Modifica Articolo</button>
            <button wire:click="destroy()" type="submit" class="btn btn-danger">Elimina Articolo</button>
        </form>
    </div>

</div>
